<?php 

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
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <?php foreach($products as $product) : ?>
        <ul>
            <li>
                <a href="Product.php?nama=<?php echo $product["nama"];?>&
                                    stock=<?php echo $product["stock"];?>& 
                                    harga=<?php echo $product["harga"];?>&
                                    spek=<?php echo $product["spek"];?>&
                                    negara-tujuan=<?php echo $product["negara-tujuan"];?>">
                                    <?php echo $product["nama"] ?>
                </a>
            </li>
        </ul>
       
    <?php endforeach; ?>
</body>
</html>
