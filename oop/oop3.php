<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Object Oriented Programming (OOP) PHP #3


include_once("oop2.php");

$mobil1 = new kendaraan;
$jenis1 = new kendaraan;
$motor1 = new kendaraan;
$jenis2 = new kendaraan;

$mobil1->set_nama("Avanza");
$jenis1->set_jenis("Mobil");
$motor1->set_nama("Supra X");
$jenis2->set_jenis("Sepeda Motor");

echo $mobil1->get_nama()." Merupakan Kendaraan Berjenis ".$jenis1->get_jenis();
echo "<br>Dan<br>";
echo $motor1->get_nama()." Merupakan Kendaraan Berjenis ".$jenis2->get_jenis();
echo "<br>";
var_dump($motor1->get_nama());
echo "<br>";
var_dump($mobil1->get_nama());
/*
Output :

Avanza Merupakan Kendaraan Berjenis Mobil
Dan
Supra X Merupakan Kendaraan Berjenis Sepeda Motor

string(7) "Supra X"
string(6) "Avanza"

*/
 ?>