<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" name="viewport" content="width=device-widht, initial scale=1">
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
	.holder::-webkit-input-placeholder{color: gray; font-size: 14px;}
	</style>

</head>
<body style="background: #efead0">

	<!-- topbar section start -->
	<nav style="background-color: #000000; box-shadow: none;">
		<div class="nav-wrapper">
			<a href="" class="brand-logo left" style="font-size: 30px; color: #fee12b;"><span class="fa fa-user-cog"></span>&nbsp;SISTEM ADMIN</a> 
			<!-- warna gold asli #ffd700 -->
		</div>
	</nav>
	<!-- topbar section end -->

	<!-- Login body start -->
	<div align="center" style="padding-top: 70px;">
 		<div class="card text-left" style="width: 30rem; height: 26rem; background-color: #fee12b">
 			<div class="container">
 				<h4 style="font-size: 33px; padding-top: 15px"><b style="color: black">Login</b></h4>
 				<hr>
 				<div style="padding-top: 40px">
 				<!-- username -->
 				<form action="<?= site_url('Auth/cekLogin');?>" method="post">
 				<div class="form-group mb-2 mt-2">
 					<div class="left" style="padding-bottom: 10px">
 						<label for="username"><b style="color: black; font-size: 16px;">Username</b></label>
 					</div>
 						<input style="background-color: white;border-radius: 5px;padding: 3px" type="text" name="username" class="holder" placeholder="&nbsp;Masukkan Username" required>
 				</div>
 				<!-- password -->
 				<div class="form-group mb-2 mt-2">
 					<div class="left" style="padding-bottom: 10px">
 						<label for="password"><b style="color: black; font-size: 16px">Password</b></label>
 					</div>
 						<input style="background-color: white;border-radius: 5px;padding: 3px" type="password" name="password" class="holder" placeholder="&nbsp;Masukkan Password" required>
 				</div>

 				<br><button name="login" style="background: black;color: #fee12b" type="submit" class="btn btn-success btn-lg btn-block">LOGIN</button>
 				</form>

 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- Login body end -->

 	<!-- footer section start -->
	<footer class="page-footer" style="background: black; margin-top: 83px">      
            <div style="color: #fee12b; text-align: center;">
            &emsp;&emsp;© <?= date('Y'); ?> Copyright CV. Panca Karya Sakti
          </div>&nbsp;
        </footer>
	<!-- footers section end -->


<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
</body>
</html>