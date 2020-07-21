<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Datajaga;

class DatajagaController extends Controller
{   
  

    public function index()
    {
       // $datamurid = Datamurid::all();
        $datajaga = Datajaga::paginate(8);
        return view('datajaga',['datajaga' => $datajaga]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$datajaga = DB::table('datajaga')
		->where('hari','like',"%".$cari."%")
		->paginate(8);
 
    		// mengirim data pegawai ke view index
		return view('indexjaga',['datajaga' => $datajaga]);
 
	}

    public function tambah()
    {
        return view('datajaga_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            
    		'kddokter' => 'required',
            'hari' => 'required',
            'jammulai' => 'required',
    		'jamselesai' => 'required'
    		
    		
    	]);
 
        datajaga::create([
            
    		'kddokter' => $request->kddokter,
            'hari' => $request->hari,
            'jammulai' => $request->jammulai,
    		'jamselesai' => $request->jamselesai
    		
    	]);
 
    	return redirect('/datajaga');
    }

    public function edit($id)
    {
        $datajaga = Datajaga::find($id);
        return view('datajaga_edit', ['datajaga' => $datajaga]);
    }

    public function update($id, Request $request)
    {
    $this->validate($request,[
	   'kddokter' => 'required',
       'hari' => 'required',
       'jammulai' => 'required',
	   'jamselesai' => 'required'
	  
    ]);
 
    $datajaga = Datajaga::find($id);
    $datajaga->kddokter = $request->kddokter;
    $datajaga->hari = $request->hari;
    $datajaga->jammulai = $request->jammulai;
    $datajaga->jamselesai = $request->jamselesai;
   
    $datajaga->save();
    return redirect('/datajaga');
    }

    public function delete($id)
{
    $datajaga = Datajaga::find($id);
    $datajaga->delete();
    return redirect('/datajaga');
}


}
