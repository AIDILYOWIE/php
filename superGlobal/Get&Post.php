<?php
// Variable Scope / lingkung variable

// $x = 10;
// function tampil(){
//     $x = 20;
//     echo $x;
// };
// tampil();
// echo $x;
// variable x yang di dalam function tidak mengenali variable x di luar function meskipun keduanya sama
// karena keduanya berbeda, variable yang kita buat didalam function hanya berlaku pada function itu sendiri
// variable yang diluar function berlaku untuk halaman itu
// $x = 10;
// function tampil()
// {
//     global $x;
//     $x = 30;
//     echo $x;
// };
// tampil();
// global digunakan untuk mencari variable yang diluar function


// variable super global
// sebuah variable yang sudah dimiliki php, yang bisa kita akses kapanpun dan dimanapun
// $_GET :
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// semua super global merupakan array associative

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST);
// // var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump($_SERVER);  : array yang sudah memiliki isi didalamnya
// var_dump($_ENV);


// GET
// Metode Request Get adalah metode pengiriman data melalui url dan data tersebut bisa ditangkap variable super global GET 

// $_GET
// $_GET["nama"] = "Aidil Yowie";
// $_GET["absen"] = "13";
// var_dump($_GET);
// khusus $_GET kita bisa memasukan data lewat alamat websitenya nya
// contoh : http://localhost/belajar-php/Get&Post.php?nama=Aidil
// tanda tanya untuk memasukan data ke halaman itu, nama adalah key, dan aidil adalah value nya dengan metode request GET
// dan data tersebut akan ditangkap oleh $_GET
// untuk menambahkan key dan value baru kita bisa menggunakan &
// contoh : http://localhost/belajar-php/Get&Post.php?nama=Aidil&nrp=0883232


// POST
// metode request post adalah metode pengiriman dengan Form
// kelebihan menggunakan form ketika mengirimkan data, data tersebut tidak ada di url
// post sangat penting ketika membaut sistem login / sistem yang sifatnya privasi
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>HEACKER DETECTED !!!</h1>
</body>

</html>