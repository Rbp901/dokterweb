@extends('datalihatdokter')


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Data Lihat Dokter </title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                  <a>  Data Lihat Dokter </a>
                </div>
                <div class="card-body">
                    <a href="/datalihatdokter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
            <div>
         
	        </form>
            </div> 
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KD SPESIALIS</th>
                                <th>NAMA DOKTER</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datalihatdokter as $p)
                            <tr>
                                <td>{{ $p->kdspesialis }}</td>
                                <td>{{ $p->namadokter }}</td>
                        
                           
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
      
 
 
	{{ $datalihatdokter->links() }}
                </div>
            </div>
        </div>
    </body>
</html>

