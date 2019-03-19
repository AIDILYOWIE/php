<?php
// ARRAY
// array adalah variable yang dapat menampung lebih dari satu nilai 
// elemen pada array bole memiliki tipe data yang berbeda
// pasangan antara key dan value, key nya adalah index
// index pada array dimulai dari 0

// cara lama
// $hari = array("senin", "selasa")
// cara baru
$hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"];
$bulan = ["januari", "februari", "maret", "april", "mei", "juni", "juli"];

// cara menampilkan array
// kita bisa menampilkan dengan print_r / var_dump untuk debugging
// print_r($hari);
// var_dump($hari);

// menampilkan 1 elemen pada array
// dengan cara memanggil index yang dinginkan 
// untuk 1 elemen echo dan print bisa menampilkan 
// echo $hari[0];

// menambahkan elemen pada array
// $hari[] = "jum'at";
// var_dump($hari);    


// menampilkan array ke user
// dengan menggunakan pengulangan 
// for / foreach
// for($i = 0; $i < count($hari); $i++){
//     echo $hari[$i] . "<br>";
// }

// foreach artinya untuk setiap elemen lakukan sesuatu
// elemen pada array akan di tampung ke dalam variable sampai jumlah elemen pada array
// foreach ($hari as $h) {
//     echo $h . "<br>";
// };
// $h mempresetasikan 1 elemen dari elemen" array $hari

// mengambil data array yang di dalam array dengan foreach
$students = [["aidil yowie", "03476472", "RPL", "sukorejo"], 
             ["brio", "03455656", "TKP", "balong"]
];
// kalo menggunakan teknik seperti, urutan tidak boleh salah, dan harus sesuai
// php tidak akan menganggap salah ketika urutannya tidak sesuai, karena menggunakan array numerik
// array numerik adalah yang index nya angka
// dengan mengubah array numerik menjadi array associative, di array associative index berupa string bukan angka, dan bisa buat kita sendiri 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .kotak {
            width: 10em;
            height: 10em;
            background-color: pink;
            margin: 10px;
            text-align: center;
            line-height: 10em;
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php for ($i = 0; $i < count($hari); $i++) : ?>
            <div class="kotak">
                <?php echo $hari[$i]; ?>
            </div>
        <?php endfor ?>
    </div>

    <div class="container">
        <?php foreach ($bulan as $b) : ?>
            <div class="kotak">
                <?php echo $b; ?>
            </div>
        <?php endforeach ?>
    </div>


<!-- data siswa -->
<?php foreach( $students as $student) :?>
<ul>
    <li><?php echo $student[0]; ?></li>
    <li><?php echo $student[1]; ?></li>
    <li><?php echo $student[2]; ?></li>
    <li><?php echo $student[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>