<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sql = "SELECT * FROM seller WHERE VALIDFLAG=1";
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
		<h4>Choose Seller To Delete</h4>
		<form action="submit_delete_seller.php" method="post">
			<select name="seller_id">
				<option value="0">Select a seller to delete</option>
				<?php
					while($row = mysqli_fetch_array($res))
						echo "<option value='".$row[0]."'>".$row[1]."</option>";
				?>
			</select>
			<input type="submit" value="Delete">
		</form>
		<a href="./empty_dashboard.html">Back</a>
		</center>
	</body>

	<?php

?>
</html>