<?php
/*
Author : Mochammad Ihza Rizky Karim
*/

// Interface OOP PHP

// Deklarasi dengan keyword "interface"
interface laptop{

// Method hanya sebagai Signature
	public function keyboard();
	public function mouse();
	public function scanner();
}


// interface juga bisa extends (inherit)
interface laptops extends laptop{

// karena sudah extends, tidak perlu deklarasi ulang signature
// buat signature baru

	public function webcam();
}

// Class pc mengambil interface laptops menggunakan keyword "implements"
class pc implements laptops{

// Semua Method harus deklarasi ulang dari interface

	public function keyboard()
	{
		return "ini keyboard";
	} 

	public function mouse()
	{
		return "ini mouse";
	} 

	public function scanner()
	{
		return "ini scanner";
	} 

	public function webcam()
	{
		return "ini webcam";
	}
}

$newpc = new pc();

echo $newpc->keyboard();
echo "<br>";
echo $newpc->mouse();
echo "<br>";
echo $newpc->scanner();
echo "<br>";
echo $newpc->webcam();

/*
Output :
ini keyboard
ini mouse
ini scanner
ini webcam
*/
