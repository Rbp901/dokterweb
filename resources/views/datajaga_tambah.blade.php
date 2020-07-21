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
                    CRUD Data Jaga - <strong>TAMBAH DATA</strong> - <a href="" target="_blank"></a>
                </div>
                <div class="card-body">
                    <a href="/datajaga" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/datajaga/store">
 
                        {{ csrf_field() }}

                       
                        <div class="form-group">
                            <label>KD DOKTER</label>
                            <input type="text" name="kddokter" class="form-control" placeholder="Kddokter datajaga ..">
 
                            @if($errors->has('kddokter'))
                                <div class="text-danger">
                                    {{ $errors->first('kddokter')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>HARI</label>
                            <input type="text" name="hari" class="form-control" placeholder="Hari datajaga ..">
 
                            @if($errors->has('hari'))
                                <div class="text-danger">
                                    {{ $errors->first('hari')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>JAM MULAI</label>
                            <input type="text" name="jammulai" class="form-control" placeholder="Jammulai datajaga ..">
 
                            @if($errors->has('jammulai'))
                                <div class="text-danger">
                                    {{ $errors->first('jammulai')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>JAM SELESAI</label>
                            <input type="text" name="jamselesai" class="form-control" placeholder="Jamselesai datajaga ..">
 
                            @if($errors->has('jamselesai'))
                                <div class="text-danger">
                                    {{ $errors->first('jamselesai')}}
                                </div>
                            @endif
 
                        </div>
                       
 
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>