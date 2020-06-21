<?php 

// Number (Angka) & Math (Operasi Matematika)

$angka1 = 123;
$angka2 = 456;
$angka3 = 789;
$angka4 = 10.001;

echo "Angka : ".$angka1."<br>";
echo "Angka : ".$angka2."<br>";
echo "Angka : ".$angka3."<br>";
echo "Angka : ".$angka4."<br>";

var_dump(is_numeric($angka1));
echo "<br>";
var_dump(is_string($angka2));
echo "<br>";
var_dump(is_float($angka4)); 

/*
Output : 

Angka : 123
Angka : 456
Angka : 789
Angka : 1011

Cek Variabel Angka ATAU String ATAU Float :

bool(true)
bool(false)
bool(true)

*/
 ?>