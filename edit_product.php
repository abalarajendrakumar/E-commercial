<html>
	<head>
		<title>Edit Product</title>
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
			<form action="submit_edit_product.php" method="post">
				<?php
					$product_id = $_POST["product_id"];
					$conn = mysqli_connect('localhost','root','','eclab_pkg');
					$sql = "SELECT * FROM products WHERE ID = $product_id";
					$row = mysqli_fetch_array(mysqli_query($conn, $sql));
				?>
				<input type="text" name="product_id" value="<?php echo $row[0]; ?>" style="display:none">
			<table>
				<tr>
					<td><h4>Edit Product</h4></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="pname" placeholder="Product Name" value="<?php echo $row[2];?>" autofocus>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="pdescp" placeholder="Product Description" value="<?php echo $row[3];?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="pprice" placeholder="Price" value="<?php echo $row[4];?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="pstock" placeholder="Stock Available" value="<?php echo $row[5];?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Edit Product">
						<BR><a href="./empty_dashboard.html">Back</a>
					</td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>