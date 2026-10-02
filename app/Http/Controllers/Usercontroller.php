<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Usercontroller extends Controller
{
    public function register(Request $request)
    {
        $incomingField = $request->validate([
            'name' => ['required', 'min:3', 'max:63'],
            'username' => ['min:3', 'max:63',  Rule::unique('users', 'name')],
            'email' => ['email', 'required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8']
        ]);

        $incomingField['password'] = bcrypt($incomingField['password']); //Password hashing
        $user = User::create($incomingField); //Create new user
        Auth::login($user); //login after creating the user
        return redirect('/');
    }
    public function login(Request $request)
    {
        $incomingField = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
        if (Auth::attempt(['name' => $incomingField['loginname'], 'password' => $incomingField['loginpassword']])) {
            $request->session()->regenerate(); //create new session
        }
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
