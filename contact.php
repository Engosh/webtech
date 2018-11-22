<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Website | RESPONSE </title>
		<link href="style.css" rel="stylesheet" type="text/css"  media="all" />
		<style type="text/css">	
		a{text-decoration: none;}
		</style>
	</head>
	<body>
		<div class="header">
			<div class="wrap">
				<div class="header-top">
					<div class="logo">
						<a href="index.html"><img src="images/logo1.png" title="logo" /></a>
					</div>
					<div class="contact-info">
						<p class="phone">CALL US : <a href="#">+91 XXXXXXXXXX</a></p>
						<p class="gpa">GPS : <a href="#">View map</a></p>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		
			<div class="header-top-nav">
				<div class="wrap">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">ABOUT</a></li>
						<li><a href="services.html">SERVICES</a></li>
						<li><a href="gallery.html">GALLERY</a></li>
						<li><a href="contact.html">CONTACT</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"> </div>
		<div class="content">
			<div class="wrap">
				<div class="contact">
					<div class="section group">				
						<div class="col span_1_of_3">
							<div class="contact_info"></div>
      						<div class="company_address">
				     			<h3>COMPANY INFORMATION :</h3>
							   	<p>address,</p>
							  	<p>street address,</p>
							  	<p>CITY, STATE - pincode</p>
						   		<p>Phone:(+91) XXXXXXXXXX</p>
						   		<p>Fax: (000) 00000000</p>
						 	 	<p>Email: <span>info@hotelid.com</span></p>
					   			<p>Follow us on: <span>Facebook</span>, <span>Twitter</span></p>
					   	</div>
					   	</div>			
						<div class="col span_2_of_3">
							<div class="contact-form">
						  	<?php
								extract($_POST);
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "contact";
								$dbtable ="query";

								$conn = mysqli_connect($servername, $username, $password,$dbname);
								if (!$conn) 
								{
							    	die("Connection failed: " . mysqli_connect_error());

								} 
								else
								{
									$name= ($_POST["userName"]);
									$email= ($_POST["userEmail"]);
									$number= ($_POST["userPhone"]);
									$sub= ($_POST["userMsg"]);
									$sql = "INSERT INTO query VALUES ('$name','$email','$number','$sub')";
									$us=mysqli_query($conn,$sql);
									if($us)
									{
										echo "<h3>YOUR RESPONSE IS RECORDED</h3>";
										echo "<h3>WE WILL GET BACK TO YOU SOON</h3>";
									}
									else
										echo "<h3>THERE WAS AN ERROR PLEASE TRY AGAIN</h3>";
								}
								$conn->close(); 
							?>
				    		</div>
  						</div>
					</div>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
				
				</div>
				<div class="box center-box">
					<ul>
						<li><a href="#">LEAVE A FEEDBACK</a></li>
						<li><a href="#">REVIEWS AND RATINGS</a></li>
						<li><a href="#">FAQ'S</a></li>
						<li><a href="#">PACKAGES</a></li>
						<li><a href="#">KNOW ABOUT MOUTAINEERING AND TREKKING HERE</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>