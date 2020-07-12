<?php 

class kampus{
	public $struktur;
	public $dosen;
	public $fasilitas;

	public function __construct($struktur, $dosen, $fasilitas){
		$this->struktur = $struktur;
		$this->dosen = $dosen;
		$this->fasilitas = $fasilitas;
	}

	public function isistruktur($struktur){
		return $this->struktur = $struktur;
	}
	public function isidosen($dosen){
		return $this->dosen = $dosen;
	}
	public function isifasilitas($fasilitas){
		return $this->fasilitas = $fasilitas;
	}

}

$kampus1 = new kampus();
$kampus2 = new kampus();
$kampus3 = new kampus();
$kampus4 = new kampus("(REKTOR, WAREK, KAPRODI, KEMAHASISWAAN, DOSEN),(DOSEN 1, DOSEN 2, DOSEN 3),(WIFI, LABKOM, GAZEBO, KANTIN)");

echo $kampus1->isistruktur("REKTOR, WAREK, KAPRODI, KEMAHASISWAAN, DOSEN");
echo "<br>";
echo $kampus2->isidosen("DOSEN 1, DOSEN 2, DOSEN 3");
echo "<br>";
echo $kampus3->isifasilitas("WIFI, LABKOM, GAZEBO, KANTIN");
echo "<br>";
echo $kampus4;
?>