<!DOCTYPE html>
<html>
<head>
	<title>Product Menu | Baju | Celana | Tas | Sepatu | Fashion</title>
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
		.collapsilble{box-shadow: none;}
		.collapsible-body{padding: 3px;}
		.collapsible-header{outline: none; color: silver;}
		#set_links {border-left: 3px solid skyblue;}
		#set_links li a{color: silver; padding-left: 18px; font-size: 13px; font-height: 35px;display: block;}
	</style>
	 
</head>
<body>
	<!-- body section start -->
	<!-- big screen message section start -->
	<div class="hide-on-med-and-down">
	<h1 class="center-align" style="font-size: 10em; color: green;"><span class="fa fa-android"></span></h1>
	<h5 class="red-text section center-align hide-on-med-and-down">This Page Show Only Mobile Screen. Please Open Your Mobile In This Page</h5>
	<h6 class="red-text section center-align hide-on-med-and-down">Halaman Ini Hanya Untuk Tampilan Mobile. Silahlan Gunakan Mobile Phone Anda Untuk Mengakses Halaman Ini</h6>
	</div>
	<!-- big screen message section end -->
	<!-- baju title section start -->
	<h5 class="white-text section center-align hide-on-large-only" style="padding: 15px; background-color: #28d0c8">Kategori Tas</h5>
	<!-- baju title section end -->
	<ul class="collapsible hide-on-large-only">
		<li>
			<div class="collapsible-header">Tas X&nbsp;&nbsp;<span class="fa fa-chevron-circle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">&emsp;Sub Menu 1</a></li>
					<li><a href="">&emsp;Sub Menu 2</a></li>
					<li><a href="">&emsp;Sub Menu 3</a></li>
					<li><a href="">&emsp;Sub Menu 4</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Tas X&nbsp;&nbsp;<span class="fa fa-chevron-circle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Sub Menu 1</a></li>
					<li><a href="">Sub Menu 2</a></li>
					<li><a href="">Sub Menu 3</a></li>
					<li><a href="">Sub Menu 4</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Tas X&nbsp;&nbsp;<span class="fa fa-chevron-circle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Sub Menu 1</a></li>
					<li><a href="">Sub Menu 2</a></li>
					<li><a href="">Sub Menu 3</a></li>
					<li><a href="">Sub Menu 4</a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Tas X&nbsp;&nbsp;<span class="fa fa-chevron-circle-down" style="margin-top: 4px;"></span></div>
			<div class="collapsible-body">
				<ul id="set_links">
					<li><a href="">Sub Menu 1</a></li>
					<li><a href="">Sub Menu 2</a></li>
					<li><a href="">Sub Menu 3</a></li>
					<li><a href="">Sub Menu 4</a></li>
				</ul>
			</div>
		</li>
	</ul>
	<!-- body section end -->

	<!-- jquery js file include -->
	<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
	<!--materialixe js file include  -->
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>

<!-- custom js file include -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.collapsible').collapsible();
	});

</script>
</body>
</html>
