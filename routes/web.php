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

Route::post('/login',[AuthController::class,'index'])->name('login-view');

Route::post('/register',[AuthController::class,'register'])->name('register-view');

Route::post('/proses_login',[AuthController::class,'proses_login'])->name('proses_login');

Route::post('/user_register',[AuthController::class,'user_registerr'])->name('user-register');


Route::group(['midlleware'=>['auth']],function(){
    Route::group(['middleware'=>['cek_login:kr_slumbung']],function(){
        Route::get('kr_slumbung',[UserController::class,'logins'])->name('kr_slumbung-dasboard');
    });

    Route::group(['middleware'=>['cek_login:Banjar_A']],function(){
        Route::get('Banjar_A',[UserController::class,'logins'])->name('Banjar_A-dasboard');
    });

    Route::group(['middleware'=>['cek_login:kr_swela']],function(){
        Route::get('kr_swela',[UserController::class,'logins'])->name('kr_swela-dasboard');
    });

    Route::post('/logout',[AuthController::class,'logout'])->name('user-logout');
});


Route::get('/banjar',[HomeController::class,'banjar'])->name('banjar-view');

Route::get('/posting',[HomeController::class,'posting'])->name('login-view');

Route::post('/SimpanPosting',[HomeController::class,'Savedd'])->name('posting');

Route::prefix('/dashboard-user')->group(function(){
    Route::get('/',[AdminController::class,'dashboard_list'])->name('dashboard-user');
    
    /*----------- profile user -----------*/
    Route::get('/profile',[AdminController::class,'profile_list'])->name('profile-user');
    Route::get('/agenda',[AdminController::class,'agenda_list'])->name('agenda-user');
    Route::get('/upacara',[AdminController::class,'upacara_list'])->name('upacara-user');

    /*----------- tambah -----------*/
    Route::get('/new-agenda',[AdminController::class,'new_agenda'])->name('agenda-new');
    Route::get('/new-upacara',[AdminController::class,'new_upacara'])->name('upacara-new');
    /*----------- save -----------*/
    Route::get('/savenew-agenda',[AdminController::class,'savenew_agenda'])->name('agenda-savenew');
    Route::get('/savenew-upacara',[AdminController::class,'savenew_upacara'])->name('upacara-savenew');


    /*----------- edit -----------*/
    Route::get('/{id}/edit-agenda',[AdminController::class,'edit_agenda'])->name('agenda-edit');
    Route::get('/{id}/edit-upacara',[AdminController::class,'edit_upacara'])->name('upacara-edit');
    /*----------- save -----------*/
    Route::get('/saveedit-agenda',[AdminController::class,'saveedit_agenda'])->name('agenda-saveedit');
    Route::get('/saveedit-upacara',[AdminController::class,'saveedit_upacara'])->name('upacara-saveedit');


    Route::get('/{id}/delete-agenda',[AdminController::class,'delete_agenda'])->name('agenda-delete');
    Route::get('/{id}/delete-upacara',[AdminController::class,'delete_upacara'])->name('upacara-delete');
});

Route::get('/coba',[AdminController::class,'coba_list']);

