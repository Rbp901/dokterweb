@extends('datadokter')


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Data Dokter </title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                  <a> Data Dokter </a>
                </div>
                <div class="card-body">
                    <a href="/datadokter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
            <div>
         
            </div> 
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KD DOKTER</th>
                                <th>NAMA DOKTER</th>
                                <th>KD SPESIALIS</th>
                                <th>NOMOR TELEPON</th>
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
      
 
 
	{{ $datadokter->links() }}
                </div>
            </div>
        </div>
    </body>
</html>

