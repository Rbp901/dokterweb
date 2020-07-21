<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Datajadwal;

class DatajadwalController extends Controller
{   
  

    public function index()
    {
       // $datamurid = Datamurid::all();
        $datajadwal = Datajadwal::paginate(8);
        return view('datajadwal',['datajadwal' => $datajadwal]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$datajadwal = DB::table('datajadwal')
		->where('hari','like',"%".$cari."%")
		->paginate(8);
 
    		// mengirim data pegawai ke view index
		return view('indexjadwal',['datajadwal' => $datajadwal]);
 
	}

    public function tambah()
    {
        return view('datajadwal_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            
    		'namadokter' => 'required',
            'hari' => 'required',
            'jammulai' => 'required',
    		'jamselesai' => 'required'
    		
    		
    	]);
 
        datajadwal::create([
            
    		'namadokter' => $request->namadokter,
            'hari' => $request->hari,
            'jammulai' => $request->jammulai,
    		'jamselesai' => $request->jamselesai
    		
    	]);
 
    	return redirect('/datajadwal');
    }

    public function edit($id)
    {
        $datajadwal = Datajadwal::find($id);
        return view('datajadwal_edit', ['datajadwal' => $datajadwal]);
    }

    public function update($id, Request $request)
    {
    $this->validate($request,[
	   'namadokter' => 'required',
       'hari' => 'required',
       'jammulai' => 'required',
	   'jamselesai' => 'required'
	  
    ]);
 
    $datajadwal = Datajadwal::find($id);
    $datajadwal->namadokter = $request->namadokter;
    $datajadwal->hari = $request->hari;
    $datajadwal->jammulai = $request->jammulai;
    $datajadwal->jamselesai = $request->jamselesai;
   
    $datajadwal->save();
    return redirect('/datajadwal');
    }

    public function delete($id)
{
    $datajadwal = Datajadwal::find($id);
    $datajadwal->delete();
    return redirect('/datajadwal');
}


}
