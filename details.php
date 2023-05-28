<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$id_produk = $_GET['produk'];
include_once 'database/koneksi.php';
?>
<!DOCTYPE HTML>
<html>

<head>
<title>Toko Sepatu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- start details -->
	<link rel="stylesheet" type="text/css" href="css/productviewgallery.css" media="all" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/cloud-zoom.1.0.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="js/productviewgallery.js"></script>
	<!-- start top_js_button -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
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
	<!-- start main -->
	<div class="main_bg">
		<div class="wrap">
			<div class="main">
				<!-- start content -->
				<div class="single">
					<!-- start span1_of_1 -->
					<div class="left_content">
						<div class="span1_of_1">
							<!-- start product_slider -->
							<div class="product-view">
								<div class="product-essential">
									<div class="product-img-box">
										<div class="more-views" style="float:left;">
											<div class="more-views-container">
												<ul>
													<li>
														<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"
															style="width:64px;height:85px;" href="" title="" alt="">
															<img src="" src_main="" title="" alt="" /></a>
													</li>
													<li>
														<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"
															style="width:64px;height:85px;" href="" title="" alt="">
															<img src="" src_main="" title="" alt="" /></a>
													</li>
													<li>
														<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"
															style="width:64px;height:85px;" href="" title="" alt="">
															<img src="" src_main="" title="" alt="" /></a>
													</li>
													<li>
														<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"
															style="width:64px;height:85px;" href="" title="" alt="">
															<img src="" src_main="" title="" alt="" /></a>
													</li>
													<li>
														<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"
															style="width:64px;height:85px;" href="" title="" alt="">
															<img src="" src_main="" title="" alt="" /></a>
													</li>
												</ul>
											</div>
										</div>
										<?php
										$gambar=array();
										$query = "SELECT produk.*, kategori.id as id_kategori, kategori.nama as nama_kategori  FROM produk JOIN kategori ON produk.id_kategori = kategori.id WHERE produk.id = '$id_produk'";
										$result_rproduk = mysqli_query($koneksi, $query);
										while ($row = mysqli_fetch_array($result_rproduk)) {
											$id_produk = $row['id'];
											$nama_produk = $row['nama'];
											$nama_kategori = $row['nama_kategori'];
											$deskripsi = $row['deskripsi'];
											$harga = $row['harga'];
											$query2 = "SELECT * FROM gambar WHERE id_produk = '$id_produk'";
										$result_rgambar = mysqli_query($koneksi, $query2);
										$count = mysqli_num_rows($result_rgambar);
										$no = 0;
										while ($row2 = mysqli_fetch_array($result_rgambar)){
											array_push($gambar,$row2['nama']);
										}
										}
										 ?>
										<div class="product-image">
											<a class="cs-fancybox-thumbs cloud-zoom"
												rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5"
												data-fancybox-group="thumb" href="images/0001-2.jpg"
												title="Women Shorts" alt="Women Shorts">
												<img src="images/0001-2.jpg" alt="Women Shorts" title="Women Shorts" />
											</a>
										</div>
										<?php 
											$dinamis='';
											?>

										<?php
										// var_dump($gambar[0]);
										$dinamis;
										$koma = ',';
										for($no2=0; $no2<$count; $no2++){
											if($no2==$count-1){
												$koma='';
											}
										$dinamis .='"item_'.$no2.'":{"orig":"upload/'.$gambar[$no2].'","main":"upload/'.$gambar[$no2].'","thumb":"upload/'.$gambar[$no2].'","label":""}'.$koma;
										$string_gambar = '{"prod_1":{"main":{"orig":"upload/'.$gambar[0].'","main":"upload//'.$gambar[0].'","thumb":"upload//'.$gambar[0].'","label":""},"gallery":{'.$dinamis.'},"type":"simple","video":false}}';
										}?>
										<script type="text/javascript">
											var prodGallery = jQblvg.parseJSON('<?php echo $string_gambar; ?>'),
												gallery_elmnt = jQblvg('.product-img-box'),
												galleryObj = new Object(),
												gallery_conf = new Object();
											gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt=""><img src="" src_main="" width="64" height="85" title="" alt="" /></a>';
											gallery_conf.animspeed = 200;
											jQblvg(document).ready(function () {
												galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
												jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
												jQblvg('.cs-fancybox-thumbs').fancybox({
													prevEffect: 'none',
													nextEffect: 'none',
													closeBtn: true,
													arrows: true,
													nextClick: true,
													helpers: {
														thumbs: {
															width: 64,
															height: 85,
															position: 'bottom'
														}
													}
												});
												jQblvg('#wrap').css('z-index', '100');
												jQblvg('.more-views-container').elScroll({ type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });

											});

											function initGallery(a, b, element) {
												galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
											};
										</script>
									</div>
								</div>
							</div>
							<!-- end product_slider -->
						</div>
						<!-- start span1_of_1 -->
						<div class="span1_of_1_des">
							<div class="desc1">
								<h3>
									<?php echo $nama_produk; ?>
								</h3>
								<p>Deskripsi :
									<?php echo $deskripsi; ?>
								</p>
								<h5>Rp.
									<?php echo $harga; ?>
								</h5>
							</div>
						</div>
						<div class="clear"></div>
						<!-- start tabs -->
						<!-- end tabs -->
					</div>
					<div class="clear"></div>
					<!-- start tabs -->
					<!-- end tabs -->
				</div>
				<!-- start sidebar -->
				<!-- end sidebar -->
				<div class="clear"></div>
			</div>
			<!-- end content -->
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