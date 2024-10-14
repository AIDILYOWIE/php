<?php 
// FUNCTION


// Built In Function (fungsi pada php)

// Date / Time

// time()
// echo time();
// time tidak membutuhkan parameter
// time akan menampilkan detik / UNIX Timestamp
// detik yang sudah berlalu dari  januari 1970


// date() untuk mmenampilkan tanggal dengan format tertentu
// echo date("l - M - y");
// date membutuhkan parameter

// untuk mengecek hari kedepan
// echo date("l", time() + 60 * 60 * 24 * 100);

// mktime()
// untuk membuat detik sendiri
// mempunyai 6 parameter
// urutanya : jam, menit, detik, bulan, tanggal, tahun
// echo date("m", mktime(0, 0, 0, 10, 13, 2007));

// strtotime()
// kita harus memasukan format tanggal 
// echo date("y", strtotime("13 oct 2024"))


// string
// strlen() : untuk meghitung panjang string
// strcamp() : untuk menggabungkan 2 buah string
// expclode() : untuk mengambil nama sebuah file
// htmlspecialchars() : untuk mencegah hacker

// utility / fungsi bantuan
// var_dump() : untuk mencetak isi dari variable, array, object 
// isset() : digunakan untuk mengecek variable apakah sudah dibuat apa belum, dan akan menghasilkan nilai bolean, true / false
// empty() : untuk mengecek isi variable sudah di isi / belum 
// die() : untuk memberhentikan program kita, kita program kita ketemu die(), maka program dibawah nya tidak dieksekusi
// sleep() : untuk memberhentikan program sementara


// USER-DEFINED FUNCTION / fungsi yang kita bikin sendiri
// kita harus mendefiniskan terlebih dahulu

function salam($waktu = "datang", $nama = "admin!!") {
    return "selamat $waktu, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            font-size: 3em;
            color: blue;
            text-align: center;
            line-height: 50%;
        }
    </style>
    <title>function</title>
</head>
<body>
    <h1><?php echo salam("siang", "melisa"); ?></h1>
</body>
</html>