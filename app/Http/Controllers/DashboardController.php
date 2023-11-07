<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{

    public function index(){
        return view('Admin.Home');
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

}
