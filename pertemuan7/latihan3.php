<?php
// cek apakah tidak ada data di $_GET
//apakah variabel nama udah dibikin apa blm?
//gunain REDIRECT
//ketika $_GET["nama" blm di set, paksa utk berpincah ke latihan1.php
if (!isset($_GET["x"]) || !isset($_GET["gambar"])) {
    //REDIRECT
    header("Location: latihan2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?= $_GET["x"] ?></li>
        <li><img src="img/<?= $_GET["gambar"] ?>" alt=""></li>
    </ul>
    <ul>
        <a href="latihan2.php">kembali ke daftar mahasiswa</a>
    </ul>
</body>

</html>