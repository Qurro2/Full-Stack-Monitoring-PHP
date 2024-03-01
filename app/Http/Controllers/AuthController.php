<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $title = "Login | CIP Monitoring";
        return view('auth.login',compact('title'));
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            if(auth()->user()->level == 'itdev'){
                return redirect('/itdev');
            }elseif(auth()->user()->level == 'brand'){
                return redirect('/brand');
            }elseif(auth()->user()->level == 'marketing'){
                return redirect('/sales_suspect');
            }elseif(auth()->user()->level == 'admin'){
                return redirect('/admin');
            }elseif(auth()->user()->level == 'rekapjasa'){
                return redirect('/rekapjasa');
            }elseif(auth()->user()->level == 'administrator'){
                return redirect('/administrator');
            }else{
                return redirect()->back()->with('failed', 'Login Gagal!!'); 
            } 
        }else{
            return redirect()->back()->with('failed', 'Login Gagal.. Email atau Password Tidak Terdaftar!!');
        }
        
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    public function register()
    {
        $title = "Register | Monitoring CIP";
        return view('auth.register',compact('title'));
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password','level','photo']));
        
        auth()->login($user);
        
        return redirect()->back()->with('success', 'Registrasi Berhasil !!');
    }
}
