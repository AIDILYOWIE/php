<?php 
// SYNTAX-DASAR PHP

// Standart Output
// echo / print untuk mencetak tulisa / isi variable
// print_r khusus mencetak isi array
// var_dump untuk melihat isi variable dan informasi isi dari variable
// print_r dan var_dump untuk dibuging / mencari kesalahan program 

// echo "melisa fais <br>";
// print "melicaaa <br>";
// print_r("melisaaaakuu <br>");
// var_dump("aidil otw kaya")
// string(14) "aidil otw kaya" 
// 14 adalah panjang string

// echo true;
// echo false;
// true akan menampilkan angka 1, dan false akan menampilkan kosong



// Penulisan Sytax Php
// 1. php dalam html
// 2. html dalam php
// lebih baik menggunakan php didalam html, karena php biar php, html biar html


// VARIABLE DAN TIPE DATA
// Variable
// variable tida boleh diawali dengan angka 1 dan tida boleh memakai space dan " - "

// $nama = 13;
// echo "umur saya $nama";


// OPERATOR 
// aritmatika
// + - * /
// $a = 13;
// $b = 25;
// echo $a + $b;


// OPERATOR PENGGABUNG STRING / CONCAT
// .
// $nama1 = "aidil";
// $nama2 = "yowie";
// echo $nama1 . " " . $nama2;



// OPERATOR ASSIGMENT / PENUGASAN
// = += -= *= /= %= .=

// menghitung nilai
// $angka = 1;
// $angka += 10;
// echo $angka;

// penggabungan string
// $nama = "aidil";
// $nama .= " ";
// $nama .= "yowie";
// echo $nama;


// OPERATOR PERBANDINGAN 
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");
// operator perbandingan hanya memebandingkan nilainya saja bukan tipe data


// OPERATOR IDENTITAS
// ===, !==
// var_dump(1 === "1" );
// operator identitas dapat membadingkan tipe data dan nilainya


// OPERATOR LOGIKA
// &&, ||, !
// operator ini biasanya digunakan untuk pengkondisian

// var_dump(1 == 1 && 1 !== "1");   
// ketika menggunakan && semua pengkondisian harus true

// var_dump("melisa" === "aidil" || "melisa" === 2); 

// $nama = false;
// echo !$nama;
// operator ! digunakan untuk nilai sementara

?>