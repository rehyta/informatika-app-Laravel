<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\facades\Hash;
use App\Mail\RegistrationEmail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username'=>'required|max:255',
            'email'=> 'required|email:dns|unique:users',
            'password'=>'required|min:5'
        ]);

        $validateData['password']=Hash::make($validateData['password']);

        $user = User::create($validateData);

        Mail::to($user->email)->send(new RegistrationEmail($user));

        $user->sendEmailVerificationNotification();

        return redirect('/login')->with('success', 'Registration done! please login');
    }
}
