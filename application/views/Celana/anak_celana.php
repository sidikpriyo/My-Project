<!DOCTYPE html>
<html>
<meta charset="utf-8" name="viewport" content="width=device-widht, initial scale=1">
<head>
	<title>Celana | Anak</title>
	<!-- shortcut icon section start -->
	<link rel="shortcut icon" href="<?= base_url('assets/image/logo/1.jpg'); ?>">
	<!-- Materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<!-- font awesome css include -->
	<?= link_tag('assets/font/font-awesome/css/font-awesome.css'); ?>
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- custom css file include -->
	<style type="text/css">
		#vm a:hover{ color: black; text-decoration: underline solid #fee12b; font-size: 16px;}

		#judul {background: #e6e6e6; padding: 10px; margin: 20px; border-radius: 50px;margin-bottom: 30px}
		#judul h6{font-size: 18px; color: black}

		#bg_item{background: black}
		#content_pad{padding-top: 10px}
		#content_pad h6{font-size: 11px;color: #fee12b; margin-left: -15px;margin-right: -15px;text-align: center;}
		#content_ket{background: #fee12b;margin-top:-20px;padding: 3px}
		#content_ket h6{font-size: 14px;margin-top: 2px}

		#mn_kategori {border: 1px solid #e6e6e6; margin-top: -5px;padding: 5px; margin-left: -5px; margin-right: -5px; margin-bottom: 2px; text-align: center; font-size: 14px;margin: 10px; background: #e6e6e6}
		#mn_kategori a{color: gray}
		#mn_kategori a:hover{font-size: 15px; color:black; text-decoration: underline solid #fee12b; }
	</style>
</head>
<body>

	<!-- navbar -->
	<?php $this->load->view('template/navbar'); ?>

	<!-- body -->
	<div class="container" style="background: #e6e6e6; width: 100%; padding: 1px; margin-bottom: 40px; margin-top: 20px;">
		<ul style="margin-top: 10px;">
			<li style="font-size: 14px"><a href="http://localhost/pancakarya/Home">&nbsp;&nbsp;Home</a>&nbsp;>&nbsp;<a href="http://localhost/pancakarya/Celana">Semua Kategori Celana</a>&nbsp;>&nbsp;Kategori Celana Anak</li>
		</ul>
	</div>

	<!-- menu -->
	<div class="content" style="margin-top: -10px;">
		<div class="row">
			<div class="col l12 m12 s12" style=" background: white;padding-bottom: 0px">


<!-- Menu Celana anak start -->
	<div class="col" style="border: 1px solid #e6e6e6;background: white; padding: 5px; margin: 5px; width: 16%;margin-left: 25px; margin-top: -10px">
		<div style="padding: 0px; margin-left: -5px; margin-right: -5px; margin-bottom: 20px">
			<h6 class="black-text section center-align" style="font-size: 15px;margin-top: -5px; background: #e6e6e6;">Celana Anak</h6>
		</div>
					
		<!-- isi menu -->
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		<div id="mn_kategori">
			<a href="#">Nama Celana</a>
		</div>
		
	</div>
<!-- Menu Celana Anak end -->

				<!-- content -->
				<div class="col" style="border: 1px solid #e6e6e6;background: white; padding: 10px; margin: 5px; width: 79%; margin-left: 15px; margin-top: -10px">
					<div class="row" style="background: #e6e6e6; margin-top: -10px; margin-left: -10px; margin-right: -10px; padding: 1px">
						<h5 style="margin-top: 10px; font-size: 20px">&nbsp;&nbsp;Semua Celana Anak</h5>
					</div>
						<div class="container" style="width: 60%">
						<div class="carousel carousel-slider">
					    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
					    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
					    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
					    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
					  </div>
					  </div>

		<div class="content" id="judul">
			<h6>&nbsp;&nbsp;Jeans</h6>
		</div>

		<!-- Menu Celana Anak -->
		<div class="row" style="border: 1px solid #e6e6e6; margin-bottom: 30px">
		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>
		<div align="right" style="margin-left: 20px; margin-right: 30px; margin-bottom: 20px;" id="vm">
		<a href="#">View More</a>
	</div>
	</div>

	

	<div class="content" id="judul">
		<h6>&nbsp;&nbsp;Nama Baju</h6>
	</div>

<!-- Menu Celana Anak -->
		<div class="row" style="border: 1px solid #e6e6e6; margin-bottom: 30px">
		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>
		<div align="right" style="margin-left: 20px; margin-right: 30px; margin-bottom: 20px;" id="vm">
		<a href="#">View More</a>
	</div>
	</div>	

	<div class="content" id="judul">
		<h6>&nbsp;&nbsp;Nama Menu</h6>
	</div>
	<!-- Menu Celana Anak -->
		<div class="row" style="border: 1px solid #e6e6e6; margin-bottom: 30px;">
		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s12 right">
			<div class="card" id="bg_item">
				<div class="card-image">
					<img src="<?= base_url('assets/image/menu-image/baju.png'); ?>" class="responsive-img">
				</div>
				<div class="card-content" id="content_pad">
					<p align="center" style="font-size: 15px;color: white"><b>Daster Wanita</b></p>
					<h6><span class=""></span>1 pcs : Rp. 50.000,-</h6>
					<h6><span class=""></span>3 pcs : Rp. 140.000,-</h6>
					<h6><span class=""></span>6 pcs : Rp. 250.000,-</h6>
				</div>

				<div class="card" align="center" id="content_ket">
					<h6><span class=""></span><b>Diskon : 20%</b></h6>
					<h6><span class=""></span><b>Stok : 2</b></h6>
				</div>
			</div>
		</div>
		<div align="right" style="margin-left: 20px; margin-right: 30px; margin-bottom: 20px;" id="vm">
		<a href="#">View More</a>
	</div>
	</div>


				</div>
			</div>
		</div>
	</div>
	<!-- end menu -->

	<!-- footer -->
	<?php $this->load->view('template/footer'); ?>

	<!-- jquery js file include -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!--materialixe js file include  -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>

	<!-- costum js file include -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.dropdown-trigger').dropdown({
				coverTrigger:false,
				hover:true,
			});

			//sidenav menu script
			$('.sidenav').sidenav();

			var instance = M.Carousel.init({
				fullWidth: true
			});
			//image slider script start
			$('.carousel.carousel-slider').carousel({
				fullWidth: true,
				indicators: true
			});

			//collapsible menu
			$('.collapsible').collapsible();
			
		});
	</script>

</body>
</html>