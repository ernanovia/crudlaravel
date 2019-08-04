<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parsing data controller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Ini view dari controller</h2>
    <br>
    <p> Nama : {{ $nama }}</p>
    <br>
    
    <p> Mata pelajaran</p>
    <ul>
        @foreach($matkul as $kul)

        <li>{{ $kul }}</li>

        @endforeach
    </ul>
</body>
</html>     