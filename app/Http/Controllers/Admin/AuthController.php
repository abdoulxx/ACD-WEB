<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{


    public function login()
    {
       /** User::create([
           'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('0000')
        ]);**/
        return view('admin.auth.login');
    }
    public function doLogin(LoginRequest $request)
    {

        $credentials = $request->validate([
            'password' => 'required',
            'email' => 'required|email',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.home.index'));
        }

        return back()->withErrors([
           'email' => 'Aucun utilisateur ne correspond à ces identifiants'
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Vous êtes maintenant déconnectés');
    }
}
