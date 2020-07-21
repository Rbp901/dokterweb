@extends('layouts.frontend.master')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Tabel Lihat Dokter</title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-12">
                <div class="card-header text-center">
                  <p> Data Lihat Dokter  </p>
                </div>
            <div>
            <div class="card-body">
                    <a href="/dataspesialis" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
            <div>
            
            <p></p>
	        <form action="/datalihatdokter/cari" method="GET">
		    <input type="text" name="cari" placeholder="Cari Nama Dokter .." value="{{ old('cari') }}">
		    <input type="submit" value="CARI">
	        </form> 
            </div> 
                <div class="card-body">
                
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kd Spesialis</th>
                                <th>Nama Dokter</th>
      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datalihatdokter as $p)
                            <tr>
                                <td>{{ $p->kdspesialis }}</td>
                                <td>{{ $p->namadokter }}</td>

                                <td>
                                    <a href="/datajadwal" class="btn btn-success">Lihat Jadwal</a>
                                   
                                </td>
                            

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
      
                    <br/>


	{{ $datalihatdokter->links() }} 


                </div>
            </div>
        </div>
    </body>
</html>

@stop