<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Manipulasi String

$s1 = "Ini adalah string 1";
$s2 = "Ini adalah string 2";

echo $s1.",".$s2."<br>";

// Fungsi strlen untuk menghitung jumlah karakter string
echo "Jumlah String ada ".strlen($s1);
echo "<br>";
echo "Jumlah String ada ".strlen($s1)."<br>";

// Fungsi strtoupper untuk merubah semua string menjadi besar
// Fungsi strtolower untuk merubah semua string menjadi kecil

$s3 = "INI HURUF KECIL";
$s4 = "ini huruf besar";

echo strtoupper($s3);
echo "<br>";
echo strtolower($s4)."<br>";

// Fungsi TRIM berfungsi untuk menghilangkan karakter tertentu

$s5 = "Halo Dunia";

echo trim($s5,"Dunia"); 

/*
Output :

Ini adalah string 1,Ini adalah string 2
Jumlah String ada 19
Jumlah String ada 19
INI HURUF KECIL
ini huruf besar
Halo

*/

 ?>
