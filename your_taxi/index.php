<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
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
									<li class="current"><a href="index.php">Home</a></li>
									<li><a href="index_1.html">About</a></li>
									<li><a href="index_2.html">Bus</a></li>
									<li><a href="index_3.html">Services</a></li>
									<li><a href="index_4.php">Contacts</a></li>
									<li><a href="index6.php">Login</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="clear"></div>
			</header>
			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="gambar/slide1.jpg" ></div>
					<div data-src="gambar/slide2.jpg" ></div>
					<div data-src="gambar/slide3.jpg"></div>
				</div>
			</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/images1.png" alt="">
								<div class="extra_wrapper">Cepat&amp;
									<div class="color1">Nyaman</div>
								</div>
							</div>
							<p>Mencari dan membandingkan berbagai jenis bus Antar Kota Antar Provinsi di seluruh Indonesia mulai dari segi harga, rute, lama perjalanan, fasilitas dan lainnya dengan teknologi algoritma search terbaru.</p>

						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/images2.png" alt="">
								<div class="extra_wrapper">Harga
									<div class="color1">Terjangkau</div>
								</div>
							</div>
							<p>Harga tiket bus yang ditampilkan di BUSTIKET.COM adalah harga resmi dan terbaik, sudah termasuk biaya-biaya seperti pajak, handling fee dan lainnya</p>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/images3.png" alt="">
								<div class="extra_wrapper">Transaksi
									<div class="color1">Terjamin</div>
								</div>
							</div>
							<p>Teknologi SSL dari RapidSSL dengan Sertifikat yang terotentikasi menjamin privasi dan keamanan transaksi online Anda. Konfirmasi instan dan e-tiket dikirm ke email Anda.</p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div class="container_12">
					<div class="grid_5">
						<h3>Booking Form</h3>
						<form id="bookingForm" action="" method="post" name="form2">
							<div class="fl1">
								<div class="tmInput">
									<input name="Name" placeHolder="Nama :" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								<div class="tmInput">
									<input name="From" placeHolder="Berangkat" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email :" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								<div class="tmInput">
									<input name="To" placeHolder="Tujuan" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							<div class="clear"></div>
							<strong>Time</strong>
							<div class="tmInput">
								<input name="Time" placeHolder="" type="time" data-constraints="@NotEmpty @Required">
							</div>
							<div class="clear"></div>
							<strong>Date</strong>
							<label class="tmDatepicker">
								<input type="text" name="Date"	placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="Comfort" type="radio" id="tmRadio0" value="Cheap" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Cheap</span>
								<input name="Comfort" type="radio" id="tmRadio1" value="Standard" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standard</span>
								<input name="Comfort" type="radio" id="tmRadio2" value="Lux"data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							<div class="clear"></div>
							<div class="fl1 fl2">
								<em>Adults</em>
								<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<div class="clear height1"></div>
							</div>
							<div class="fl1 fl2">
								<em>Children</em>
								<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>0</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="tmTextarea">
								<p>Catatan</p>
								<textarea name="Message" placeHolder=" " data-constraints=''></textarea>
							</div>
							<input class="btn" input type="submit" name="Submit" value="Pesan">
						</form>
						<?php

							// Check If form submitted, insert form data into users table.
							if(@$_POST['Submit']) {
								$name = @$_POST['Name'];
								$email = @$_POST['Email'];
								$from = @$_POST['From'];
								$to = @$_POST['To'];
								$time = @$_POST['Time'];
								$date = @$_POST['Date'];
								$comfort = @$_POST['Comfort'];
								$adults = @$_POST['Adults'];
								$children = @$_POST['Children'];
								$message = @$_POST['Message'];
								// include database connection file
								$databaseHost = 'localhost';
								$databaseName = 'pesanbus';
								$databaseUsername = 'root';
								$databasePassword = '';
								$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
								// Insert user data into table
								$result = mysqli_query($mysqli, "INSERT INTO pesanbus2(id,name,email,loc_from,loc_to,`time`,`date`,comfort,adults,children,message) VALUES(NULL,'$name','$email','$from','$to','$time','$date','$comfort','$adults','$children','$message');");
								// Show message when user added'
								?>

								<script type="text/javascript">
								  alert("PEMESANAN berhasil!");
								  window.location.href="index.php"

								</script>

								<?php 
								// kirim email ke user
								$to      = $email;
                				$subject = 'the subject';
                				$message = 'hello';
                				$headers = 'From: Buskita1234@gmail.com' . "\r\n" .
                            	'Reply-To: Buskita1234@gmail.com' . "\r\n" .
                            	'X-Mailer: PHP/' . phpversion();
								mail($to, $subject, $message, $headers);
							
							}
						?>
					</div>
					<div class="grid_6 prefix_1">
						<a href="gambar/form1.jpg" class="type"><img src="gambar/form1.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="gambar/form2.jpg" class="type"><img src="gambar/form2.jpg" alt=""><span class="type_caption">Standard</span></a>
						<a href="gambar/form3.jpg" class="type"><img src="gambar/form3.jpg" alt=""><span class="type_caption">Lux</span></a>
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
		</footer>
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
	</body>
</html>