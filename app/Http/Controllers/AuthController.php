<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function registration(){
        return view('auth.registration');

    }
    public function registration_post(Request $request)
    {
        $messages = [
            'name.required' => 'Le champ nom est requis.',
            'email.required' => 'Le champ email est requis.',
            'email.unique' => 'L\'adresse email est déjà utilisée.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password.min' => 'Le mot de passe doit comporter au moins 6 caractères.',
            'confirmpassword.required_with' => 'Le champ confirmation de mot de passe est requis.',
            'confirmpassword.same' => 'La confirmation de mot de passe doit correspondre au mot de passe.',
            'confirmpassword.min' => 'La confirmation de mot de passe doit comporter au moins 6 caractères.',
            'is_role.required' => 'Le champ rôle est requis.'
        ];

        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirmpassword' => 'required_with:password|same:password|min:6',
            'is_role' => 'required'
        ], $messages);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->confirmpassword = Hash::make($request->confirmpassword);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('login')->with('success', 'Enregistré avec succès.');
    }
    public function login_post(Request $request){
    //  dd($request->all());
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],true))

    {
        if(Auth::user()->is_role =='2'){
            // echo"chef";die();
            //cela affichera "agntmaritime" sur la sortie et interrompra ensuite l'exécution du script. Cela signifie que tout code après cette ligne ne sera pas exécuté.
          return redirect()->intended('chef/dashboard');
            //rediriger user ver dasbord de chef
        }
        else if(Auth::user()->is_role =='1'){
            // echo"agntmaritime";die();
            return redirect()->intended('Agentmaritime/dashboard');
        }
        else if(Auth::user()->is_role =='3'){
            // echo"client";die();
            return redirect()->intended('Client/dashboard');
        }else{
            return redirect('login')->with('error',' verfier le champ email ...');
        }



    }else{
        return redirect()->back()->with('error',' le mot de pass  incorrect');
    }

    }
    public function login(){
        return view('auth.login');
    }
}
