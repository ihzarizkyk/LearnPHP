<?php
// Author : Mochammad Ihza Rizky Karim
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Crud Mysqli</title>
</head>
<body>

	<h1>
		Admin Page
	</h1>

	<a href="index.php">
		Back
	</a>

	<br><br>

	<table border="2">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Qty</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php  
		$no = 1;
		$query = mysqli_query($conn,"SELECT * FROM product");
		while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['name']; ?></td>
			<td><?= $data['qty']; ?></td>
			<td><?= $data['price']; ?></td>
			<td>
				<a href="delete.php?id=<?= $data['id']; ?>">Delete</a>
				&nbsp;&nbsp;&nbsp;
				<a href="update.php?id=<?= $data['id']; ?>">Update</a>
			</td>
		<?php  
		}
		?>
		</tr>
	</table>

<br>

<a href="create.php">
	Create Data
</a>

</body>
</html>