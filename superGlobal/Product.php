<?php
// untuk mengecek data di GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["stock"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["spek"]) ||
    !isset($_GET["negara-tujuan"])
) {

    // redirect
    header("Location: Get&Post.php");
    exit;
}
// !isset untuk variable / key yang belum dibuat
// header untuk memindahkan alamat tujuan / lokasi tujuan 
// exit digunakan agar code dibawah tidak dijalankan 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<style>
    ul li {
        list-style: none;
        font-size: 1.5em;
        margin: 10px;
        color: black;
    }

    ul li span {
        color: blue;
    }

    ul {
        margin: 190px auto;
        padding: 2em;
        border-radius: 1em;
        max-width: 50em;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .5);
    }
</style>

<body>
    <ul>
        <li>Nama Prooduct : <?php echo $_GET["nama"]; ?></li>
        <li>Stock Product : <?php echo $_GET["stock"]; ?></li>
        <li>Harga Product : <?php echo $_GET["harga"]; ?></li>
        <li>Spek Product : <?php echo $_GET["spek"]; ?></li>
        <li>Negara Tujuan Product : <?php echo $_GET["negara-tujuan"]; ?></li>
    </ul>
</body>

</html>