<html>
	<head>
		<title>Edit Seller</title>
		<style>
			td{
				padding:5pt;
				text-align:center;
			}
			input{
				padding:5pt;
			}
			table{
				width:80%;
			}
			body{
				font-family: Calibri;
			}
		</style>
	</head>
	<body>
		<center>
			<h3>E commerce website</h3>
			<HR>
			<form action="submit_edit_seller.php" method="post">
				<?php
					$seller_id = $_POST["seller_id"];
					$conn = mysqli_connect('localhost','root','','eclab_pkg');
					$sql = "SELECT * FROM seller WHERE ID = $seller_id";
					$row = mysqli_fetch_array(mysqli_query($conn, $sql));
				?>
				<input type="text" name="product_id" value="<?php echo $row[0]; ?>" style="display:none">
			<table>
				<tr>
					<td><h4>Edit Seller</h4></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="sfname" placeholder="Seller Name" value="<?php echo $row[1]; ?>" autofocus>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="sadd" placeholder="Seller Address"value="<?php echo $row[2]; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="tel" name="smobile" placeholder="SellerMobile Number (excluding +91)" value="<?php echo $row[3]; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Edit seller">
						<BR><a href="./empty_dashboard.html">Back</a>
					</td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>