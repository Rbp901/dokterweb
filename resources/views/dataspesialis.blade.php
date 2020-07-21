@extends('layouts.frontend.master')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Tabel Spesialis</title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-12">
                <div class="card-header text-center">
                  <p> Data Spesialis  </p>
                </div>
            <div>
            
            <p></p>
	        <form action="/dataspesialis/cari" method="GET">
		    <input type="text" name="cari" placeholder="Cari Spesialis .." value="{{ old('cari') }}">
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
                                <th>Kd Spesialis</th>
                                <th>Spesialis</th>
      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataspesialis as $p)
                            <tr>
                                <td>{{ $p->kdspesialis }}</td>
                                <td>{{ $p->spesialis }}</td>

                                <td>
                                    <a href="/datalihatdokter" class="btn btn-warning">Lihat Dokter</a>
                                   
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
      
                    <br/>


	{{ $dataspesialis->links() }} 


                </div>
            </div>
        </div>
    </body>
</html>

@stop