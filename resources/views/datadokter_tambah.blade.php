<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data - <strong>TAMBAH DATA</strong> - <a href="" target="_blank"></a>
                </div>
                <div class="card-body">
                    <a href="/datadokter" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/datadokter/store">
 
                        {{ csrf_field() }}

                       
                        <div class="form-group">
                            <label>KD DOKTER</label>
                            <input type="text" name="kddokter" class="form-control" placeholder="Kddokter datadokter ..">
 
                            @if($errors->has('kddokter'))
                                <div class="text-danger">
                                    {{ $errors->first('kddokter')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>NAMA DOKTER</label>
                            <input type="text" name="namadokter" class="form-control" placeholder="Namadokter datadokter ..">
 
                            @if($errors->has('namadokter'))
                                <div class="text-danger">
                                    {{ $errors->first('namadokter')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>KD SPESIALIS</label>
                            <input type="text" name="kdspesialis" class="form-control" placeholder="Kdspesialis datadokter ..">
 
                            @if($errors->has('kdspesialis'))
                                <div class="text-danger">
                                    {{ $errors->first('kdspesialis')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>NOMOR TELEPON</label>
                            <input type="text" name="telepon" class="form-control" placeholder="Telepon datadokter ..">
 
                            @if($errors->has('telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('telepon')}}
                                </div>
                            @endif
 
                        </div>
                       
 <!--
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>  -->
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>