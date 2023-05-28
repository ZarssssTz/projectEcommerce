<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
<title>Toko Sepatu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.min.js"></script>
	<!-- start top_js_button -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
			});
		});
	</script>
</head>

<body>
	<!-- start header -->
	<div class="header_bg">
		<div class="wrap">
			<div class="header">
			<div class="logo">
					<a href="index.php" style="font-size: 30px;"> FAKHREZA.STORE</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="header_btm">
		<div class="wrap">
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li><a href="index.php">Home</a></li> |
						<li class="active"><a href="about.php">About</a></li> |
						<li><a href="fq.php">F&Q</a></li> |
						<li><a href="home.php">CRUD</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- start main -->
	<div class="main_bg">
		<div class="wrap">
			<div class="main">
				<div class="contact">
					<div class="contact_info">
						<h2>Tentang Kami</h2>
					</div>
					<br>
					<label> FAKHREZA.STORE merupakan toko online yang bergerak di bidang penjualan sepatu. Website ini berisi tentang produk yang tersedia di toko kami. Produk dapat dilihat berdasarkan pilihan kategori yang dipilih oleh pengguna. Toko Sepatu adalah destinasi terbaik untuk mendapatkan sepatu berkualitas tinggi yang dirancang dengan gaya dan kenyamanan. Kami bangga menyediakan beragam koleksi sepatu untuk segala usia dan gaya, mulai dari sepatu formal, kasual, olahraga, hingga sepatu pesta. Dengan pengalaman kami dalam industri sepatu selama lebih dari 10 tahun, kami memiliki reputasi yang solid dalam menyediakan produk-produk berkualitas dan pelayanan pelanggan yang luar biasa.</label>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- start footer -->
	<!-- start footer -->
	<div class="footer_bg1">
		<div class="wrap">
			<div class="footer">
				<!-- scroll_top_btn -->
				<script type="text/javascript">
					$(document).ready(function () {

						var defaults = {
							containerID: 'toTop', // fading element id
							containerHoverID: 'toTopHover', // fading element hover id
							scrollSpeed: 1200,
							easingType: 'linear'
						};


						$().UItoTop({ easingType: 'easeOutQuart' });

					});
				</script>
				<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
				<!--end scroll_top_btn -->
				<div class="copy">
					<p class="link">&copy; All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/">
							W3Layouts</a></p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>

</html>