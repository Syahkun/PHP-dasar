<?php
//event onclick menggunakan var global GET
//sbuah metode pengiriman data yg ditangkap oleh variabel global GET
$mahasiswa = [
    [
        "nama" => "naruto",
        "gambar" => "naruto.jpg"
    ],
    [
        "nama" => "boruto",
        "gambar" => "boruto.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <?php echo $mhs["gambar"] ?>
        <ul>
            <li>
                <a href="latihan3.php?x=<?= $mhs["nama"] ?>&gambar=<?= $mhs["gambar"] ?>"> <?= $mhs["nama"]; ?> </a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>