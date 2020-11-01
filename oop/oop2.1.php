<?php

echo "<h1>Belajar OOP PHP</h1>";

class penjualan
{
	public $nama;
	public $jumlah;
	public $jenis;

	public function pesan()
	{
		$this->jumlah = $this->jumlah - 1;
	}

	public function pesanBanyak($jmlh)
	{
		$this->jumlah = $this->jumlah - $jmlh;
	}

	public function stok()
	{
		echo $this->jumlah." Stok Barang";
	}
}

$penjualan1 = new penjualan();

$penjualan1->nama = "Odol";
$penjualan1->jumlah = 100;
$penjualan1->jenis = "PRIMARY";

echo $penjualan1->stok();

$penjualan1->pesan();
$penjualan1->pesan();
$penjualan1->pesan();

echo "<br>";
echo $penjualan1->stok();

echo "<br>";
$penjualan1->pesanBanyak(20);
echo $penjualan1->stok();
