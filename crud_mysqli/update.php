<?php  
// Author : Mochammad Ihza Rizky Karim
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update - Crud Mysqli</title>
</head>
<body>

<?php  
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM product WHERE id='$id'");
while($data = mysqli_fetch_array($query)){
?>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?= $data['id']; ?>">
		<br>
		<label>
			Name :
		</label>
		<br>
		<input type="text" name="name" value="<?= $data['name']; ?>">
		<br><br>
		<label>
			Qty :
		</label>
		<br>
		<input type="number" name="qty" value="<?= $data['qty']; ?>">
		<br><br>
		<label>
			Price :
		</label>
		<br>
		<input type="number" name="price" value="<?= $data['price']; ?>">
		<br><br>
		<button type="submit" name="update">
			Update
		</button>
	</form>
<?php
}
?>

<?php  

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];

	$query = mysqli_query($conn,"UPDATE product SET name='$name',qty='$qty',price='$price' WHERE id='$id'");

	header("location:admin.php"); 
}

?>

</body>
</html>