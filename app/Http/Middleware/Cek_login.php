<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$role)
    {
        if(!Auth::check()){
            return redirect('/banjar')->with('loginError','Login Gagal!, username dan password False');
        }
        $user=Auth::user();
        if($user->username == $role){
                return $next($request);            
        }
        Alert::error('Login Failed', 'Password atau Email tidak valid!');
        return redirect('/login')->with('loginError','Login Gagal!, username dan password False');
    }
}
