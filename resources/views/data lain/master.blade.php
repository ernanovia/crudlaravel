<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h2>Ini sistem sederhana</h2>
        <nav>
            <a href="/blog">Home</a>
            <a href="/blog/tentang">TENTANG</a>
            <a href="/blog/kontak">KONTAK</a>
            <hr/>
            <br/>
        </nav>
    </header>
    <h3> @yield('judul_halaman')</h3>

    @yield('konten')
    <br/>
</body>
</html>