<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/


/* 

explode :

Merubah String menjadi Array

*/

$data = "Aku Kamu Kalian";

var_dump(explode(" ",$data));
// exlode(separator(tidak boleh kosong),variabel)

echo "<br>";


/*

implode :

Merubah Array Menjadi String

*/


$data1 = array("one","two","three");

echo "ini adalah implode : ".implode(",",$data1);
// implode(separator,variabel)



/*
Output :
 
 Example Explode #1 :

array(3) { [0]=> string(3) "Aku" [1]=> string(4) "Kamu" [2]=> string(6) "Kalian" }

 Example Implode #1 :

ini adalah implode : one,two,three

*/


 ?>