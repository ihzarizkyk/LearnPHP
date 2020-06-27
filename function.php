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

function pangkat($pangkat){
	echo $pangkat**2;
	echo "<br>";
	return $pangkat;
}

// Memanggil Fungsi dan mengisinya dengan Argumen

echo"<br>";
echo "FUNGSI PANGKAT"."<br>";
pangkat(2);
pangkat(4);
pangkat(6);

/*
Output :

Halo, Selamat Datang

FUNGSI PANGKAT
4
16
36

*/

?>
