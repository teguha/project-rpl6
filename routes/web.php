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
    Route::group(['middleware'=>['cek_login:3']],function(){
        Route::get('kr_slumbung',[UserController::class,'logins'])->name('kr_slumbung-dasboard');
    });

    Route::group(['middleware'=>['cek_login:2']],function(){
        Route::get('Banjar_A',[UserController::class,'logins'])->name('Banjar_A-dasboard');
    });

    Route::group(['middleware'=>['cek_login:1']],function(){
        Route::get('kr_swela',[UserController::class,'logins'])->name('kr_swela-dasboard');
    });

    Route::get('/{id}/edit-Agenda',[UserController::class,'edit_agenda'])->name('agenda-edit');
    Route::get('/{id}/edit-upacara',[UserController::class,'edit_upacara'])->name('upacara-edit');
    Route::post('/logout',[AuthController::class,'logout'])->name('user-logout');
    
});


Route::get('/banjar',[HomeController::class,'banjar'])->name('banjar-view');

Route::get('/posting',[HomeController::class,'posting'])->name('login-view');

Route::post('/SimpanPosting',[HomeController::class,'Savedd'])->name('posting');

Route::prefix('/dashboard-user')->group(function(){
    Route::get('/',[UserController::class,'logins'])->name('dashboard-user');
    
    /*----------- profile user -----------*/
    Route::get('/profile',[UserController::class,'profile_list'])->name('profile-user');
    Route::get('/agenda',[UserController::class,'agenda_list'])->name('agenda-user');
    Route::get('/upacara',[UserController::class,'upacara_list'])->name('upacara-user');

    /*----------- tambah -----------*/
    Route::get('/newagenda',[UserController::class,'new_agenda'])->name('agenda-new');
    Route::get('/newupacara',[UserController::class,'new_upacara'])->name('upacara-new');

    /*----------- edit -----------*/
    // Route::get('/{id}/edit-agenda',[AdminController::class,'edit_agenda'])->name('agenda-edit');
 
    /*----------- save -----------*/
    Route::post('/saveagenda',[UserController::class,'save_agenda'])->name('agenda-save');
    Route::post('/saveupacara',[UserController::class,'save_upacara'])->name('upacara-save');
  
    Route::post('/{id}/editsaveAgenda',[UserController::class,'AgendaEditSave'])->name('agenda-edits');
    Route::post('/{id}/deleteagenda',[UserController::class,'delete_agenda'])->name('agenda-delete');

    Route::post('/{id}/editsaveUpacara',[UserController::class,'UpacaraEditSave'])->name('upacara-edits');
    Route::post('/{id}/deleteupacara',[UserController::class,'delete_upacara'])->name('upacara-delete');
});

Route::get('/coba',[AdminController::class,'coba_list']);
Route::get('{id}/banjar_info',[HomeController::class,'info'])->name('views-banjarr');
Route::get('{id}/sejarah_info',[HomeController::class,'info_sej'])->name('views-sejarah');
Route::get('/sejarah',[HomeController::class,'sejarah'])->name('add-sejarah');
Route::post('sejarah_info',[HomeController::class,'info_sejarah'])->name('posting-sejarah');

Route::get('/blogBanjar',[HomeController::class,'blog'])->name('blog-view');