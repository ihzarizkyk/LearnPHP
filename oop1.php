<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Object Oriented Programming (OOP) PHP #1

// buat class
class biodata{
	// buat properti
	public $nama;
	public $umur;

	// buat method
	function set_nama($nama){
		$this->nama = $nama;
	}

	function get_nama(){
		return $this->nama;
	}
} 

// buat objek baru
$nama1 = new biodata;
$nama2 = new biodata;
$nama3 = new biodata;
$umur1 = new biodata;

// set nama

$nama3->set_nama("Abdul Muhsin");

echo $nama1->nama = "Mochammad Ihza Rizky Karim"."<br>";
echo $nama2->nama = "Ihza Rizky <br>";
echo $umur1->umur = "Berumur ". 19;
echo "<br>";
echo $nama3->get_nama();

/*
Output :

Mochammad Ihza Rizky Karim
Ihza Rizky
Berumur 19
Abdul Muhsin

*/
 ?>