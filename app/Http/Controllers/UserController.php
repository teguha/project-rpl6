<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\message;
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
    
     
        $banjar= DB::table('banjar')
        ->where('id','=',auth()->User()->banjar_id)
        ->value('name');
        return view('list.dashboard',compact('banjar'));
    }

    public function coba_list(){
        return view('User.coba');
    }

    public function dashboard_list(){
        return view('list.dashboard');
    }

    public function profile_list(Request $request){
        return view('list.profile');
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

    public function AgendaEditSave(Request $request, $id){
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

    public function upacara_list(){
        return view('list.upacara');
    }

    public function message(Request $request){
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $data = new message();
        $data->nama =$request->nama;
        $data->email =$request->email;
        $data->subject =$request->subject;
        $data->message =$request->message;
        $data->save();
        return redirect('message_data');
    }

    public function message_data(){
        $message = message::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('message',compact('message'));
    }

    public function message_detail($id){
        $message = message::find($id);
        return view('messageEdit',compact('message'));
    }

    public function message_delete($id){
        $message = message::find($id);
        $message->delete();
        Alert::success('success', 'Berhasil dihapus');
        return redirect('message_data');
    }
}
