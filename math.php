<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Fungsi Matematika (Math Functions)

// Operasi Matematika

$a = 10;
$b = 12;
$c = 20;
$d = 32;

echo "Hasilnya : ".$a+$b."<br>";
echo "Hasilnya : ".$a-$c."<br>";
echo "Hasilnya : ".$a*$a."<br>";
echo "Hasilnya : ".$a**$b."<br>";
echo "Hasilnya : ".$b/$b."<br>";


// Mencari Akar Bilangan 

echo "Akar dari 12 adalah ".sqrt($b);
echo "<br>";
echo "Akar dari 32 adalah ".sqrt($d)."<br>";

// Eksponensial :

echo "Hasil dari 10 pangkat 2 adalah ".pow($a,2)."<br>";
echo "Hasil dari 10 pangkat 3 adalah ".pow($a,3)."<br>";

// Fungsi Ceil (Membulatkan bilangan) :

echo "Hasil dari pembulatan angka 32 adalah ".ceil($d)."<br>";


/*
Output :

Hasilnya : 12
Hasilnya : -20
Hasilnya : 100
Hasilnya : 1000000000000
Hasilnya : 1

Akar Bilangan atau Angka :

Akar dari 12 adalah 3.4641016151378
Akar dari 32 adalah 5.6568542494924

Eksponensial : 

Hasil dari 10 pangkat 2 adalah 100
Hasil dari 10 pangkat 3 adalah 1000

Pembulatan Angka menggunakan fungsi ceil :

Hasil dari pembulatan angka 32 adalah 32

*/
 ?>