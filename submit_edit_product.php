<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$productid = $_POST["product_id"];
	$pname = $_POST["pname"];
	$pdescp = $_POST["pdescp"];
	$pprice = $_POST["pprice"];
	$pstock = $_POST["pstock"];
	$sql = "UPDATE products SET PRODUCT_NAME = '$pname', PRODUCT_DESCRIPTION = '$pdescp', PRODUCT_PRICE = $pprice, PRODUCT_STOCK_CNT = $pstock  WHERE ID=$productid";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "<script>alert('Seller updation successful'); window.location.href='./choose_product.php';</script>";
	}
	else{
		echo "<script>alert('Seller updation failed. Please try again later'); window.location.href='./choose_product.php';</script>";	
	}
?>	