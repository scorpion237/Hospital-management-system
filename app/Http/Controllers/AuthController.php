<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    //Page de profim

    public function index(){

        return view('auth.dashboard');
    }

    //Gerer la connexion

    public function login(Request $request){
        //Request nous permet de recuperer toutes les données issus d'une requete

        $regles = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($regles)){

            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email'=> 'Email non reconnu',
            'password'=>'Mot de passe non recconu'
        ]);
    }

    public function login_page(){
        return view('welcome');
    }
}
