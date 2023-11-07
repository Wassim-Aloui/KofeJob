<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class LoginController extends Controller
{


  // public function checkIdUser(){
  //   dd($this->loggedInUserId);
  // }
  
    public function showLogin(){
        return view('Auth.Login');
    }




    public function login(Request $request){
        

        $messages=$this->getMessages();

        $validator = Validator::make($request->all(),
          [
            'email'=>'required|email',
            'password'=>'required',
            
          ],
          $messages
          );
  
  
          if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }

        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {

          $token = Str::random(60);
          $user->update(['remember_token' => hash('sha256', $token)]);

          Cache::put('loggedInUserId', $user->id, now()->addMinutes(60));

         // dd($this->loggedInUserId);

          if ($user->isAdmin()) {
           
            return Redirect::route('HomeAdmin');
        }else {
          
          return Redirect::route('Home');
      }
        }



    }



    public function logout()
    {
      $loggedInUserId = Cache::get('loggedInUserId');
        $user = User::find($loggedInUserId);
    
        if ($user) {
            if ($user->isRememberTokenNotNull()) {
                 $user->logout();
                 Cache::forget('loggedInUserId');
            // dd($user);
            }
        }
    
         return redirect('/login');

      // dd($loggedInUserId);
    }

   




    protected function getMessages(){
        return $messages=[
         
            'email.required'=>'Title is required',
            'email.email'=>'Email not valid',
            'password.required'=>'Password is required',
           
         
        ];
      }
}
