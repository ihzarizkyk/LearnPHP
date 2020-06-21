<?php 

//ARRAY 

$arr1 = array("Pertama","Kedua","Ketiga");
$arr2 = [1,2,3];
$arr3 = array("Keempat","Kelima","Keenam");

var_dump($arr1);
echo "<br>";
var_dump($arr2);
echo "<br>";
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";

//Mengambil Nilai Array index Tertentu

echo $arr1[0]." ".$arr1[1]." ".$arr1[2];
echo "<br>";
echo $arr2[0]." ".$arr2[1]." ".$arr2[2];
echo "<br>";

// Menghitung Jumlah Data Array

echo count($arr1)."<br>";
echo count($arr2)."<br>";

// Fungsi Array Replace :

$baru = array(0 => "Nol", 1 => "Kedua");
$ganti = array_replace($arr3,$baru);

print_r($ganti);

/*
Output :

array(3) { [0]=> string(7) "Pertama" [1]=> string(5) "Kedua" [2]=> string(6) "Ketiga" }
array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
Array ( [0] => Pertama [1] => Kedua [2] => Ketiga )
Array ( [0] => 1 [1] => 2 [2] => 3 )

Mengambil nilai tertentu berdasarkan index :

Pertama Kedua Ketiga
1 2 3

Menghitung Jumlah Data Dalam Array :

3
3

Array Replace :

array_replace($array_yang_akan_diganti,$array_yang_baru);

Array ( [0] => Nol [1] => Kedua [2] => Keenam )

*/
 ?>