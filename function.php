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

// utility 

?>