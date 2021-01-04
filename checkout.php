<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	session_start();
	$ID = $_SESSION['ecommerce_ID'];
	$sql = "UPDATE orders SET STATUSOFDELIVERY=1 WHERE USER_ID=$ID";
	mysqli_query($conn, $sql);
	echo "<script> alert('Your order have been confirmed.'); window.location.href='./submit_signin.php'; </script>";
?>