@extends('layouts.frontend.master')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Data Jadwal</title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-12">
                <div class="card-header text-center">
                  <p> Data Jadwal  </p>
                </div>
            <div>
            <div class="card-body">
                    <a href="/datalihatdokter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
            <div>
            
            <p></p>
	        <form action="/datajadwal/cari" method="GET">
		    <input type="text" name="cari" placeholder="Cari Hari .." value="{{ old('cari') }}">
		    <input type="submit" value="CARI">
	        </form> 
            </div> 
                <div class="card-body">
                <!--
                    <a href="/datatamu/tambah" class="btn btn-primary">Input Data Spesialis Baru</a>
                    <br/> -->
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Dokter</th>
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datajadwal as $p)
                            <tr>
                                <td>{{ $p->namadokter }}</td>
                                <td>{{ $p->hari }}</td>
                                <td>{{ $p->jammulai }}</td>
                                <td>{{ $p->jamselesai }}</td>

                               

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
      
                    <br/>


	{{ $datajadwal->links() }} 


                </div>
            </div>
        </div>
    </body>
</html>

@stop