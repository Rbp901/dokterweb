@extends('layouts.frontend.master')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Daftar Dokter</title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-12">
                <div class="card-header text-center">
                  <p> Data Dokter </p>
                </div>
            <div>
            
            <p></p>
	        <form action="/datadokter/cari" method="GET">
		    <input type="text" name="cari" placeholder="Cari Nama Dokter .." value="{{ old('cari') }}">
		    <input type="submit" value="CARI">
	        </form> 
            </div> 
            <!--
                <div class="card-body">
                    <a href="/datadokter/tambah" class="btn btn-primary">Input Dokter Baru</a>
                    <br/> -->
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KD DOKTER</th>
                                <th>NAMA DOKTER</th>
                                <th>KD SPESIALIS</th>
                                <th>NO TELEPON</th>
                                <th>JENIS KELAMIN</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datadokter as $p)
                            <tr>
                                <td>{{ $p->kddokter }}</td>
                                <td>{{ $p->namadokter }}</td>
                                <td>{{ $p->kdspesialis }}</td>
                                <td>{{ $p->telepon }}</td>
                                <td>{{ $p->jk }}</td>
                 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
    <!--                
	Halaman : {{ $datadokter->currentPage() }} <br/>
	Jumlah Data : {{ $datadokter->total() }} <br/>
	Data Per Halaman : {{ $datadokter->perPage() }} <br/>
 -->
 
	{{ $datadokter->links() }}
                </div>
            </div>
        </div>
    </body>
</html>

@stop