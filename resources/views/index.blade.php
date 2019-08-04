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
            <div class="col-md-6"><h3>Data Pegawai</h3></div>
            <div class="col-md-6 text-right"><a  href="/pegawai/tambah"> + Tambah Pegawai Baru</a></div>
        </div>     
        <table class="table table-bordered table-hover">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}"class="btn btn-warning">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>