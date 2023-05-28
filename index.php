<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once 'database/koneksi.php';
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Toko Sepatu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- start slider -->
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#da-slider').cslider();
		});
	</script>
	<!-- Owl Carousel Assets -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Owl Carousel Assets -->
	<!-- Prettify -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {

			$("#owl-demo").owlCarousel({
				items: 4,
				lazyLoad: true,
				autoPlay: true,
				navigation: true,
				navigationText: ["", ""],
				rewindNav: false,
				scrollPerPage: false,
				pagination: false,
				paginationNumbers: false,
			});

		});
	</script>
	<!-- //Owl Carousel Assets -->
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
					<a href="index.php" style="font-size: 30px;">FAKHREZA.STORE</a>
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
						<li class="active"><a href="index.php">Home</a></li> |
						<li><a href="about.php">About</a></li> |
						<li><a href="fq.php">F&Q</a></li> |
						<li><a href="home.php">CRUD</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- start slider -->
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2>selamat datang di FAKHREZA.STORE</h2>
			<p>Kami dengan hangat menyambut Anda ke dunia belanja sepatu yang serba praktis dan menyenangkan. Di Toko Sepatu Online kami, Anda akan menemukan koleksi sepatu yang menginspirasi dan gaya terkini.</p>
			<div class="da-img"><img src="upload/P000011-removebg.png" alt="" /></div>
		</div>
		<div class="da-slide">
			<h2>Pengelolaan Produk yang mudah</h2>
			<p>Membantu Anda Mengelola Produk dengan Lebih Efisien. Aplikasi ini akan membantu Anda mengatur dan mengelola inventaris produk Anda dengan lebih baik.</p>
			<div class="da-img"><img src="upload/P000021-removebg.png" alt="image01" /></div>
		</div>
		<div class="da-slide">
			<h2>Mudah digunakan</h2>
			<p>Dirancang dengan antarmuka yang intuitif dan pengalaman pengguna yang ramah, aplikasi ini akan membuat hidup Anda lebih mudah dan lebih efisien.</p>
			<div class="da-img"><img src="upload/P000031-removebg.png" alt="image01" /></div>
		</div>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>
	</div>
	<!----start-cursual---->
	<div class="wrap">
	</div>
	<!-- start main1 -->
	<div class="main_bg1">
		<div class="wrap">
			<div class="main1">
				<h2>Kategori Produk</h2>
			</div>
		</div>
	</div>
	<!-- start main -->
	<div class="main_bg">
		<div class="wrap">
			<div class="main">
				<!-- start grids_of_3 -->
				<?php
				$query = "SELECT * FROM kategori ORDER BY id ASC";
				$result_rproduk = mysqli_query($koneksi, $query);
				$count = mysqli_num_rows($result_rproduk);
				// var_dump($count);
				$no = 1;
				$lanjut = true;
				while ($row = mysqli_fetch_array($result_rproduk)) {
					$id_kategori = $row['id'];
					$nama_kategori = $row['nama'];
					?>
					<?php
					if($no==1){
							echo "<div class='grids_of_3'>";
						} 
					?>
						<div class="grid1_of_3">
							<a href="listproduk.php?kategori=<?php echo $id_kategori?>">
								<img src="" alt="" />
								<h3><?php echo $nama_kategori?></h3>
								<span class="b_btm"></span>
							</a>
						</div>
						<?php
						if($no==3){
							echo "<div class='clear'></div></div>";
							$no=0;
						}
						?>
					
					<?php
					$no++;
				}
				if($no==2 || $no==3){
					echo "<div class='clear'></div></div>";
			}?>
				<!-- end grids_of_3 -->
			</div>
		</div>
	</div>
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