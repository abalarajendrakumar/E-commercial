<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sellerid = $_POST["seller_id"];
	$sfname = $_POST["sfname"];
	$sadd = $_POST["sadd"];
	$smobile = $_POST["smobile"];
	$sql = "UPDATE seller SET SELLER_NAME = '$sfname', SELLER_ADDRESS = '$sadd', SELLER_PHONE = '$smobile' WHERE ID=$sellerid";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "<script>alert('Seller updation successful'); window.location.href='./choose_seller.php';</script>";
	}
	else{
		echo "<script>alert('Seller updation failed. Please try again later'); window.location.href='./choose_seller.php';</script>";	
	}
?>	