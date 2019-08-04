<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD sederhana</title>
</head>
<body>
	<div class="container-fluid">
        <h2 style="background-color:green; color:white"><center>CRUD Data Pegawai</center></h2>
        <div class="row" style="color:green">
            <div class="col-md-6"><h3>Edit Data Pegawai</h3></div>
            <div class="col-md-6 text-right"><a href="/pegawai" >kembali</a></div>
        </div>  
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            @foreach($pegawai as $p)
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id}}"> <br/>
                    <div class="form-group">
                        <label>Nama</label> 
                        <input type="text" class="form-control" name="nama" required="required" value="{{ $p->pegawai_nama}}">
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label> 
                        <input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->pegawai_jabatan}}"> 
                    </div>

                    <div class="form-group">
                        <label>Umur</label> 
                        <input type="text" class="form-control" name="umur" required="required" value="{{ $p->pegawai_umur}}">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required="required" value="{{ $p->pegawai_alamat}}"> 
                    </div>
                
                    <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan Data"> 
                    </div>
                 </form>
                 @endforeach
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
</body>
</html>          