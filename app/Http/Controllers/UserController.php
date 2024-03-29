<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\message;
use App\Models\Upacara;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Crypt;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Database\Query\Builder;
class UserController extends Controller
{
    public function logins(Request $request){
        session(['banjar_id'=>auth()->User()->banjar_id]);
        session(['level'=>auth()->User()->level]);
        session(['email'=>auth()->User()->email]);
        $datas= $request->session()->get('pass');
     
        $banjar= DB::table('banjar')
        ->where('id','=',auth()->User()->banjar_id)
        ->value('name');

        $levels= $request->session()->get('level');
        return view('list.dashboard',compact('banjar','datas', 'levels'));
    }

    public function coba_list(){
        return view('User.coba');
    }

    public function dashboard_list(Request $request){

        session(['level'=>auth()->User()->level]);
        $levels= $request->session()->get('level');        
        return view('list.dashboard', compact('levels'));
    }

    public function profile_list(Request $request){
        session(['level'=>auth()->User()->level]);
        $levels= $request->session()->get('level');       
        $datas= $request->session()->get('pass');
        return view('list.profile',compact('datas', 'levels'));
    }

    public function new_agenda(){
        return view('tambah.agenda');
    }

    public function save_agenda(Request $request){
        $request->validate([
            'kegiatan'=>'required',
            'tanggal'=>'required',
            'waktu'=>'required',
            'tempat'=>'required'
        ]);
        $datas= $request->session()->get('banjar_id');
     
        $agenda= new Agenda();
        $agenda->banjar_id = $datas;
        $agenda->kegiatan = $request->kegiatan;
        $agenda->tanggal=$request->tanggal;
        $agenda->waktu= $request->waktu;
        $agenda->tempat= $request->tempat;
        $agenda->save();
        return redirect('/dashboard-user/agenda');
    } 

    public function edit_agenda($id){  
        $data= Agenda::find($id);
        return view('tambah.Edit',compact('data'));
    }
   

    public function agenda_list(Request $request){
        $datas= $request->session()->get('banjar_id');
        $hasils = Agenda::with('banjar')
        ->where([['banjar_id','=',$datas]])
        ->latest('updated_at')->paginate(5);
        $hasil= $hasils;
       
        $levels= $request->session()->get('level');
        date_default_timezone_set("Asia/Makassar");
        $time = date("y-m-d");
        $waktu = date("H:i:s");
        // $time= Carbon::now();
        // $hari= date('yyyy-mm-dd');
        // $time->toDateString($hari);
        Paginator::useBootstrap();
        return view('list.agenda',compact('hasil','time','waktu','levels'));
    }

    public function edit_save_agenda(Request $request, $id){
        $request->validate([
            'kegiatan'=>'required',
            'waktu'=>'required',
            'tanggal'=>'required',
            'tempat'=>'required'
        ]);
        $datas= $request->session()->get('banjar_id');
        $agenda= Agenda::find($id);
        $agenda->kegiatan = $request->kegiatan;
        $agenda->tanggal= $request->tanggal;
        $agenda->banjar_id=$datas;
        $agenda->waktu= $request->waktu;
        $agenda->tempat= $request->tempat;
        $agenda->save();
     
        return redirect('/dashboard-user/agenda');
    }

    public function delete_agenda($id){
        $agenda= Agenda::find($id);
        $agenda->delete();
        Alert::success('success', 'Berhasil dihapus');
        return redirect('dashboard-user/agenda');
    }

    public function new_upacara(){
        return view('tambah.upacara');
    }

    public function save_upacara(Request $request){
        $request->validate([
            'kegiatan'=>'required',
            'tanggal'=>'required',
            'waktu'=>'required',
            'tempat'=>'required',
            'ketentuan'=>'required'
        ]);
        $datas= $request->session()->get('banjar_id');
     
        $upacara= new upacara();
        $upacara->banjar_id = $datas;
        $upacara->kegiatan = $request->kegiatan;
        $upacara->tanggal=$request->tanggal;
        $upacara->waktu= $request->waktu;
        $upacara->tempat= $request->tempat;
        $upacara->ketentuan= $request->ketentuan;
        $upacara->save();
        return redirect('/dashboard-user/upacara');
    } 

    public function edit_upacara($id){  
        $data= Upacara::find($id);
        return view('tambah.EditUpacara',compact('data'));
    }
   

    public function upacara_list(Request $request){
        $datas= $request->session()->get('banjar_id');
        $hasils = Upacara::with('banjar')
        ->where([['banjar_id','=',$datas]])
        ->latest('updated_at')->paginate(5);
        $hasil= $hasils;
       
        $levels= $request->session()->get('level');
        date_default_timezone_set("Asia/Makassar");
        $time = date("y-m-d");
        $waktu = date("H:i:s");
        // $time= Carbon::now();
        // $hari= date('yyyy-mm-dd');
        // $time->toDateString($hari);
        Paginator::useBootstrap();
        return view('list.upacara',compact('hasil','time','waktu','levels'));
    }

    public function edit_save_upacara(Request $request, $id){
        $request->validate([
            'kegiatan'=>'required',
            'waktu'=>'required',
            'tanggal'=>'required',
            'tempat'=>'required',
            'ketentuan'=>'required',
        ]);
        $datas= $request->session()->get('banjar_id');
        $upacara = Upacara::find($id);
        $upacara->kegiatan = $request->kegiatan;
        $upacara->tanggal = $request->tanggal;
        $upacara->banjar_id = $datas;
        $upacara->waktu = $request->waktu;
        $upacara->tempat = $request->tempat;
        $upacara->ketentuan = $request->ketentuan;
        $upacara->save();
     
        return redirect('/dashboard-user/upacara');
    }

    public function delete_upacara($id){
        $upacara= Upacara::find($id);
        $upacara->delete();
        Alert::success('success', 'Berhasil dihapus');
        return redirect('dashboard-user/upacara');
    }

}
