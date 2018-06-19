<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="https://bustiket.com/favicon.png"/>
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
			<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="brand"><a href="#">Logo</a></li>
									<li><a href="index.php">Home</a></li>
									<li><a href="index_1.html">About</a></li>
									<li><a href="index_2.html">Bus</a></li>
									<li><a href="index_3.html">Services</a></li>
									<li class="current"><a href="index_4.php">Contacts</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_12">
						<h3>Temukan Rute Perjalanan Anda</h3>
						<div class="map">
							<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=kampus%20ipb%20dramaga+(Institut%20Pertanian%20Bogor)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe></div><br />
						</div>
					</div>
					<div class="grid_5">
						<h3>Hubungi Kami</h3>
						<div class="map">

							<address>
								<dl>
									<dt>BusKita Inc. <br>
										Institut Pertanian Bogor<br>
									</dt>
									<dd><span>Telephone:</span>082312188225</dd>
									<dd>E-mail: <a href="#" class="color1">Buskita@gmail.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_6 prefix_1">
					<h3>Kritik dan Saran </h3>
						<div class="container">
						  <form id="bookingForm" action="index_4.php" method="post" name="form1"">
						    <label for="fname">Nama</label>
						    <input type="text" id="fname" name="name" placeholder=" ">
						    <br>
						    <label for="lname">Email</label>
						    <input type="text" id="lname" name="email" placeholder=" ">
						    <br>
						    <label for="subject">Kritik dan Saran</label>
						    <textarea id="subject" name="subject" placeholder=" " style="height:200px"></textarea>

						    <input type="submit" name="submit2" value="Submit">

						  </form>
						  <?php

							// Check If form submitted, insert form data into users table.
							if(isset($_POST['submit2'])) {
								$name = $_POST['name'];
								$email = $_POST['email'];
								$subject = $_POST['subject'];

								// include database connection file
								$databaseHost = 'localhost';
								$databaseName = 'id6021493_pesanbus';
								$databaseUsername = 'id6021493_pesanbus';
								$databasePassword = 'pesanbus';

								$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

								// Insert user data into table
								$result = mysqli_query($mysqli, "INSERT INTO contactus(name,email,subject,id) VALUES('$name','$email','$subject',NULL);");

								// Show message when user added'
								echo "Your form is added successfully!";
							}
						?>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> 082312188225</div>
					<div class="socials">
						<a href="https://twitter.com/BUSTIKET" class="fa fa-twitter"></a>
						<a href="https://www.facebook.com/BUSTIKET/" class="fa fa-facebook"></a>
						<a href="https://www.instagram.com/BUSTIKET/" class="fa fa-instagram"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Bus<span class="color1">K</span>ita </div>
						&copy; 2014	| <a href="#">Privacy Policy</a> </div> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
		</footer>
	</body>
</html>
