<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	session_start();
	$res_cnt=0;
	if(!isset($_SESSION['ecommerce_ID'])){
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$sql = "SELECT * FROM logins WHERE (EMAILID = '$email' OR MOBILE='$email') AND PASSWORD1 = '$pass1'";
		$res = mysqli_query($conn, $sql);
		$res_cnt = mysqli_num_rows($res);
	}
	else{
		$res_cnt=1;
		$sql = "SELECT * FROM logins WHERE ID = ".$_SESSION['ecommerce_ID'];
		$res = mysqli_query($conn, $sql);
		$res_cnt = mysqli_num_rows($res);
	}
	if($res_cnt==1){
		$row  = mysqli_fetch_array($res);
		$_SESSION['ecommerce_ID'] = $row[0];
		$_SESSION['ecommerce_fname'] = $row[1];
		?>
		<html>
			<head>
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
				  
				  font-family: inherit;
				  margin: 0;
				}

				.navbarr a:hover, .dropdown:hover .dropbtn {
				 
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
				
                #now:hover{
                  background: white;
                }
                #now .dropdown-menu li:hover{
                	background: white;
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
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="now" style="color:#4c17b8;">MY ACCOUNT</a>
					<ul class="dropdown-menu">
						<li><a href="#" style="color:#4c17b8;"><?php echo $row[1]; ?>'s Dashboard</a></li>
						<li><a href="#" style="color:#4c17b8;">Products</a></li>
            
            <li><a href="#" style="color:#4c17b8;">Purchase Details</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="signout.php" style="color:#4c17b8;">Log Out</a></li>
           
            
					</ul>
				</li>
				
			</ul>
			
			
				</li>
			</ul>
		</div>
	</div>
</div>	
<br><br>
<nav aria-label="breadcrumb" style="margin-top: 70px; color:white;  " >
  <ol class="breadcrumb" style="background: transparent; color:white;" >
    <li class="breadcrumb-item" style="padding:7px;"><a href="#" style="color:white;">Home</a></li>
    <li class="breadcrumb-item"><a href="#" style="color:white;"><?php echo $row[1]; ?>'s Dashboard</a></li>
    
  </ol>
</nav>
		<?php
		if($row[6]=="A"){
			?>
				<h3 > <?php echo $row[1]; ?>'s Dashboard</h3>
				<div class="navbarr">
				  <div class="dropdown">
				    <button class="dropbtn">Seller 
				      <i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a onclick="load_iframe('add_seller.html')">Add New</a>
				      <a onclick="load_iframe('choose_seller.php')">Edit Existing</a>
				      <a onclick="load_iframe('delete_seller.php')">Delete Existing</a>
				    </div>
				  </div> 
				  <div class="dropdown">
				    <button class="dropbtn">Products 
				      <i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a onclick="load_iframe('add_product.php')">Add New</a>
				      <a onclick="load_iframe('choose_product.php')">Edit Existing</a>
				      <a onclick="load_iframe('delete_product.php')">Delete Existing</a>
				    </div>
				  </div>
				  <a onclick="load_iframe('report_generation.php')">Generate Sales Report</a>
				  <a href="signout.php" style="float:right">Log Out</a> 
				</div>
				<div style="border:solid 2px black; width:99.7%; height: 83vh">
					<iframe src="empty_dashboard.html" id="framei" style="width:99.7%;height:82vh">
						
					</iframe>
				</div>
				<script>
					function load_iframe(srce){
						document.getElementById('framei').src = srce;
					}
				</script>
			<?php
		}
		else{
			?>
				<h3 style="text-transform: uppercase; font-family: 'Open Sans',  sans-serif; letter-spacing: 3px; color:white; "><?php echo $row[1]; ?>'s Dashboard</h3>
				
				<HR>
				<div class="container"  >
     
        	<div class="col-md-12 " style="background-color:white; padding:10px; ">  
        		<div class="col-md-1">
        		</div>
        		<div class="col-md-10">
        		<center>
        	
        		<br><br><br>
        		
            <div class="panel panel-success" style=" box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-heading" style="background-color: #534694; color:white;">
                    <h3 class="panel-title" style="text-transform: uppercase; font-weight: bold;  font-family:  'Open Sans', sans-serif; letter-spacing:  1.5px;">
                         Our Products</h3>
                </div>
                <div class="panel-body" >
                    <div class="row">
		
				<center>
				<table style="width:70%">
					<?php
						$prod_sql = "SELECT * FROM PRODUCTS WHERE VALIDFLAG=1 AND PRODUCT_STOCK_CNT>0 ORDER BY ID DESC";
						$prod_res = mysqli_query($conn, $prod_sql);
						$cnt=0;
						while($row = mysqli_fetch_array($prod_res)){
							if($cnt==0)
								echo "<tr>";
							echo "<td><div style='border:solid 1px #555; border-radius:5pt; padding:10pt'>
							<h3>".$row[2]."</h3><h5>".$row[3]."</h5><h4>Rs. ".$row[4]."</h4>";
							if($row[5]<5){
								echo "<h6 style='color:red'> Hurry! Only ".$row[5]." left in stock</h6>";
							}
							echo "<form action='cart_addition.php' method='post'>
							<input type='text' value='".$row[0]."' name='prod_id' style='display:none'><input class='cart_add_but'   type='submit' value='ADD TO CART'></form></div></td>";
							if($cnt==3){
								echo "</tr>";
								$cnt==0;
							}
							else{
								$cnt++;
							}
						}
						if($cnt!=0)
							echo "</tr>";
					?>
				</table>
			</center>
		</div>
		</div>
	</div>
</div>
<div class="col-md-1">
        		</div>
</div>
</div>
			<?php
		}
		?>
		</body>
		</html>
		<?php
	}
	else if(mysqli_num_rows($res)==0){
		echo "<script>alert('Account doesnot exist. Please SignUp to continue'); window.location.href='./signup.html';</script>";
	}
	else{
		echo "<script>alert('Something wrong with the account. Please contact administrator'); window.location.href='./signup.html';</script>";	
	}
?>


