<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Agenda;
use App\Models\User;
use App\Models\Banjar;
use App\Models\Sejarah;
use App\Models\message;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller

{
    public function index(){
        Alert::success('Success Title', 'Success Message');
        
        $banjar= DB::table('banjar')
        ->where('id','=',auth()->User()->banjar_id)
        ->value('name');
        return view('Admin.dashboard',compact('banjar'));
    }

    public function Dashboard(){
       
        
        $banjar= DB::table('banjar')
        ->where('id','=',auth()->User()->banjar_id)
        ->value('name');
        return view('Admin.dashboard',compact('banjar'));
    }

    public function Profile(Request $request){

        $banjar= DB::table('users')
        ->where('id','=',auth()->User()->id)
        ->get();

        return view('Admin.profile',compact('banjar'));
    }

    public function anggota(){
        $Anggotas= User::with('banjars')->latest()->paginate(5);
        Paginator::useBootstrap();
        return view('Admin.anggota',compact('Anggotas'));
    }

    public function anggotaDelete($id){
        $data= User::find($id);
        $data->delete();
        Alert::success('success', 'Berhasil dihapus');
        return view('Admin.anggota');
    }

    public function banjarData(){
        $Banjar= Banjar::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('Admin.banjar',compact('Banjar'));
    }

    public function banjarListBlock(){
        $data=Banjar::latest()->paginate(100);
        $Banjar= Banjar::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('info.fileBanjar',compact('Banjar', 'data'));
    }

    public function banjarDetail($id){
        $Banjar= Banjar::find($id);
        return view('Admin.banjarDetail',compact('Banjar'));
    }

    public function banjarEdit($id){
        $banjar= Banjar::find($id);
        return view('Admin.banjarEdit',compact('banjar'));
    }

    public function banjarEditSave(Request $request){
        $request->validate([
            'name' => 'required',
            'keterangan'=> 'required',
            'foto'=>'required|image|mimes:jepg,png,jpg|max:2048'
        ]);

        $image = $request->file('foto');
        $image_name= rand().".".$image ->getClientOriginalExtension();
       
        $data= array(
            'name'=> $request->name,
            'keterangan'=> $request->keterangan,
            'gambar'=> $image_name 
        );
        $image->move(public_path('foto'),$image_name);
        return view('Admin.banjar',compact('data'));
    }


    public function sejarahData(){
        $Sejarah= Sejarah::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('Admin.sejarah',compact('Sejarah'));
    }

    public function sejarahListBlock(){
        $data=Sejarah::latest()->paginate(100);
        $Sejarah= Sejarah::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('info.fileSejarah',compact('Sejarah', 'data'));
    }

    public function sejarahSave(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten'=> 'required',
            'foto'=>'required|image|mimes:jepg,png,jpg|max:2048'
        ]);

        $image = $request->file('foto');
        $image_name= rand().".".$image ->getClientOriginalExtension();
       
        $data= array(
            'judul'=> $request->judul,
            'konten'=> $request->konten,
            'gambar'=> $image_name 
        );
        $image->move(public_path('foto'),$image_name);
        Sejarah::create($data);
        return redirect('sejarah-data');
    }

    public function BanjarAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'keterangan'=> 'required',
            'foto'=>'required|image|mimes:jepg,png,jpg|max:2048'
        ]);

        $image = $request->file('foto');
        $image_name= rand().".".$image ->getClientOriginalExtension();
       
        $banjar = new Banjar();
        $banjar->name=$request->name;
        $banjar->keterangan=$request->keterangan;
        $banjar->gambar=$image_name;
        $banjar->save();
    
        $image->move(public_path('foto'),$image_name);
        
        return redirect('banjars-data');

    }

    public function sejarahDetail($id){
        $sejarah= Sejarah::find($id);
        return view('Admin.seharahDetail',compact('sejarah'));
    }

    public function sejarahAdd(){
        
        return view('Admin.addSejarah');
    }

    public function sejarahEdit($id){
        $sejarah=Sejarah::find($id);
        return view('Admin.sejarahEdit',compact('sejarah'));
    }

    public function sejarahEditSave(Request $request,$id){
        $old_image_name= $request->hidden_image;
        $image = $request->file('foto');

        if($image !=''){ //jika  image baru  ditambah 
            $request->validate([
                'judul' => 'required',
                'konten'=> 'required',
                'foto'=>'required|image|mimes:jepg,png,jpg|max:2048'
            ]);
            $image_name=$old_image_name; //ganti nama image barunya dengan menggunakan nama image yang lama
            $image->move(public_path('foto'),$image_name);
        }else{
            $request->validate([
                'judul' => 'required',
                'konten'=> 'required',
            ]);
            $image_name=$old_image_name;  
        }
        $datas = strip_tags($request->konten);
        $data= array(
            'judul'=> $request->judul,
            'konten'=> $datas,
            'gambar'=> $image_name,
        );     
        $sejarah=Sejarah::find($id);
        $sejarah->update($data);

        return redirect('/sejarah-data');
    }
    public function BanjarssEdit(Request $request ,$id){
      
        $old_image_name= $request->hidden_image;
        $image = $request->file('foto');

        if($image !=''){ //jika  image baru  ditambah 
            $request->validate([
                'name' => 'required',
                'keterangan'=> 'required',
                'foto'=>'required|image|mimes:jepg,png,jpg|max:2048'
            ]);
            $image_name=$old_image_name; //ganti nama image barunya dengan menggunakan nama image yang lama
            $image->move(public_path('foto'),$image_name);
        }else{
            $request->validate([
                'name' => 'required',
                'keterangan'=>'required'
            ]);
            $image_name=$old_image_name;  
        }
        
        $data= array(
            'name'=> $request->name,
            'keterangan'=> $request->keterangan,
            'gambar'=> $image_name,
        );     
    
        
        $banjar=Banjar::find($id);
        $banjar->update($data);
        return redirect('banjars-data');
    }


    public function sejarahDelete($id){
        $data= Sejarah::find($id);
        $data->delete();
        Alert::success('success', 'Berhasil dihapus');
        return view('Admin.sejarah');
    }

    public function BanjarssAdd(){
    
        return view('Admin.addBanjar');
    }


    public function banjarDelete($id){
        $data= Banjar::find($id);
        $data->delete();
        Alert::success('success', 'Berhasil dihapus');
        return view('Admin.banjar');
    }


    public function MessageSave(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        dd($request);

        $data = new message();
        $data->name =$request->name;
        $data->email =$request->email;
        $data->subject =$request->subject;
        $data->message =$request->message;
        $data->save();
        return redirect('Admin.message_data');
    }

    public function MessageData(){
        $message = message::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('Admin.message',compact('message'));
    }

    public function MessageDetail($id){
        $message = message::find($id);
        return view('messageDetail',compact('message'));
    }

    public function MessageDelete($id){
        $message = message::find($id);
        $message->delete();
        Alert::success('success', 'Berhasil dihapus');
        return redirect('Admin.message_data');
    }

    public function dashboard_list(){
        return view('list.dashboard');
    }

    public function profile_list(Request $request){
        $datas= $request->session()->get('pass');
        return view('list.profile',compact('datas'));
    }

    public function agenda_list(Request $request){
        // $datas= $request->session()->get('banjar_id');
        // $hasil = Agenda::with('banjar')
        // ->where([['banjar_id','=',$datas]])
        // ->get();
        // Paginator::useBootstrap();
        // return redirect('list.agenda',compact('hasil'));
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
       
    }

    
    // public function edit_agenda($id){  
    //     $data= Agenda::find($id);
    //     return view('tambah.Edit',compact('data'));
    // }
   
    public function Message(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $data = new message();
        $data->name =$request->name;
        $data->email =$request->email;
        $data->subject =$request->subject;
        $data->message =$request->message;
        $data->save();
        Alert::success('success', 'Berhasil dikirim');
        return redirect('/banjar');
    }

    

}
