<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sellerid = $_POST["product_id"];
	$sql = "DELETE FROM products WHERE ID=$sellerid";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "<script>alert('Seller deletion successful'); window.location.href='./delete_product.php';</script>";
	}
	else{
		echo "<script>alert('Seller deletion failed. Please try again later'); window.location.href='./delete_product.php';</script>";	
	}
?>	