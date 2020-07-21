<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Datadokter;

class DatadokterController extends Controller
{   
  

    public function index()
    {
       // $datamurid = Datamurid::all();
        $datadokter = Datadokter::paginate(8);
        return view('datadokter',['datadokter' => $datadokter]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$datadokter = DB::table('datadokter')
		->where('namadokter','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('indexdokter',['datadokter' => $datadokter]);
 
	}

    public function tambah()
    {
        return view('datadokter_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            
    		'kddokter' => 'required',
            'namadokter' => 'required',
            'kdspesialis' => 'required',
            'telepon' => 'required',
    		'jk' => 'required'
    		
    		
    	]);
 
        datatamu::create([
            
    		'kddokter' => $request->kddokter,
            'namadokter' => $request->namadokter,
            'kdspesialis' => $request->kdspesialis,
            'telepon' => $request->telepon,
    		'jk' => $request->jk
    		
    	]);
 
    	return redirect('/datadokter');
    }

    public function edit($id)
    {
        $datadokter = Datadokter::find($id);
        return view('datadokter_edit', ['datadokter' => $datadokter]);
    }

    public function update($id, Request $request)
    {
    $this->validate($request,[
        'kddokter' => 'required',
        'namadokter' => 'required',
        'kdspesialis' => 'required',
        'telepon' => 'required',
        'jk' => 'required'
	  
    ]);
 
    $datadokter = Datadokter::find($id);
    $datadokter->kddokter = $request->kddokter;
    $datadokter->namadokter = $request->namadokter;
    $datadokter->kdspesialis = $request->kdspesialis;
    $datadokter->telepon = $request->telepon;
    $datadokter->jk = $request->jk;
   
    $datadokter->save();
    return redirect('/datadokter');
    }

    public function delete($id)
{
    $datadokter = Datadokter::find($id);
    $datadokter->delete();
    return redirect('/datadokter');
}


}
