<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('Auth.Register');
    }




    public function register(Request $request){

        $messages=$this->getMessages();

        $validator = Validator::make($request->all(),
          [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8', 
          ],
          $messages
          );
  

          if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->role = 'user';

        $user->save();


        return Redirect::route('login');
    }




    protected function getMessages(){
        return $messages=[
         
            'name.required'=>'name is required',
            'email.required'=>'email is required',
            'password.required'=>'password is required',
            'password.min'=>'Min of caracters 8',
            'email.email'=>'Email not valid',
            'email.unique'=>'This email already exist',
         
        ];
      }

}
