<?php
	session_start();
	unset($_SESSION['ecommerce_ID']);
	header('Location:./');
?>