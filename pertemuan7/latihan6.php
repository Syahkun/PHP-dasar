<?php
// di form action jika di isi kosong maka akan mngirimkan pd diri nya sndiri
//spya tidak error di halaman dibantu dngan isset, utk memeriksa apakah ada value yg didismpan di variabe itu,...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        Masukan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>