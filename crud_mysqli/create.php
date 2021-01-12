<?php 
// Author : Mochammad Ihza Rizky Karim
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create - Crud Mysqli</title>
</head>
<body>

	<form method="POST" action="">
		<label>
			Name : 
		</label>
		<br>
		<input type="text" name="name">
		<br><br>
		<label>
			qty :
		</label>
		<br>
		<input type="number" name="qty">
		<br><br>
		<label>
			Price :
		</label>
		<br>
		<input type="number" name="price">
		<br><br>
		<button type="submit" name="create">
			Create Data
		</button>
	</form>

	<?php  

	if(isset($_POST['create']))
	{
		
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];

		$query = mysqli_query($conn,"INSERT INTO product(name,qty,price) VALUES('$name','$qty','$price')");
		header("location:index.php");
	}

	?>

</body>
</html>