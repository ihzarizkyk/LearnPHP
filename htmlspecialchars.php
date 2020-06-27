<?php 

// htmlspecialchars
// berfungsi untuk mengkonversi karakter spesial ke HTML entities
// fungsi lainnya untuk mengantisipasi orang2 jail yang akan memasukkan skrip html dan javascript

$link = htmlspecialchars("<a href='https://ihzarizkyk.blogspot.com'>ini adalah link</a>",ENT_QUOTES);
$alert = htmlspecialchars(" <script>
 	alert('selamat datang');
 </script>",ENT_QUOTES);

echo $link;
echo "<br>";
echo $alert;

/*
Output :

<a href='https://ihzarizkyk.blogspot.com'>ini adalah link</a>

<script> alert('selamat datang'); </script>

*/

 ?>