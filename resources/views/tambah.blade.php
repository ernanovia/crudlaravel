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
            <div class="col-md-6"><h3>Tambah Data Pegawai</h3></div>
            <div class="col-md-6 text-right"><a href="/pegawai" >kembali</a></div>
        </div>  
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="/pegawai/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama</label> 
                        <input type="text" class="form-control" name="nama" required="required">
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label> 
                        <input type="text" class="form-control" name="jabatan" required="required"> 
                    </div>

                    <div class="form-group">
                        <label>Umur</label> 
                        <input type="text" class="form-control" name="umur" required="required">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required="required"> 
                    </div>
                
                    <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan Data"> 
                    </div>
                 </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
</body>
</html>     