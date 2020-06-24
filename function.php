<?php
/*
Author : Mochammad Ihza Rizky Karim
*/


// Membuat Fungsi

function msg(){
	echo "Halo, Selamat Datang";
	echo "<br>";
}

// Memanggil Fungsi

msg();

// Membuat Fungsi dengan Parameter

function kali($kali){
	echo $kali**2;
	echo "<br>";
	return $kali;
}

// Memanggil Fungsi dan mengisinya dengan Argumen

echo"<br>";
echo "FUNGSI KALI"."<br>";
kali(2);
kali(4);
kali(6);

/*
Output :

Halo, Selamat Datang

FUNGSI KALI
4
16
36

*/

?>
