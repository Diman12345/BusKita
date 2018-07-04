<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Services</title>
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
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				$('.gallery a.gal').touchTouch();
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
		<style>
   footer {
   	background-color:#555;
   }
  .daftar{
  	padding-right:2%;
  	padding-left:2%;
  }
  .form {
  	border-radius: 25px;
   float: center;
   text-align:center;
   padding: 5%;
   padding-bottom:10%;
   margin: auto;
   margin-bottom: 5%;
   width: 30%;
   border: 4px solid #555;
  }
  .input {
   padding: 1%;
   color: #777777;
   font-size: 12pt;
   float: center;
   width: 70%;
   margin:auto;
  }
  .submit {
   padding: 1.5%;
   color: #fff;
   background-color: #FFA500;
   transition: color 0.5s;
   -webkit-transition: color 0.5s; /* Safari 3.1 to 6.0 */
   transition: background-color 0.5s;
   -webkit-transition: background-color 0.5s; /* Safari 3.1 to 6.0 */
   font-size: 14pt;
   font-family: 'Open Sans';
   width: 20%;
   margin: auto;
   border: none;

  }
  .submit:hover {
   color: #ff9933;
   background-color:#FFF;
  }
  .welcome {
   color: #000;
   font-size: 20pt;
   font-weight: 900;
   font-family: 'Open Sans', sans-serif;
  }
  </style>
	</head>

	<body class="page1" id="top" >
		<div class="main">
<!--==============================header=================================-->
<header>
	<div class="menu_block">
		<div class="container_12">
			<div class="grid_12">
				<nav class="horizontal-nav full-width horizontalNav-notprocessed">
					<ul class="sf-menu">
						<li class="brand"><img src="images/logo 2.jpg"></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="index_1.html">About</a></li>
						<li><a href="index_2.html">Bus</a></li>
						<li><a href="index_3.html">Services</a></li>
						<li><a href="index_4.html">Contacts</a></li>
						<li class="current"><a href="index6.php">Login</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="clear"></div>
</header>

<div class="form">
	<span class="welcome">Selamat Datang di BusKita!</span>
	<br><br><br>
 	<form action="login.php" method="post">
  		<input class="input" type="text" name="username" placeholder="Username">
  		<br><br>
  		<input class="input" type="password" name="password" placeholder="Password">
  		<br><br>
  		<input class="submit" type="submit" value="Login" name="login">
		<br><br><br>
		<b> Belum Punya Akun?</b> <br><br><a href="register.php" class="submit">Daftar!</a>
	</form>
</div>
<div class="clear">

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