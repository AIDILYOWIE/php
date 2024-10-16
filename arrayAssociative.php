<?php
// ARRAY ASSOCIATIVE
// devinisnya sama seperti array numeric tetapi key nya berbeda
// key dari associative bukan index tapi string yang kita buat sendiri

$atlets =  [
    [
        "nama" => "aidil yowie",
        "kelas" => "XI RPL B",
        "bidang" => "WEB TECH"
    ],

    [
        "nama" => "rizal",
        "kelas" => "XI RPL C",
        "bidang" => "IT SOFTWARE"
    ],
];

// TODO : list barang ekspor
$products = [
    [
        "nama" => "Coco Fiber",
        "stock" => "100 Ton",
        "harga" => "15k / Kg",
        "spek" => "ukuran : 2-6 mm,
                   kemurnian : harus bebas dari kotoran dan tanaman lain,
                   kelembaban : kurang dari 15%,
                   kekerasan : tidak mudah patah",
        "negara-tujuan" => "Cina, Amerika, Inggris"
    ],

    [
        "nama" => "Briket Kayu",
        "stock" => "120 Ton",
        "harga" => "35k / Kg",
        "spek" => "kadar kalori 6500 - 7000 kilo kalori,
                          moisture : 10 %,
                          ash : 7%,
                          shape : hexagonal,
                          length : 20 - 40 cm,
                          diameter : 3,8 cm,
                          burning time : 4 jam",
        "negara-tujuan" => "Amerika, Jepang, Jerman, China, Korsel, Arab Saudi"
    ],
    [
        "nama" => "Briket Kayu",
        "stock" => "120 Ton",
        "harga" => "35k / Kg",
        "spek" => "kadar kalori 6500 - 7000 kilo kalori,
                          moisture : 10 %,
                          ash : 7%,
                          shape : hexagonal,
                          length : 20 - 40 cm,
                          diameter : 3,8 cm,
                          burning time : 4 jam",
        "negara-tujuan" => "Amerika, Jepang, Jerman, China, Korsel, Arab Saudi"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }

        ul li {
            list-style: none;
            font-size: 1.5em;
            margin: 5px;
            color: black;
        }

        ul li span {
            color: blue;
        }

        ul {
            margin: 1.5em auto;
            padding: 2em;
            border-radius: 1em;
            max-width: 50em;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, .5);
        }
    </style>
</head>

<body>
    <h1>daftar atlet LKS</h1>
    <?php foreach ($atlets as $atlet) : ?>
        <ul>
            <li>NAMA : <?php echo $atlet["nama"] ?></li>
            <li>KELAS : <?php echo $atlet["kelas"] ?></li>
            <li>BIDANG : <?php echo $atlet["bidang"] ?></li>
        </ul>
    <?php endforeach; ?>


    <!-- product ekspor -->
    <h1>Product Ekspor</h1>
    <?php foreach ($products as $product) : ?>
        <ul>
            <li><span>Nama Product : </span><?php echo $product["nama"] ?></li>
            <li><span>Stock Product : </span><?php echo $product["stock"] ?></li>
            <li><span>Harga Product : </span><?php echo $product["harga"] ?></li>
            <li><span>Spek Product : </span><?php echo $product["spek"] ?></li>
            <li><span>Negara Tujuan Product : </span><?php echo $product["negara-tujuan"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>