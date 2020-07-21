<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Datalihatdokter;

class DatalihatdokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $datamurid = Datamurid::all();
         $datalihatdokter = Datalihatdokter::paginate(8);
         return view('datalihatdokter',['datalihatdokter' => $datalihatdokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$datalihatdokter = DB::table('datalihatdokter')
		->where('namadokter','like',"%".$cari."%")
		->paginate(8);
 
    		// mengirim data pegawai ke view index
		return view('indexlihatdokter',['datalihatdokter' => $datalihatdokter]);
 
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function tambah()
    {
        return view('datalihatdokter_tambah');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            
    		'kdspesialis' => 'required',
    		'namadokter' => 'required'
    		
    	]);
 
        dataspesialis::create([
            
    		'kdspesialis' => $request->kdspesialis,
    		'namadokter' => $request->namadokter
    	]);
 
    	return redirect('/datalihatdokter');
    }

  
    public function edit($id)
    {
        $datalihatdokter = Datalihatdokter::find($id);
        return view('datalihatdokter_edit', ['datalihatdokter' => $datalihatdokter]);
    }

    public function update($id, Request $request)
    {
    $this->validate($request,[
	   'kdspesialis' => 'required',
	   'namadokter' => 'required'
    ]);
 
    $datalihatdokter = Datalihatdokter::find($id);
    $datalihatdokter->kdspesialis = $request->kdspesialis;
    $datalihatdokter->namadokter = $request->namadokter;
   
    $dataspesialis->save();
    return redirect('/datalihatdokter');
    }

    public function delete($id)
{
    $datalihatdokter = Datalihatdokter::find($id);
    $datalihatdokter->delete();
    return redirect('/datalihatdokter');
}








}
