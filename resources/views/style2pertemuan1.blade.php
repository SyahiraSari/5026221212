{{-- resources/views/style2pertemuan1.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <link rel="stylesheet" href="{{ asset('css')}}/mystyle.css ">
</head>
<body>
    <h1 style="color: #28966a;">Hallo Selamat Datang</h1>
    <h1 class="headingmerah">Ini file style 2</h1>
    <p style="font-size: small; color: blue;">Jurusan Sistem Informasi ITS</p>
    <p class="parratakanan">Jurusan Sistem Informasi ITS 2</p>
    <p class="partengah rcorners2">Jurusan Sistem Informasi ITS 3</p>
    <a href="{{url ('https://www.google.com')}}" target="_blank">Google</a>
    <a href="{{url ('https://www.its.ac.id')}}" target="_self">ITS</a>
    <a href="{{url ('hello.html')}}">File Pertemuan 1</a>
</body>
</html>
