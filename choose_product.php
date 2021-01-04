<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sql = "SELECT * FROM products WHERE VALIDFLAG=1";
	$res = mysqli_query($conn, $sql);
	?>
	<html>
	<head>
		<style>
			select, option{
				padding:5pt;
			}
		</style>
	</head>
	<body>
		<BR><BR>
		<center>
		<h4>Choose Product To Edit</h4>
		<form action="edit_product.php" method="post">
			<select name="product_id">
				<option value="0">Select a product to edit</option>
				<?php
					while($row = mysqli_fetch_array($res))
						echo "<option value='".$row[0]."'>".$row[2]." - ".$row[3]."</option>";
				?>
			</select>
			<input type="submit" value="Edit">
		</form>
		<a href="./empty_dashboard.html">Back</a>
		</center>
	</body>

	<?php

?>
</html>