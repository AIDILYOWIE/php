<?php
// STRUKTUR KENDALI

// pengulangan
// bagian pengulangan ada inisalisasi, terminasi, increment/decrement
// inisialisasi adalah variable awal yang menentukan pengulangan
// terminasi digunakan untuk memberhentikan pengulangan 
// increment apakah pengulangan maju / mundur, + / -
// for
// while
// do while
// forech : pengulangan khusus array

// Note : jangan lupa menambahkan increment agar tidak terjadi infinit loop

// For
// for($i = 0; $i < 5; $i++){
//     echo "melisa fais <br>";
// };

// While
// $i = 0;
// while($i < 5){
//     echo "melicong <br>";
// $i++;
// }

// Do While 
// $i = 5;
// do {
//     echo "melisa sayang <br>";

// $i++;
// }while($i < 5);
// untuk do while, menjalankan dulu kodenya kemudian mengecek kondisi
// jika kondisi nya false do while tetap menampilkan kemudian mengecek kondisi, jiak false kondisi tidak akan dilanjutkan


// PENGKONDSIAN

// if else
// $x = 30;
// if($x < 30){
//     echo " benar ";
// }else {
//     echo " salah ";
// }
// if else untuk mengecek kondisi apakah nilai bernilai true / false, if digunakan untuk mengecek suatu kondisi, jika true jalanaka kode tersebut jika false maka jalankan kode berikutnya, else digunkan untuk menampung kondisi apapun selain kondisi di atas / kondisi false

// if else if else
// $x = 30;
// if($x < 30){
//     echo " benar ";
// }else if($x == 30){
//     echo "nilai sama";
// }else {
//     echo " salah ";
// }
// else if, digunakan untuk kondisi baru selain kondisi diatasnya

// ternary
// switch

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Membuat TABLE -->
<table border="2" cellpadding="30" cellspacing="0">

    <?php for($i = 1; $i <= 3; $i++) : ?>

        <tr>

            <?php for($j = 1; $j <= 5; $j++) : ?> 

                <td><?php echo " $i, $j" ?></td>

            <?php endfor ?>

        </tr>

    <?php endfor ?>

</table>
</body>
</html>