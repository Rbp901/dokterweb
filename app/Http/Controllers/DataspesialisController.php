<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dataspesialis;

class DataspesialisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $datamurid = Datamurid::all();
         $dataspesialis = Dataspesialis::paginate(8);
         return view('dataspesialis',['dataspesialis' => $dataspesialis]);
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
		$dataspesialis = DB::table('dataspesialis')
		->where('spesialis','like',"%".$cari."%")
		->paginate(8);
 
    		// mengirim data pegawai ke view index
		return view('indexspesialis',['dataspesialis' => $dataspesialis]);
 
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function tambah()
    {
        return view('dataspesialis_tambah');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            
    		'kdspesialis' => 'required',
    		'spesialis' => 'required'
    		
    	]);
 
        dataspesialis::create([
            
    		'kdspesialis' => $request->kdspesialis,
    		'spesialis' => $request->spesialis
    	]);
 
    	return redirect('/dataspesialis');
    }

  
    public function edit($id)
    {
        $dataspesialis = Dataspesialis::find($id);
        return view('dataspesialis_edit', ['dataspesialis' => $dataspesialis]);
    }

    public function update($id, Request $request)
    {
    $this->validate($request,[
	   'kdspesialis' => 'required',
	   'spesialis' => 'required'
    ]);
 
    $dataspesialis = Dataspesialis::find($id);
    $dataspesialis->kdspesialis = $request->kdspesialis;
    $dataspesialis->spesialis = $request->spesialis;
   
    $dataspesialis->save();
    return redirect('/dataspesialis');
    }

    public function delete($id)
{
    $dataspesialis = Dataspesialis::find($id);
    $dataspesialis->delete();
    return redirect('/dataspesialis');
}








}
