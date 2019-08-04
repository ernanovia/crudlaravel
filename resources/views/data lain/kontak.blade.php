<!-- // menghubungkan dengam view template master -->
@extends('master')

<!-- // isi bagian judul halaman -->
<!-- // cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- // isi bagian konten -->
<!-- // cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini adalalah Halaman kontak</p>
    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>erna@gmail.com</td>
        </tr>
    
    </table>

@endsection