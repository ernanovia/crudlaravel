<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>



<h2>Laravel CRUD data pegawai sederhana</h2>
    <h3>Data Pegawai</h3>
    <a href="/pegawai">kembali</a>
    <br/>
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id}}"> <br/>
        Nama <input type="text" name="nama" required="required" value="{{ $p->pegawai_nama}}" > <br/>
        Jabatan <input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan}}"> <br/>
        Umur <input type="text" name="umur" required="required" value="{{ $p->pegawai_umur}}"> <br/>
        Alamat <input type="text" name="alamat" required="required" value="{{ $p->pegawai_alamat}}"> <br/>
        <input type="submit" value="Simpan Data">
    </form> 