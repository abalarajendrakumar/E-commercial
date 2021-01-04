<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$pname = $_POST["pname"];
	$pdescp = $_POST["pdescp"];
	$pprice = $_POST["pprice"];
	$pstock = $_POST["pstock"];
	$seller_id = $_POST["seller_id"];
	$sql = "INSERT INTO products (PRODUCT_NAME,PRODUCT_DESCRIPTION,PRODUCT_PRICE,PRODUCT_STOCK_CNT,SELLER_ID) VALUES ('$pname','$pdescp','$pprice','$pstock',$seller_id)";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "<script>alert('Seller addition successful'); window.location.href='./add_product.php';</script>";
	}
	else{
		echo "<script>alert('Seller addition failed. Please try again later'); window.location.href='./add_product.php';</script>";	
	}
?>