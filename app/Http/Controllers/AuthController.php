<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{



    public function register(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $pwd = Hash::make($request->password);

        $userValidate = User::where('email', $request->email)->first();

        if($userValidate){
            return back()->with('status', 'Error, su email ya esta registrado');
        }

        $data['password'] = $pwd;

        $user = New User($data);
        // $user->nombre = $data['name'];
        // $user->email = $data['email'];
        // $user->password = $pwd;
        $user->save();

        $request->session()->regenerate();


        return redirect()->intended('/')->with('status', 'Te has registrado correctamente');
    }

    public function login(Request $request){

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $request->filled('remember');
        if(Auth::attempt($data, $remember)){
            $request->session()->regenerate();
            return redirect()->intended('');
        }

        return back()->with('status', 'Usuario y/o Contraseña no encontrados.');
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'Se ha cerrado sesión.');
    }
}
