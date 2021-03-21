<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, inital-scale=1">
<head>
	<title>Admin | Login</title>
	<link rel="shortcut icon" href="<?= base_url('assets/image/logo/1.jpg'); ?>">
	<!-- Materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<!-- font awesome css include -->
	<?= link_tag('assets/font/font-awesome/css/font-awesome.css'); ?>
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<!-- css file include -->
	<style type="text/css">
		body{background-color: #424242}
		h6{line-height: 20px}
		#username,#password{border-bottom: 1px solid #fee12b;box-shadow: none}
		#username:focus + label,#password:focus + label{color: #424242}
	</style>
</head>
<body>
<!-- body section start -->
<h4 class="center-align" style="margin-top: 5%; margin-bottom: 2%; color: #fee12b"><span class="fa fa-user-cog"></span>&nbsp;Login Sistem Admin</h4>
<!-- login form section start -->
<form action="<?= site_url('Auth/cekLogin');?>" method="post">
<div class="row white" style="padding: 20px; padding-bottom: 50px">
	<br><br>
	<div class="col l1 m1 s12"></div>
	<div class="col l3 m3 s12" style="border: 2px solid #fee12b">
		<div class="input-field" style="padding-top: 2px;margin-top: 25px">
			<input type="text" name="username" id="username" required>
			<label for="username">Username Admin</label>
		</div>
		<div class="input-field" style="padding-top: 2px; margin-top: 25px">
			<input type="password" name="password" id="password" required>
			<label for="password">Password Admin</label>
		</div>
		<center><button type="submit" class="btn waves-effect waves-light" style="background-color: #fee12b; color: #424242; font-weight: bold; width: 80%; margin-top: 10px">LOGIN</button></center>
		</form>
		<br>
		<center><a href="#!">Lupa Password</a></center>
		<br><br>
	</div>
	<div class="col l7 m7 s12">
		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<div class="row">
			<div class="col l4 m4 s12" style="color: #424242">
				<center>
				<h1><span class="fa fa-users"></span></h1>
				<h6>Management Users & Costumer Service </h6>
				</center>
			</div>
			<div class="col l4 m4 s12" style="color: #424242">
				<center>
				<h1><span class="fa fa-shopping-cart"></span></h1>
				<h6>Management Produk</h6>
				</center>
			</div>
			<div class="col l4 m4 s12" style="color: #424242">
				<center>
				<h1><span class="fa fa-chart-line"></span></h1>
				<h6>Management Laporan Penjualan</h6>
				</center>
			</div>
		</div>	
	</div>
	<div class="col l1 m1 s12"></div>
</div>

<!-- login form section end -->
<!-- body section end -->
<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
</body>
</html>