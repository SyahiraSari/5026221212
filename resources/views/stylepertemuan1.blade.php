{{-- resources/views/stylepertemuan1.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: hsl(180, 63%, 51%);
            font-size: 48px;
        }
        a:link {
            text-decoration: none;
            color: blanchedalmond;
        }
        a:visited {
            text-decoration: none;
            color: blanchedalmond;
        }
        a:hover {
            font-size: larger;
            color: rgb(21, 74, 46);
            text-decoration: underline;
        }
        .headingmerah {
            color: red;
        }
        .parratakanan {
            text-align: right;
        }
        .partengah {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="color: #28966a;">Hallo Selamat Datang</h1>
    <h1 class="headingmerah">Hallo Selamat Datang Juga</h1>
    <p style="font-size: small; color: blue;">Jurusan Sistem Informasi ITS</p>
    <p class="parratakanan">Jurusan Sistem Informasi ITS 2</p>
    <p class="partengah">Jurusan Sistem Informasi ITS 3</p>
    <a href="{{url ('https://www.google.com')}}" target="_blank">Google</a>
    <a href="{{url ('https://www.its.ac.id')}}" target="_self">ITS</a>
</body>
</html>
