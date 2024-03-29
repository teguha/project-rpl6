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



Route::get('/addBanjar',[HomeController::class,'index'])->name('add-banjars');
Route::get('/logins',[HomeController::class,'tes']);
Route::get('/coba',function(){
    return view('coba');
});

Route::post('/login',[AuthController::class,'login'])->name('login-view');
Route::post('/register',[AuthController::class,'register'])->name('register-view');
Route::post('/proses_login',[AuthController::class,'proses_login'])->name('proses-login');
Route::post('/user_register',[AuthController::class,'user_register'])->name('user-register');


Route::group(['midlleware'=>['auth']],function(){
    Route::group(['middleware'=>['cek_login:6']],function(){
        Route::get('Banjar_Digital',[AdminController::class,'index'])->name('Banjar_Digital-dasboard');
    });

    Route::group(['middleware'=>['cek_login:4']],function(){
        Route::get('Banjar_Digital1',[AdminController::class,'index'])->name('Banjar_iDigital-dasboard');
    });

    Route::group(['middleware'=>['cek_login:3']],function(){
        Route::get('kr_slumbung',[UserController::class,'logins'])->name('kr_slumbung-dasboard');
    });

    Route::group(['middleware'=>['cek_login:2']],function(){
        Route::get('Banjar_Digital2',[AdminController::class,'index'])->name('Banjar_oDigital-dasboard');
    });

    Route::group(['middleware'=>['cek_login:1']],function(){
        Route::get('Banjar_A',[UserController::class,'logins'])->name('Banjar_A-dasboard');
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


    Route::get('{id}/Banjarr-edit',[AdminController::class,'banjarEdit'])->name('banjar-edited');
    Route::get('{id}/sejarah-edits',[AdminController::class,'sejarahEdit'])->name('Sejarah-editss');
    Route::get('sejarah-data',[AdminController::class,'sejarahData'])->name('Sejarah-user');
    Route::get('banjars-data',[AdminController::class,'banjarData'])->name('banjars-user');
    Route::post('{id}/banjars-saves',[AdminController::class,'BanjarssEdit'])->name('saves-edit-banjar');


    Route::get('/{id}/Message-detail',[AdminController::class,'MessageDetail'])->name('message-detail');
    
    /* Blog Post Block List*/
    Route::get('/ListBanjar',[AdminController::class,'banjarListBlock'])->name('banjar-list-block');
    Route::get('/ListSejarah',[AdminController::class,'sejarahListBlock'])->name('sejarah-list-block');

});

Route::POST('banjar_save',[AdminController::class,'BanjarAdd'])->name('views-banjarr-saving');
Route::get('/banjar',[HomeController::class,'banjar'])->name('banjar-view');

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


    Route::post('/{id}/editsaveUpacara',[UserController::class,'UpacaraEditSave'])->name('upacara-edits');
    Route::post('/{id}/deleteupacara',[UserController::class,'delete_upacara'])->name('upacara-delete');


    //owner dashboard--------------------------------//
    Route::get('/Dashboard-owner',[AdminController::class,'dashboard'])->name('dashboard-users');
    Route::get('/Profile-owner',[AdminController::class,'profile'])->name('profile-users');
    
    Route::get('/anggota-data',[AdminController::class,'anggota'])->name('Anggota-user');
    Route::get('/anggota-detail',[AdminController::class,'anggotaDetail'])->name('anggota-detail');
    Route::get('/anggota-edit',[AdminController::class,'anggotaEdit'])->name('anggota-edit');
    Route::post('/anggota-delete',[AdminController::class,'Anggotadelete'])->name('anggota-delete');
    

    Route::get('sejarah-data',[AdminController::class,'sejarahData'])->name('Sejarah-user');
    Route::get('/sejarah-add',[AdminController::class,'sejarahAdd'])->name('Sejarah-add');
    Route::post('/sejarah-save',[AdminController::class,'sejarahSave'])->name('Sejarah-Save');
    Route::get('/{id}/sejarah-detail',[AdminController::class,'sejarahDetail'])->name('Sejarah-detail');

    Route::post('{id}/sejarah-delete',[AdminController::class,'sejarahdelete'])->name('Sejarah-delete');
    Route::post('{id}/sejarah-edis-save',[AdminController::class,'sejarahEditSave'])->name('Sejarah-edit-saves');

   
    Route::get('/Banjar-add',[AdminController::class,'BanjarssAdd'])->name('banjar-user-add');
    Route::get('/Banjar-detail',[AdminController::class,'BanjarssDetail'])->name('banjar-details');

    Route::post('/{id}/Banjars-edit',[AdminController::class,'BanjarssEdit'])->name('banjar-edits-save');
    Route::post('/Banjar-delete',[AdminController::class,'Banjarssdelete'])->name('banjar-deletes');

    Route::get('/Message-data',[AdminController::class,'MessageData'])->name('message-user');
    Route::post('/Message-delete',[AdminController::class,'Messagedelete'])->name('message-delete');
    Route::post('/Message-save',[AdminController::class,'Message'])->name('message-save');
});

