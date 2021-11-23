<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class AdminController extends Controller

{
    public function index(){
        Alert::success('Success Title', 'Success Message');
        return view('welcome');
    }

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

    public function new_agenda(){
        return view('tambah.agenda');
    }

    public function new_upacara(){
        return view('tambah.upacara');
    }

    public function save_agenda(Request $request){


        return redirect('list.agenda');
    }
}
