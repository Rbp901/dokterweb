@extends('layouts.frontend.master')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Data Jaga</title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-12">
                <div class="card-header text-center">
                  <p>  Data Jaga  </p>
                </div>
            <div>
            
            <p></p>
	        <form action="/datajaga/cari" method="GET">
		    <input type="text" name="cari" placeholder="Cari Datajaga .." value="{{ old('cari') }}">
		    <input type="submit" value="CARI">
	        </form>
            </div> 
              
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KD DOKTER</th>
                                <th>HARI</th>
                                <th>JAM MULAI</th>
                                <th>JAM SELESAI</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datajaga as $p)
                            <tr>
                                <td>{{ $p->kddokter }}</td>
                                <td>{{ $p->hari }}</td>
                                <td>{{ $p->jammulai }}</td>
                                <td>{{ $p->jamselesai }}</td>
                  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
 
 
	{{ $datajaga->links() }}
                </div>
            </div>
        </div>
    </body>
</html>

@stop