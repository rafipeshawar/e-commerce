<?php
session_start();
if (!isset($_SESSION['log'])) {
} else {
	header('location:index.php');
};
include 'dbconnect.php';

if (isset($_POST['adduser'])) {
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

	$tambahuser = mysqli_query($conn, "insert into login (namalengkap, email, password, notelp, alamat) 
		values('$nama','$email','$pass','$telp','$alamat')");
	if ($tambahuser) {
		echo " <div class='alert alert-success'>
			Berhasil mendaftar, silakan masuk.
		  </div>
		<meta http-equiv='refresh' content='1; url= login.php'/>  ";
	} else {
		echo "<div class='alert alert-warning'>
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= registered.php'/> ";
	}
};

?>

<!DOCTYPE html>
<html>

<head>
	<title>PD HARUM</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="PD HARUM JAYA" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>DAPATKAN PENAWARAN MENARIK KHUSUS HARI INI, BELANJA SEKARANG!</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.php">DAFTAR</a></li>
					<li><a href="login.php">MASUK</a></li>

				</ul>
			</div>
			<!-- <div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
			</div> -->
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left1">

			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">PD HARUM JAYA</a></h1>
			</div>


			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">

		</div>
	</div>

	<!-- //navigation -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Halaman Daftar</li>
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- register -->
	<div class="register">
		<div class="container">
			<h2>FORM DAFTAR</h2>
			<div class="login-form-grids">
				<h5>Data Pribadi</h5>
				<form method="post">
					<input type="text" name="nama" placeholder="Nama Lengkap" required>
					<input type="text" name="telp" placeholder="Nomor Telepon" required maxlength="13">
					<input type="text" name="alamat" placeholder="Alamat Lengkap" required><br>
					<input type="text" name="metode pengiriman" placeholder="Metode Pengiriman" required>

					<h6>Data Login</h6>

					<input type="email" name="email" placeholder="Email" required="@">
					<input type="password" name="pass" placeholder="Password" required>
					<input type="submit" name="adduser" value="Daftar">
				</form>
			</div>
			<div class="register-home">
				<a href="index.php">Batal</a>
			</div>
		</div>
	</div>
	<!-- //register -->
	<!-- //footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<h3>Hubungi Kami</h3>

					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://maps.app.goo.gl/FTiffiYpgGNQshBo8">PD HARUM JAYA, BEKASI, JAWA BARAT.</a></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:pdharumjaya@gmail.com">pdharumjaya@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 818-0831-4065</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Tentang Kami</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
				<p>© Rafi Peshawar</p>
			</div>
		</div>

	</div>

	<!-- //footer -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- top-header and slider -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- main slider-banner -->
	<script src="js/skdslider.min.js"></script>
	<link href="css/skdslider.css" rel="stylesheet">
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#demo1').skdslider({
				'delay': 5000,
				'animationSpeed': 2000,
				'showNextPrev': true,
				'showPlayButton': true,
				'autoSlide': true,
				'animationType': 'fading'
			});

			jQuery('#responsive').change(function() {
				$('#responsive_wrapper').width(jQuery(this).val());
			});

		});
	</script>
	<!-- //main slider-banner -->
</body>

</html>