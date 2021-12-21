<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

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
            'banjar_id'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        // $getid = DB::table('users')
        // ->select('banjar.id')
        // ->join('banjar', 'users.banjar_id', '=', 'banjar.id')
        // ->where('banjar.name', $request->banjar_id)
        // ->get();
        $getid = DB::table('banjar')
        ->where([['name','=',$request->banjar_id]])
        ->value('id');

        $getuser = DB::table('users')
        ->where([['username','=',$request->username]])
        ->value('username');
        
        $getmail = DB::table('users')
        ->where([['email','=',$request->email]])
        ->value('email');

        // User::create([
        //     'name'=>$request->name,
        //     'username'=>$request->username,
        //     'banjar_id'=>$getid,
        //     'email'=>$request->email,
        //     'password'=>bcrypt($request->password),
        //     'level'=>'anggota'
        // ]);
        
        if($getuser !=null && $getmail == null ){
            Alert::error('Login Failed', 'Username Telah Digunakan');
            return view('registerOuth');
        }elseif( $getmail !=null && $getuser ==null){
            Alert::error('Login Failed', 'Email Telah Digunakan');
            return view('registerOuth');
        }elseif( $getmail !=null && $getuser !=null){
            Alert::error('Login Failed', 'Username dan Email Telah Digunakan');
            return view('registerOuth');
        }else{
            if($getid==null){
                Alert::error('Login Failed', 'Banjar Tidak Terdaftar');
                return view('registerOuth');
            }else{
                $anggota= new User();
                $anggota->username = $request->username;
                $anggota->name = $request->name;
                $anggota->banjar_id=$getid;
                $anggota->email= $request->email;
                $anggota->password= bcrypt($request->password);
                $anggota->level= 'anggota';
                $anggota->save();
                return view('loginOuth');
            }
        }
    }

    public function proses_login(Request $request){
        $request->validate([
            'email'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $password= session(['pass'=>$request->password]);
           
            

        $getid = DB::table('users')
        ->where([['username','=',$request->username]])
        ->value('banjar_id');

        $kredensil= $request->only('email','username','password');
        if(Auth::attempt($kredensil)){
            $user = Auth::user();
                if($getid == '1' && auth()->User()->banjar_id =='1'){
                    $datas= $request->session()->get('pass');
                    return redirect()->intended('Banjar_A');         
                }elseif($getid == '2' && auth()->User()->banjar_id == '2'){
                    $datas= $request->session()->get('pass');
                    return redirect()->intended('Banjar_Digital');         
                }else{
                    Alert::error('Login Failed', 'Banjar Tidak Terdaftar');
                    return view('loginOuth');
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
