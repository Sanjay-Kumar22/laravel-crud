<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function Register()
    {
        return view('registration');
    }

    public function ProcessValidate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        
        if ($validator->fails()) {
            return redirect()->route('user.register')
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new user record
        $user = new User();
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); 
        $user->save();

        
        return redirect()->route('user.login')->with('success', 'Registration successful!');
    }

    public function LoginUser()
    {
        return view('login');
    }
    

    public function LoginAuthenticate(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

      
        if ($validator->fails()) {
            return redirect()->route('user.login')
                ->withErrors($validator)
                ->withInput();
        }

       
        if (Auth::attempt($request->only('email', 'password'))) {
          
          return view('dashboard', ['success' => 'Login successful!']);

            //return redirect()->route('dashboard')->with('success', 'Login successful!');
        } 
    }
}
