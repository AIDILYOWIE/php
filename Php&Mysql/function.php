<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "aidil", "cobadatabase");
// sebaiknya koneksi disimpan ke variable

// fungsi untuk query dan menampung isi database ke array 
function query($query)
{
    // memanggil koneksi 
    global $db;

    // ambil data dari table produk-ekspor / query data produk-ekspor
    $result = mysqli_query($db, $query);
    // parameter mysqli_query ada dua, 1.koneksi ke database, 2. querynya, tulis dengan bentuk string dan isi dengan syntax querynya
    // pesan kesalahan tidak ada ketika melakukan query
    // ketika melakukan query mysqli_query akan mengembalikan 2 hal, jika berhasil query akan dijalankan dan akan mengembalikan nilai true, jika tidak maka akan menampilkan bolean false
    // pada saat melakukan query,isi resultnya pembukus dari isi table produk

    $rows = [];

    // ambil data (fetch) dari object result
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };

    // mengembalikan nilai rows
    return $rows;
};
