<?php
// mengambil data dari file function.php
require "function.php";

$produks = query("SELECT * FROM produk");

// 4 cara mengambil data dari object result:

// mysqli_fetch_row() : mengembalikan nilai array numeric
// $data = mysqli_fetch_row($result);
// var_dump($data);

// mysqli_fetch_assoc() : mengembalikan nilai array associative
// $data = mysqli_fetch_assoc($result);
// var_dump($data);

// mysqli_fetch_object() : mengembalikan object
// $data = mysqli_fetch_object($result);
// echo $data->nama_produk;

// mysqli_fetch_array() : mengembalikan array numeric dan associative
// $data = mysqli_fetch_array($result);
// var_dump($data["nama_produk"]);
// var_dump($data[1]);



// untuk mengecek error
if (!$produks) {
    echo mysqli_error($db);
};

// 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Daftar Produk Ekspor</h1>

    <table border="2" cellpadding="30" cellspacing="0">
        <tr>
            <th>Nama Produk</th>
            <th>Stock Produk</th>
            <th>Harga Produk</th>
            <th>Tanggal Datang</th>
            <th>ubah</th>
        </tr>


        <?php foreach ($produks as $produk): ?>
            <tr>
                <td><?php echo $produk["nama_produk"] ?></td>
                <td><?php echo $produk["stock_produk"] ?></td>
                <td><?php echo $produk["harga_produk"] ?></td>
                <td><?php echo $produk["tanggal_datang"] ?></td>
                <td>
                    <a href="">edit</a> |
                    <a href="">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>