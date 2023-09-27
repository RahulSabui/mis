<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Session::get('is_authenticated')) {
        return redirect('/');
    }
        return view('login');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        // Use the retrieved values for authentication
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

        // dd($credentials);
    
        if (Auth::attempt($credentials)) {
            Session::put('is_authenticated', true);
            // session()->flash('success', 'Login successful.');
            
            return redirect('/')->withInput()->with('success', 'Login successful.');;
        }
        return back()->withInput()->with('error', 'Invalid Credentials');
    }
    public function logout(){
        if (Session::get('is_authenticated')) {
            Session::forget('is_authenticated');
            return redirect('/signup');

        }
        
    }
}
