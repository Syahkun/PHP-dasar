<?php
$mahasiswa = ["Syah Rizal Pamungkas", "3516120704950005", "Teknik Industri", "Syahkun@ub.ac.id"];
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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>