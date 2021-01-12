<?php 
// Author : Mochammad Ihza Rizky Karim 
require_once("koneksi.php");

$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM product WHERE id='$id'");

header("location:admin.php");

?>