<!DOCTYPE html>
<html>
<head>
	<title>Read - Crud Mysqli</title>
</head>
<body>

	<table border="2">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Qty</th>
			<th>Price</th>
		</tr>
		<?php
		require_once("koneksi.php");
		$no = 1;  
		$query = mysqli_query($conn,"SELECT * FROM product");
		while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['name']; ?></td>
			<td><?= $data['qty']; ?></td>
			<td><?= $data['price']; ?></td>
		<?php 
		}
		 ?>
		</tr>
	</table>

</body>
</html>