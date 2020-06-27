<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Object Oriented Programming (OOP) PHP #4

// constructor =  __construct()
// destructor =  __destruct()

class bahasa{
	public $nama;
	public $daerah;

	function __construct($nama, $daerah){
		$this->nama = $nama;
		$this->daerah = $daerah;
	}

	function get_nama(){
		return $this->nama;
	}

	function get_daerah(){
		return $this->daerah;
	}

	function __destruct(){
		echo "Ini adalah Bahasa {$this->nama} dan Berasal dari Daerah {$this->daerah}";
	}

}


$nama1 = new bahasa("Bahasa Jawa","Jawa");
echo $nama1->get_nama();
echo "<br>";
echo $nama1->get_daerah();
echo "<br>";

/*
Output :

Bahasa Jawa
Jawa

Ini adalah Bahasa Bahasa Jawa dan Berasal dari Daerah Jawa

*/
 ?>