@extends('dataspesialis')


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> Data Spesialis </title>
    </head>
   <body>
        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                  <a>  Data Spesialis </a>
                </div>
                <div class="card-body">
                    <a href="/dataspesialis" class="btn btn-primary">Kembali</a>
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
                                <th>SPESIALIS</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataspesialis as $p)
                            <tr>
                                <td>{{ $p->kdspesialis }}</td>
                                <td>{{ $p->spesialis }}</td>
                        
                           
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
      
 
 
	{{ $dataspesialis->links() }}
                </div>
            </div>
        </div>
    </body>
</html>

