<?php

// Author : Mochammad Ihza Rizky Karim
// Kalkulator OOP PHP 

class calc
{
	public $bil1;
	public $bil2;
	public $hasil;

	public function bilangan()
	{
		echo "Bilangan 1 = ".$this->bil1."<br>";
		echo "Bilangan 2 = ".$this->bil2."<br>";
	}

	public function perkalian()
	{
		$this->hasil = $this->bil1*$this->bil2;
		echo "Hasil Perkalian Bilangan 1 dan 2 adalah ". $this->hasil."<br>";
	}

	public function pengurangan()
	{
		$this->hasil = $this->bil1-$this->bil2;
		echo "Hasil Pengurangan Bilangan 1 dan 2 adalah ". $this->hasil."<br>";
	}

	public function penjumlahan()
	{
		$this->hasil = $this->bil1+$this->bil2;
		echo "Hasil Penjumlahan Bilangan 1 dan 2 adalah ". $this->hasil."<br>";
	}

	public function pembagian()
	{
		$this->hasil = $this->bil1/$this->bil2;
		echo "Hasil Pembagian Bilangan 1 dan 2 adalah ". $this->hasil."<br>";
	}

}

$calc1 = new calc();

$calc1->bil1 = 10; // isi bilangan 1 disini
$calc1->bil2 = 5; // isi bilangan 2 disini

// Panggil Method
$calc1->bilangan();
echo $calc1->perkalian();
echo $calc1->pengurangan();
echo $calc1->penjumlahan();
echo $calc1->pembagian();
