<?php

/*
Author : Mochammad Ihza Rizky Karim
*/

// Inheritance (Pewarisan Kelas atau Subclass)

// Buat Class Utama

class biodata{

// Buat Property Nama

	public $nama;

// Buat Method Construct

	function __construct($nama){
		$this->nama = $nama;
	}

// Buat Method get_nama

	function get_nama(){
		return $this->nama;
	}

}

// Buat SubClass dengan kata kunci extends

// nama_subkelas extends kelas_utama{}

class bio extends biodata{
	// code here
	// kosongkan saja
}

// buat objek untuk subclass bio

$biodata1 = new bio("Mochammad Ihza Rizky Karim");

// ambil nilai property dari get_nama yang diambil dari Class Utama

echo $biodata1->get_nama();

/*
OUTPUT :
Mochammad Ihza Rizky Karim
*/
