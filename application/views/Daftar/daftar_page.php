<!DOCTYPE html>
<html>
<meta charset="utf-8" name="viewport" content="width=device-widht, initial scale=1">
<head>
	<title>Daftar Akun</title>
	<!-- shortcut icon section start -->
	<link rel="shortcut icon" href="<?= base_url('assets/image/logo/1.jpg'); ?>">

	<!-- Materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>

	<!-- font awesome css include -->
	<?= link_tag('assets/font/font-awesome/css/font-awesome.css'); ?>

	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body id="body">

	<?php $this->load->view('template/navbar');?>

	<!-- register section form start -->
	<div class="container" style="width: 35%">
		
		<div class="col l4 m4 s12" style="padding: 20px; margin-top: 48px; margin-bottom: 48px; background: #fee12b;">
			<?= form_open("Daftar/daftarAkun"); ?>
			<h6 class="center-align" style="margin-bottom: 30px; margin-top: 20px; color: black; font-size: 25px">DAFTAR SEKARANG</h6>
			<p style="color: black; margin-bottom: 5px">Isi Formulir Pendaftaran</p>
			<input class="holder" type="text" name="company_name" id="company_name" placeholder="&nbsp;Nama Lengkap" style="background: white; font-size: 13px; border-radius: 9px;margin-bottom: 15px" required>
			<input class="holder" type="email" name="email" id="email" placeholder="&nbsp;E-Mail" style="background: white;font-size: 13px;border-radius: 9px;margin-bottom: 15px" required>
			<input class="holder" type="number" name="mobile_no" id="mobile_no" placeholder="&nbsp;No.Hp" style="background: white;border-radius: 9px; font-size: 13px;margin-bottom: 15px" required>
			<input class="holder" type="text" name="username" id="username" placeholder="&nbsp;Username" style="background: white;border-radius: 9px; font-size: 13px;margin-bottom: 15px" required>
			<input class="holder" type="password" name="password" id="password" placeholder="&nbsp;Password" style="background: white;border-radius: 9px;font-size: 13px;margin-bottom: 15px" required>
			<input class="holder" type="password" name="password" id="password" placeholder="&nbsp;Ketik Ulang Password" style="background: white;font-size: 13px;border-radius: 9px; margin-bottom: 20px" required>
			
			<button type="submit" class="btn waves-effect waves-light" style="background: black; margin-bottom: 20px; border: px solid white; font-size: 12px; margin-top: 10px;" id="btn_submit"><b style="color: #ffd700">Create Account</b></button>
			</div>
			<?= form_close(); ?>
			</b>
		</div>
	</div>
	<!-- register section form end -->


	<?php $this->load->view('template/footer');?>


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
		});
	</script>

</body>
</html>