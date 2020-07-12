<?php 
/*
 Author : Mochammad Ihza Rizky Karim
*/

// Object Oriented Programming (OOP) PHP #5

// Inheritance -> Pewarisan Class

include_once("oop4.php");

class lang extends bahasa{
	function msg(){
		echo "ini class lang terwarisi dari class bahasa <br>";
	}
}

$lang = new lang("Bahasa Sunda","Jawa Barat");

echo $lang->msg();

// Memanggil Method dari class bahasa
echo $lang->get_nama()." dan ".$lang->get_daerah();


/*

Output :

Bahasa Jawa
Jawa
Bahasa Madura
Madura
ini class lang terwarisi dari class bahasa
Bahasa Sunda dan Jawa Barat 
Ini adalah Bahasa Bahasa Madura dan Berasal dari Daerah Madura
Ini adalah Bahasa Bahasa Jawa dan Berasal dari Daerah Jawa
Ini adalah Bahasa Bahasa Sunda dan Berasal dari Daerah Jawa Barat

*/
 ?>