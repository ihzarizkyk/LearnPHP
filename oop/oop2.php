<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Object Oriented Programming (OOP) PHP #2


class kendaraan{
	public $nama;
	public $jenis;

	function set_nama($nama){
		$this->nama = $nama;
	}

	function get_nama(){
		return $this->nama;
	}

	function set_jenis($jenis){
		$this->jenis = $jenis;
	}

	function get_jenis(){
		return $this->jenis;
	}


}


 ?>