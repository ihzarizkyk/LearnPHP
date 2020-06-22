<?php 

/*
Author : Mochammad Ihza Rizky Karim
*/

// Perulangan For PHP


for($i = 0; $i<=10; $i++){
	echo $i.".ini adalah perulangan for pertama <br>";
}

echo "<br>";

for($a = 1; $a<=5; $a++){
	echo $a.".ini perulangan for kedua <br>";
}

echo "<br>";

for($e = 1; $e<=5; $e++){
	if($e == 3){
		echo $e.".ini perulangan for ketiga <br>";
		break;
	}
}

/*

Output :

0.ini adalah perulangan for pertama
1.ini adalah perulangan for pertama
2.ini adalah perulangan for pertama
3.ini adalah perulangan for pertama
4.ini adalah perulangan for pertama
5.ini adalah perulangan for pertama
6.ini adalah perulangan for pertama
7.ini adalah perulangan for pertama
8.ini adalah perulangan for pertama
9.ini adalah perulangan for pertama
10.ini adalah perulangan for pertama

1.ini perulangan for kedua
2.ini perulangan for kedua
3.ini perulangan for kedua
4.ini perulangan for kedua
5.ini perulangan for kedua

3.ini perulangan for ketiga

*/

 ?>
