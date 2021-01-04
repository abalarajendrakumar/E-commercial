<?php
	$fname = $_POST["fname"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$pass1 = $_POST["pass1"];
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sql = "SELECT COUNT(1) FROM logins WHERE email = '$email'";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($res)[0];
	if($row==0){
		$ins_sql = "INSERT INTO logins (FULLNAME, EMAILID, MOBILE, PASSWORD1) VALUES ('$fname','$email','$mobile','$pass1')";
		$res = mysqli_query($conn, $ins_sql);
		if($res){
			echo "<script>alert('SignUp successful. SignIn to continue'); window.location.href='./';</script>";	
		}
		else{
			echo "<script>alert('SignUp failed. Please try again later'); window.location.href='./signup.html';</script>";
		}
	}
	else{
		echo "<script>alert('EmailID Already exists'); window.location.href='./signup.html';</script>";
	}
?>