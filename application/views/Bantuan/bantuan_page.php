<!DOCTYPE html>
<html>
<meta charset="utf-8" name="viewport" content="width=device-widht, initial scale=1">
<head>
	<title>Halaman Bantuan</title>
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

	<!-- navbar -->
	<?php $this->load->view('template/navbar');?>
	<!-- body -->
	<div class="container" style="background: #e6e6e6; width: 100%; padding: 1px; margin-bottom: 40px; margin-top: 20px;">
		<ul style="margin-top: 10px;">
			<li style="font-size: 14px"><a href="http://localhost/pancakarya/Home">&nbsp;&nbsp;Home</a>&nbsp;>&nbsp;Bantuan</li>
		</ul>
	</div>

	<div class="container" style="width: 90%;margin-top: -20px; margin-left: 5%; margin-bottom: -20px">
		<h4>Halaman Bantuan</h4>
	</div>

	<!-- body bantuan -->
	<div class="container" style="width: 90%" style="background: green">
		<div class="row" style="margin-top: 4%">

	      <div class="col s9 push-s3" style="border:1px solid silver;"><span class="flow-text">ISI KONTEN</span>

	      </div>
	      
	      <div class="col s3 pull-s9" style="border:1px solid silver;"><span class="flow-text">Menu Konten</span>		    
	      	
	      </div>

	    </div>	
	</div>



	<!-- footer -->
	<?php $this->load->view('template/footer');?>

<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>

<!-- costum js file include -->
<?php $this->load->view('template/jquery');?>

</body>
</html>