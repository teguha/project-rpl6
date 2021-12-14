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


































































































































Route::get('/logins',[HomeController::class,'tes']);
Route::get('/coba',function(){
    return view('coba');
});

Route::post('/login',[AuthController::class,'login'])->name('login-view');
Route::post('/register',[AuthController::class,'register'])->name('register-view');
Route::post('/proses_login',[AuthController::class,'proses_login'])->name('proses-login');
Route::post('/user_register',[AuthController::class,'user_register'])->name('user-register');


Route::group(['midlleware'=>['auth']],function(){
    Route::group(['middleware'=>['cek_login:4']],function(){
        Route::get('banjar_digital',[UserController::class,'logins'])->name('banjardigital-dasboard');
    });

    Route::group(['middleware'=>['cek_login:3']],function(){
        Route::get('kr_slumbung',[UserController::class,'logins'])->name('kr_slumbung-dasboard');
    });

    Route::group(['middleware'=>['cek_login:2']],function(){
        Route::get('Banjar_A',[UserController::class,'logins'])->name('Banjar_A-dasboard');
    });

    Route::group(['middleware'=>['cek_login:1']],function(){
        Route::get('kr_swela',[UserController::class,'logins'])->name('kr_swela-dasboard');
    });

    Route::get('/{id}/edit-agenda',[UserController::class,'edit_agenda'])->name('agenda-edit');
    Route::get('/{id}/edit-upacara',[UserController::class,'edit_upacara'])->name('upacara-edit');
    Route::post('/logout',[AuthController::class,'logout'])->name('user-logout');

    Route::get('/add-posting',[HomeController::class,'add_postingan'])->name('add-postingan');
    Route::get('/add-posting-banjar',[HomeController::class,'add_posting_banjar'])->name('add-banjar');
    Route::get('/add-posting-sejarah',[HomeController::class,'add_posting_sejarah'])->name('add-sejarah');

    Route::get('/coba',[AdminController::class,'coba_list']);
    Route::get('{id}/banjar-info',[HomeController::class,'views_banjar'])->name('views-banjar');
    Route::get('{id}/sejarah-info',[HomeController::class,'views_sejarah'])->name('views-sejarah');
    Route::post('/sejarah-info',[HomeController::class,'posting_sejarah'])->name('posting-sejarah');
    Route::post('/banjar-info',[HomeController::class,'posting_banjar'])->name('posting-banjar');
    Route::get('/blogBanjar',[HomeController::class,'blog'])->name('blog-view');
    
});


Route::get('/banjar',[HomeController::class,'banjar'])->name('banjar-view');
Route::post('message-save',[UserController::class,'message_save'])->name('message-save');
Route::get('message-data',[UserController::class,'message_data'])->name('message-view');
Route::get('/{id}/message-detail',[UserController::class,'message_detail'])->name('message-details');
Route::post('/{id}/message-delete',[UserController::class,'message_delete'])->name('message-delete');

/*Route::get('/posting',[HomeController::class,'posting'])->name('login-view');*/


Route::prefix('/dashboard-user')->group(function(){
    Route::get('/',[UserController::class,'logins'])->name('dashboard-user');
    
    /*----------- profile user -----------*/
    Route::get('/profile',[UserController::class,'profile_list'])->name('profile-user');
    Route::get('/agenda',[UserController::class,'agenda_list'])->name('agenda-user');
    Route::get('/upacara',[UserController::class,'upacara_list'])->name('upacara-user');

    /*----------- tambah -----------*/
    Route::get('/new-agenda',[UserController::class,'new_agenda'])->name('agenda-new');
    Route::get('/new-upacara',[UserController::class,'new_upacara'])->name('upacara-new');

    /*----------- edit -----------*/
    // Route::get('/{id}/edit-agenda',[AdminController::class,'edit_agenda'])->name('agenda-edit');
 
    /*----------- save -----------*/
    Route::post('/save-agenda',[UserController::class,'save_agenda'])->name('agenda-save');
    Route::post('/save-upacara',[UserController::class,'save_upacara'])->name('upacara-save');
  
    Route::post('/{id}/edit-save-agenda',[UserController::class,'edit_save_agenda'])->name('agenda-edit-save');
    Route::post('/{id}/delete-agenda',[UserController::class,'delete_agenda'])->name('agenda-delete');

    Route::post('/{id}/edit-save-upacara',[UserController::class,'edit_save_upacara'])->name('upacara-edit-save');
    Route::post('/{id}/delete-upacara',[UserController::class,'delete_upacara'])->name('upacara-delete');
});

