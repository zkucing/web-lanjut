@extends("blank")

@section("konten")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Course</title>
</head>
<body>
    <center>
    @include("menu")
    <br>
    <br>
    <h2>Saat ini saya menempuh Mata Kuliah</h2><br>
    <p>Pemograman Web Lanjut</p>
    <p>Mobile Programing</p>
    <p>Data Science Lanjut</p>
    <p>Sistem Pendukung Keputusan</p>
    <p>Internet of Things</p>
    <p>Praktikum IoT</p>
    </center>
</body>
</html>

@endsection