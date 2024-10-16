<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <form action="" method="post">
        Masukan Nama Anda :
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim !</button>
    </form>

    <?php if( isset($_POST["nama"])) : ?>
        <h1>hallo <?php echo $_POST["nama"];?></h1>
    <?php endif; ?>
    <!-- post akan mengirimkan dibelakang layar -->
    <!-- jika action dikosongkan maka data tersebut akan dikirmkan ke halaman itu sendiri -->
    <!-- jika method dikosongkan maka nilai defaultnya adalah GET -->
</body>

</html>