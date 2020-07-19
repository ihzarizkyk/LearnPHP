<?php
/*
Author : Mochammad Ihza Rizky Karim
*/

// Overriding Methods

// Class Parent (Class Utama)
class makanan{

	public $nama;

	function nama_makanan($nama)
	{
		echo $this->nama = $nama;
	}
}


// Class Child (Class Turunan atau SubClass)
class food extends makanan{

	public $nama;

	function nama_makanan($nama)
	{
		echo $this->nama = $nama;
	}

}

$object1 = new makanan();
$object2 = new food();

echo $object1->nama_makanan("Nasi Goreng");
echo $object2->nama_makanan("\n Nasi Padang");

/*
Output :
Nasi Goreng Nasi Padang
*/
