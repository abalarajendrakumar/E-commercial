<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sfname = $_POST["sfname"];
	$sadd = $_POST["sadd"];
	$smobile = $_POST["smobile"];
	$sql = "INSERT INTO seller(SELLER_NAME, SELLER_ADDRESS, SELLER_PHONE) VALUES ('$sfname','$sadd','$smobile')";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "<script>alert('Seller addition successful'); window.location.href='./add_seller.html';</script>";
	}
	else{
		echo "<script>alert('Seller addition failed. Please try again later'); window.location.href='./add_seller.html';</script>";	
	}
?>