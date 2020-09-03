<?php
//array
//variabel yang dapat memiliki banyak nilai
//array adlh psangan antara key dan value

//membuat array
//cara lama
$hari = array("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];

//elemen pd array boleh memiliki tipe data yg berbeda
$arr = [123, "asa", true];


//menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);

//Menampilka satu elemennya
echo $arr[0];


//menambahkan elemen baru pada array
//menambahkan di akhir array sebelumnya
$hari[] = "Kamis";
$hari[] = "Jumat";
var_dump($hari);
