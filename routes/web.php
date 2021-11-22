<?php

use App\Models\Helo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController; //perintah supaya dapat menggunakan controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'index']);
Route::get('/logins',[HomeController::class,'tes']);
Route::get('/coba',function(){
    return view('coba');
});

Route::get('/login',[AuthController::class,'index'])->name('login-view');

Route::get('/register',[AuthController::class,'register'])->name('register-view');

Route::post('/proses_login',[AuthController::class,'proses_login'])->name('proses_login');

Route::post('/user_register',[AuthController::class,'user_registerr'])->name('user-register');


Route::group(['midlleware'=>['auth']],function(){
    Route::group(['middleware'=>['cek_login:admin']],function(){
        Route::get('admin',[AdminController::class,'index'])->name('admin-dasboard');
    });
    Route::group(['middleware'=>['cek_login:anggota']],function(){
        Route::get('user',[UserController::class,'user'])->name('user-dasboard');
    });
    Route::group(['middleware'=>['cek_login:admin']],function(){
        Route::get('admin1',[AdminController::class,'index'])->name('admin1-dasboard');
    });
    Route::group(['middleware'=>['cek_login:anggota']],function(){
        Route::get('user1',[UserController::class,'user'])->name('user1-dasboard');
    });
    Route::get('/logout',[AuthController::class,'logout'])->name('user-logout');
});


Route::get('/banjar',[HomeController::class,'banjar'])->name('banjar-view');

Route::get('/posting',[HomeController::class,'posting'])->name('login-view');

Route::post('/SimpanPosting',[HomeController::class,'Savedd'])->name('posting');

Route::prefix('/dashboard-user')->group(function(){
    Route::get('/',[UserController::class,'dashboard_list'])->name('dashboard-user');
    
    /*----------- profile user -----------*/
    Route::get('/profile',[UserController::class,'profile_list'])->name('profile-user');
    Route::get('/agenda',[UserController::class,'agenda_list'])->name('agenda-user');
    Route::get('/upacara',[UserController::class,'upacara_list'])->name('upacara-user');
});

Route::get('/coba',[UserController::class,'coba_list']);

