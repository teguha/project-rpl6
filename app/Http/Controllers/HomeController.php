<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Posting;
use App\Models\Banjar;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{

    public function index()
    {
    return view('Admin.addPost');
    }

    public function tes()
    {
    return view('loginOuth');
    }


    public function banjar(){
        $data=Posting::latest()->paginate(100);
        Paginator::useBootstrap();
        return view('banjar',compact('data'));
    }

    public function Savedd(Request $request){
        $request->validate([
            'name' => 'required',
            'keterangan'=> 'required',
            'foto'=>'required|image|mimes:jepg,png,jpg|max:2048'
        ]);
        $image = $request->file('foto');
        $new_image= rand().".".$image ->getClientOriginalExtension();
       
        $data= array(
            'name'=> $request->name,
            'keterangan'=> $request->keterangan,
            'gambar'=> $new_image 
        );
        
        $image->move(public_path('foto'),$new_image);
    
        Posting::create($data);
        return redirect('/banjar')->with('succes','data berhasil disimpan');
    }
    public function info($id)
    {
        $banjars= Banjar::find($id);
        $data=Posting::latest()->paginate(100);
        Paginator::useBootstrap();
        return view('info.banjar',compact('data', 'banjars'));

    }

    // public function sejarah($id)
    // {
    //     $banjars= Sejarah::find($id);

    //     return view('info.sejarah',compact('banjars'));
    // }
    public function sejarahhh($id)
    {
        $banjars= Banjar::find($id);
        $judul =banjar()->name;
        return view('info.banjar',compact('banjars'));
    }
    
    public function blog($id){
        $banjars= Banjar::find($id);
        $data=Posting::latest()->paginate(100);
        Paginator::useBootstrap();
        return view('info/tampilan',compact('data', 'banjars'));
    }
}