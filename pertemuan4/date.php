<?php
// date tampilkan tgl dngn format tertentu
// tampilkan hari saja "l"
// tampilkan tahun saja "y"
// tampilkan bulan saja "M"
// echo date("l, d-m-y");

// time
// unix timestamp / epoch time
// detik yg sdh brlalu sejak 1 januari 1970
// echo time();
// bisa ngecek 2 hari ke blkng
// echo date("l", time() - 60 * 60 * 24 * 2);

// mktime
// mmbuat sndiri detik awal
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tgl, thn
// echo date("l", mktime(0, 0, 0, 7, 4, 1995));

// strtotime
// echo date("l", strtotime("7 appril 1995"));

// STRING
//strlen(), utk mnghitung pnjng sbh string
//strcmp(), mnggbungkn string
//explode(), mmecah sbuh str mnjdi array
//HTMLspecialchars(), untuk mlindungi data dri hackerrs

// UTILITY
//var_dump(), eerrror
//isset(), ngecek apkh ada variabel ini?
//empty utk ngecek apkh varibel tsb ada valunya apa nggak?
//die(), utk stop program kita
//sleep(), buat delay program
