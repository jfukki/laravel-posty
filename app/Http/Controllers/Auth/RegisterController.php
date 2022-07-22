<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function userRegister(Request $req)
    {
        $this->validate($req, [

            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|max:255',
            'password' => 'required|confirmed',
        ]);

        // create new user    //
        
        $user = new User();
        $user ->name = $req->name;
        $user ->username = $req->username;
        $user ->email = $req->email;
        $user ->password = Hash::make($req->password);

        $user->save();
        
        auth()->attempt($req->only('email', 'password'));
        return view('dashboard');
    }
}
