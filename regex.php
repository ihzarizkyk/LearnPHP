<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/


// Regular Expression PHP (REGEX PHP)
/* Regex merupakan metode yang digunakan untuk
mencari pola tertentu dalam sebuah string
*/

$huruf = "abcdefgh";

if(preg_match("/cde/",$huruf)){
	echo "Pola Huruf berisi cde";
}else{
	echo "Pola Huruf tidak berisi cde";
}

/*
Output :

Pola Huruf berisi cde

preg_match("pola kata atau kalimat", "string");
*/