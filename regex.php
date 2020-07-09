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

echo "<br>";

// Regex preg_replace

$string = "saya adalah^% programmer *&&**/";

echo preg_replace("/[^a-zA-Z0-9]/"," ",$string);

echo "<br>";

$string1 = "2.500.000";

echo preg_replace("/[^0-9]/"," ",$string1);

/*
Output :

Pola Huruf berisi cde

preg_match("pola kata atau kalimat", "string");

// Regex preg_replace

saya adalah programmer

2 500 000

*/
