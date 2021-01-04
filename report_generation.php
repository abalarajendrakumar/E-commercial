<?php
	$conn = mysqli_connect('localhost','root','','eclab_pkg');
	session_start();

	$ID = 0;
	
	$sql = "SELECT * FROM ORDERS OO LEFT JOIN PRODUCTS PP ON OO.PRODUCT_ID = PP.ID WHERE OO.STATUSOFDELIVERY=0 AND OO.VALIDFLAG=1 AND PP.VALIDFLAG=1 AND OO.USER_ID=".$ID;
	
?>
<head>

		<title>REPORT GENERATION</title>
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
		</style>
	</head>
	<body style="background-image: url('image/back.png');background-size: cover; background-repeat: no-repeat;">
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
				<a href="#" class="navbar-brand" style="color:black;"> E-COMMERCIAL </a>
			</div>
			
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
			
				<li><a href="#" style="color:#0062cc;">Product</a></li>
			</ul>
			
			
				</li>
			</ul>
		</div>
	</div>
</div>	
<br><br>
		<HR>
				<div class="container"  style="margin-top:100px;" >
     
        	<div class="col-md-12 " style="background-color:white; padding:10px; ">  
        		<div class="col-md-1">
        		</div>
        		<div class="col-md-10">
        		<center>
        	
        		<br><br><br>
        		
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-transform: uppercase; font-weight: bold;  font-family:  'Open Sans', sans-serif; letter-spacing:  1.5px;">
                         REPORT</h3>
                </div>
                <div class="panel-body" >
                    <div class="row">
		
				<center>
				<table style="width:70%">
					
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
	</body>
	</html>