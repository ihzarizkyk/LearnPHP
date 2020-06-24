<?php 
/*
Author : Mochammad Ihza Rizky Karim
*/

// Konstanta (Constant) adalah nilai tetap selama program berjalan

//CARA 1
define("MAXSIZE",25);

echo MAXSIZE;
echo "<br>";

//CARA 2
echo constant("MAXSIZE");

//CARA 3
defined("PERCOBAAN");

echo PERCOBAAN;

/*
Output :

Hasil CARA 1 :

25

Hasil CARA 2 :

25

Hasil CARA 3 :

undefined constant PERCOBAAN, dimasa depan fungsi ini akan
menghasilkan nilai error ketika PHP Versi Terbaru


*/

 ?>
