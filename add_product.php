<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	$sql = "SELECT * FROM seller WHERE VALIDFLAG=1";
	$res = mysqli_query($conn, $sql);
	?>
<html>
	<head>
		<title>Add New Product</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

		<style>
			
              
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
    font-weight: 410;
     letter-spacing: 0.5px;
    color: #fff;
    background-color: #0062cc;
}

.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

		
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
			body{
				font-family: Calibri;
			}
		</style>
	</head>
	<body style="background-image: url('image/ban1.png'); background-size: cover; background-repeat: no-repeat; background-position:right">
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
				<a href="#" class="navbar-brand" style="color:#6b0b12;"> E-COMMERCIAL </a>
			</div>
			
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" style="color:#6b0b12;">Home</a></li>
				<li><a href="#" style="color:#6b0b12;">Product</a></li>
			</ul>
			
			
				</li>
			</ul>
		</div>
	</div>
</div>	
<br><br>
		<center>
			
			
			<br>
			<section>
			<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1" style="margin-top:80px;" >
                    <h3 class="title" style="color:#6b0b12;  letter-spacing: 2px; font-weight: bold; ">ADDING PRODUCTS</h3>
                    <form action="submit_add_product.php" method="post" >
                    	<div class="form-group">
                            <input type="text" name="pname"  autofocus class="form-control"   placeholder="Product Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="pdescp"  class="form-control"   placeholder="Product Description *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text"  name="pprice"  class="form-control"  placeholder="Price*" value="" />
                        </div>
                         <div class="form-group">
                            <input type="text" name="pstock"  class="form-control" placeholder="Stock Available" value="" />
                        </div>
                         <select name="seller_id" class="form-control">
							<option value="0">Select a seller to edit</option>
							<?php
								while($row = mysqli_fetch_array($res))
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
							?>
						</select>
						<br><br>

                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="ADD PRODUCTS" />
                        </div>
                        <div class="form-group">
                            <a href="./empty_dashboard.html">BACK</a>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
		</section>
		</center>
	</body>
</html>