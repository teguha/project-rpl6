<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function index()
    {
    return 'ini halaman 1';
    }

    public function tes()
    {
    return view('logins');
    }
    
}