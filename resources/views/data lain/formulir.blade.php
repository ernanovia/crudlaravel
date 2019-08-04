<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parsing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="/formulir/proses" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">

        Nama :
        <input type="text" name="nama"> <br/>
        Alamat :
        <input type="text" name="alamat"> <br/>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>