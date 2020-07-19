<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/
 
// Abstract Class
// Gunakan Keyword abstract sebelum menuliskan classnya

abstract class komputer{

// buat fungsi atau method abstract agar bisa digunakan ke class turunan

	abstract function nama();
}

class pc extends komputer{

// buat fungsi atau method yang sama persis dengan method yang ada di class parent. jika tidak dilakukan akan terjadi error

	public function nama()
	{
		return "Komputer Acer...<br>";
	}

// setelah mendeklarasikan method utama, maka silahkan buat method selanjutnya bebas...
	
	public function deskripsi()
	{
		return "Merupakan Komputer Yang Ringan dan Elegan";
	}
}

$pc1 = new pc();

echo $pc1->nama();
echo $pc1-deskripsi();

/*
Output :
Komputer Acer...
Merupakan Komputer Yang Ringan dan Elegan
*/
