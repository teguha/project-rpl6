<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function register(){
        return view('registrasi');
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
        return redirect('/login');

    }
    public function proses_login(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $kredensil= $request->only('name','username','password',);
      

        if(Auth::attempt($kredensil)){
            $user= Auth::user();
           
                if($user->username =='admin_kr_slumbung'){
                        return redirect()->intended('admin');  
                }else if($user->username =='user_kr_slumbung'){
                        return redirect()->intended('user'); 
                }else if($user->username =='admin_kr_swela'){
                    return redirect()->intended('admin1');  
                }else if($user->username =='user_kr_swela'){
                        return redirect()->intended('user1');        
                }else{
                    return redirect('/login')->with('error','banjar anda tidak terdafar');
                }
            return view('login')->with('error','failed');
        }
        dd('gagal');
        return view('login')->with('error','login gagal!  banjar tidak tersedia');
    }

    public function logout(){
        Auth::logout();
        return redirect('/banjar');
    }
}
