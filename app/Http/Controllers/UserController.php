<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function coba_list(){
        return view('User.coba');
    }

    public function dashboard_list(){
        return view('list.dashboard');
    }

    public function profile_list(){
        return view('list.profile');
    }

    public function agenda_list(){
        return view('list.agenda');
    }

    public function upacara_list(){
        return view('list.upacara');
    }
}
