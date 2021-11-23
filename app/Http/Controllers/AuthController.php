<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index(){
        return view('loginOuth');
    }

    public function register(){
        return view('RegisterOuth');
    }

    public function user_registerr(Request $request){
        $request->validate([
            'username'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'level'=>'anggota'
        ]);
        

        return view('loginOuth');

    }
    public function proses_login(Request $request){
        $request->validate([
            'email'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $kredensil= $request->only('email','username','password');
        if(Auth::attempt($kredensil)){
            $user = Auth::user();
        
                if($user->username =='kr_slumbung'){
                        return redirect()->intended('kr_slumbung');  
                }else if($user->username =='kr_swela'){
                    return redirect()->intended('kr_swela');  
                }else if($user->username =='Banjar_A'){
                    return redirect()->intended('Banjar_A');        
                }else{
                    Alert::error('Login Failed', 'Banjar Tidak Terdaftar');
                    return redirect('/login');
                }
            Alert::error('Login Failed', 'Password dan Email tidak valid!');
            return view('loginOuth');
        }
        Alert::error('Login Failed','Password dan Email tidak valid!');
        return view('loginOuth')->with('error','Login Failed');
        
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/banjar');
    }

    // public function logout(){
    //     Auth::logout();
    //     return redirect('/banjar');
    // }
}
