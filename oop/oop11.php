<?php
/*
Author : Mochammad Ihza Rizky Karim
*/

// Namespace

namespace k1;
class kendaraan{

	public $nama = "kendaraan 1";

	function name()
	{
		echo $this->nama."<br>";
	}
}

namespace k2;
class kendaraan{

	public $nama = "kendaraan 2";

	function name()
	{
		echo $this->nama."<br>";
	}
}

namespace k3;
class kendaraan{

	public $nama = "kendaraan 3";

	function name()
	{
		echo $this->nama."<br>";
	}
}
// new \namaNamespace\class();

$kendaraan1 = new \k1\kendaraan();
$kendaraan2 = new \k2\kendaraan();
$kendaraan3 = new \k3\kendaraan();


echo $kendaraan1->name();
echo $kendaraan2->name();
echo $kendaraan3->name();

/*
Output :
kendaraan 1
kendaraan 2
kendaraan 3
*/
