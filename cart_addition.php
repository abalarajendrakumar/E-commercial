<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	session_start();
	$res_cnt=0;
	$ID = 0;
	if(isset($_SESSION['ecommerce_ID']))
		$ID = $_SESSION['ecommerce_ID'];
	$prod_id = $_POST['prod_id'];
	$sql = "UPDATE products SET PRODUCT_STOCK_CNT = PRODUCT_STOCK_CNT-1 WHERE ID = $prod_id; ";
	mysqli_query($conn, $sql);
	$sql = "INSERT INTO orders(PRODUCT_ID, STATUSOFDELIVERY, USER_ID) VALUES ($prod_id,0,$ID)";
	$res = mysqli_query($conn, $sql);
	$sql = "SELECT * FROM ORDERS OO LEFT JOIN PRODUCTS PP ON OO.PRODUCT_ID = PP.ID WHERE OO.STATUSOFDELIVERY=0 AND OO.VALIDFLAG=1 AND PP.VALIDFLAG=1 AND OO.USER_ID=".$ID;
	?>
	<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  
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
              
              ul li{
              	  color:#2784fc;
              }
			ul li a{
				margin:0 30px;
				letter-spacing: 3px;
				font-family: 'Open Sans', sans-serif;
				 font-size: 1.7rem;
				  font-weight:bold;
				  color:#2784fc;
                text-transform: uppercase;
			}
			.navbar-brand{
				 font-family:  'Open Sans', sans-serif;
  text-transform: uppercase;
   color:black;
  letter-spacing: 2px;
  font-size: 2.4rem;
  font-weight:bold;
			}
			.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
	background-color: white;
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}

.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}

.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}
				
				body {
				  font-family: Arial, Helvetica, sans-serif;
				}
               
				.navbarr {
				  overflow: hidden;
				  background-color: #333;
				}
				a{
					cursor: pointer;
				}

				.navbarr a {
				  float: left;
				  font-size: 16px;
				  color: white;
				  text-align: center;
				  padding: 14px 16px;
				  text-decoration: none;
				}
				td{
					padding:10pt;
				}

				.dropdown {
				  float: left;
				  overflow: hidden;
				}

				.cart_add_but{
					position:relative;
					 color:white;
					padding:5px;
					background-color:#ff0000;
					transition: background-color .3s, color .3s;
				}

				.cart_add_but:hover{
					background:transparent;
					border:solid 2px #333;
					color:black;
				}

				.dropdown .dropbtn {
				  font-size: 16px;  
				  border: none;
				  outline: none;
				  color: white;
				  padding: 14px 16px;
				  background-color: inherit;
				  font-family: inherit;
				  margin: 0;
				}

				.navbarr a:hover, .dropdown:hover .dropbtn {
				  background-color: red;
				}

				.dropdown-content {
				  display: none;
				  position: absolute;
				  background-color: #f9f9f9;
				  min-width: 160px;
				  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index: 1;
				}

				.dropdown-content a {
				  float: none;
				  color: black;
				  padding: 12px 16px;
				  text-decoration: none;
				  display: block;
				  text-align: left;
				}

				.dropdown-content a:hover {
				  background-color: #ddd;
				}

				.dropdown:hover .dropdown-content {
				  display: block;
				}
				

		
		
				</style>
			</head>
			<body  style="background-image: url('image/back.png');background-size: cover; background-repeat: no-repeat;">
				<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:white;">
		<div class="container-fluid" style="padding:20px;">	
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" style="color:#4c17b8;"> E-COMMERCIAL </a>
			</div>
			
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="#" style="color:#4c17b8;">Products</a></li>
				 <li><a href="signout.php" style="color:#4c17b8;">Log Out</a></li>
				
				
			</ul>
			
			
				</li>
			</ul>
		</div>
	</div>
</div><br><br>
<nav aria-label="breadcrumb" style="margin-top: 70px; color:white;  " >
  <ol class="breadcrumb" style="background: transparent; color:white;" >
    <li class="breadcrumb-item" style="padding:7px;"><a href="#" style="color:white;">Home</a></li>
    <li class="breadcrumb-item"><a href="#" style="color:white;">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#" style="color:white;"><?php echo $_SESSION['ecommerce_fname'] ?>'s CART</a></li>
  </ol>
</nav>

	
	
	<section   > 
<div class="row"  >
     
        	<div class="col-md-9 " style="background-color:white;   ">  
        		<center>
        	<div class="col-md-10" style="margin-left: 60px; padding:10px;">
        		<br><br><br>
        		
            <div class="panel panel-success" style="box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-heading" style="background-color: #534694; color:white;"s>
                    <h3 class="panel-title" style="text-transform: uppercase; font-weight: bold;  font-family:  'Open Sans', sans-serif; letter-spacing:  1.5px;">
                         Our Products</h3>
                </div>
                <div class="panel-body" >
                    <div class="row">
		
		
		<table style="width:100%; padding:10pt">
			<tr>
				<td style="width:100%">
		<?php
			$res = mysqli_query($conn, $sql);
			echo "<table style='width:100%'>";
			$total_bill = 0;
			$cnt = 0 ;
			while($row = mysqli_fetch_array($res)){
				if($cnt==0)
					echo "<tr>";
				echo "<td><div style='border:solid 1px #555; background-color:white;  border-radius:5pt; padding:10pt'><h3>".$row[7]."</h3><h5>".$row[8]."</h5><h4>Rs. ".$row[9]."</h4>";
				echo "</div></td>";
				$total_bill += $row[9];
				if($cnt==2){
					echo "</tr>";
					$cnt=0;
				}
				else{
					$cnt++;
				}
			}
			if($cnt!=0)
				echo "</tr>";
			echo "</table>";
		?>
		</td>
		
	</table>
</div>
 </div>
</div>
                    <br>
                </div>
            </center>
            </div>
      
<div class="col-md-3">
	<center>
<div style=' width:100%; border:solid 0px black;vertical-align: top;  padding:10pt'>
			<div style="width:95%;border:solid 2px #AAA; border-radius:5pt; padding:7pt; background-color:white; ">
				<span style="font-family: Calibri; font-size:22pt">Order Summary</span>
				<BR><BR>
				<span style="font-size:12pt; font-family: calibri light">
					Recipient To Person : <?php echo $_SESSION["ecommerce_fname"] ?><BR><BR>
					Nett Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Rs. <?php echo $total_bill; ?><BR>
					Tax @ 15%&nbsp;&nbsp;&nbsp; = Rs. <?php echo $total_bill*0.15; ?><BR><BR>
					Order Total&nbsp;&nbsp;&nbsp; = Rs. <?php echo $total_bill*1.15; ?>
					<BR><BR><BR>
					<form action="checkout.php" method="post">
						<input type="submit" class="cart_add_but" value="Proceed To Checkout">
					</form>
				</span>
			</div>
		</div>
	</center>
	</div>

</div>
</BR>
</section>
</body>
</html>
