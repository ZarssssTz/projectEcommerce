<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$id_kategori = $_GET['kategori'];
include_once 'database/koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Toko Sepatu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>
    <!-- start top_js_button -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
          event.preventDefault();
          $("html,body").animate(
            { scrollTop: $(this.hash).offset().top },
            1200
          );
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
					<a href="index.php" style="font-size: 30px;">EXPETASIA.STORE</a>
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
          <h2 class="style top">Produk</h2>
          <!-- start grids_of_3 -->
          <?php
				$query = "SELECT produk.*, gambar.id_produk, gambar.nama as nama_gambar  FROM produk JOIN gambar ON produk.id = gambar.id_produk WHERE id_kategori = '$id_kategori' GROUP BY id ORDER BY id ASC";
				$result_rproduk = mysqli_query($koneksi, $query);
				$count = mysqli_num_rows($result_rproduk);
				// var_dump($count);
				$no = 1;
				$lanjut = true;
				while ($row = mysqli_fetch_array($result_rproduk)) {
					$id_produk = $row['id'];
					$nama_produk = $row['nama'];
          $gambar = $row['nama_gambar'];
					?>
					<?php
					if($no==1){
							echo "<div class='grids_of_3'>";
						} 
					?>
						<div class="grid1_of_3">
							<a href="details.php?produk=<?php echo $id_produk?>">
              <?php
                echo "<img style='width:200px; height:200px;'src='upload/".$row['nama_gambar']."' alt='foto'/>"
              ?>
								<h3><?php echo $nama_produk?></h3>
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
    <!-- start footer -->
    <div class="footer_bg1">
      <div class="wrap">
        <div class="footer">
          <!-- scroll_top_btn -->
          <script type="text/javascript">
            $(document).ready(function () {
              var defaults = {
                containerID: "toTop", // fading element id
                containerHoverID: "toTopHover", // fading element hover id
                scrollSpeed: 1200,
                easingType: "linear",
              };

              $().UItoTop({ easingType: "easeOutQuart" });
            });
          </script>
          <a href="#" id="toTop" style="display: block"
            ><span id="toTopHover" style="opacity: 1"></span
          ></a>
          <!--end scroll_top_btn -->
          <div class="copy">
            <p class="link">
              &copy; All rights reserved | Template by&nbsp;&nbsp;<a
                href="http://w3layouts.com/"
              >
                W3Layouts</a
              >
            </p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </body>
</html>
