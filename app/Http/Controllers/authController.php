<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class authController extends Controller
{
     public function login()
    {
        return view("auth.login");
    }

    public function doLogin(Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

       if(Auth::attempt([
            'name' => $validate['username'],
            'password' => $validate['password']
       ], $request->input("remember"))) {
            $request->session()->regenerate(); 

            return redirect()->route('dashboard');
       }

       return back()->with('status', 'username or password incorrect');
    }

    public function register()
     {
       return view("auth.register");
     } 

    public function doRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc|unique:users,email',
            'password' => ['required', Password::min(8)->letters()->numbers()->symbols()]
        ]);

        $user = User::create($validated);

        Auth::attempt($validated);

        return redirect()->route('profilePic');
    }
    public function profilePic()
    {
        return view("auth.profile-pic");
    }

    public function changePicture(Request $request) {
        // $images = $request->file("images");


        $user = User::find(Auth::id());

        $path =  $request->file("images")->store('user');


        $user->images = $path;

        $user->save();
        dd($user);

        return redirect()->route('home');


    }


    public function logout(Request $request) {
            Auth::logout();
 
            $request->session()->invalidate();
         
            $request->session()->regenerateToken();
         
            return redirect()->route("home");
    }
}


