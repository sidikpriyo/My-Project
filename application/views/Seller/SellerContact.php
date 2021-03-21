<!DOCTYPE html>
<meta name="viewport" content="width=device-width, inital-scale=1">
<html>
<head>
	<title>Seller Contact</title>
	<!-- shortcut icon section start -->
	<link rel="shortcut icon" href="<?= base_url('assets/image/logo/1.jpg'); ?>">
	<!-- Materialize css file include -->
	<?= link_tag('assets/materialize/css/materialize.css'); ?>
	<!-- font awesome css include -->
	<?= link_tag('assets/font/font-awesome/css/font-awesome.css'); ?>
	<!-- materialize icon css file include -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- costum css file include -->
	<style type="text/css">
	body{background: rgb(0,0,0,0.09);}
	#set_contact {background: silver; padding: 10px;}
	select {display: block; border:1px solid gray}
	#seller_fname, #seller_lname{border: 1px solid gray; box-shadow: none; padding-left: 3px; width: 99%; background: white; color: gray;}
	#seller_address{border: 1px solid gray; box-shadow: none; padding-left: 3px; width: 100%; height: 150px; background: white; color: gray;}
	</style>
</head>
<body>
<!-- body section start -->
<!-- contact form section start -->
<div class="row" style="margin-top: 6%">
	<div class="col l4 m4 s12"></div>
	<div class="col l4 m4 s12" style="padding: 10px">
		<div id="set_contact">
			<br>
			<?= form_open('Seller/InsertSellerContact'); ?>
			<h6 class="white-text">Seller Contact Information</h6>
			<p class="white-text" style="font-size: 14px;margin-top: 0px">Fill This Form & Complete Our Information.</p>
			<input type="text" name="seller_fname" id="seller_fname" placeholder="First Nama" required>
			<input type="text" name="seller_lname" id="seller_lname" placeholder="Last Nama" required>
			<textarea class="materialize-textarea" id="seller_address" name="seller_address" placeholder="Adress" required></textarea>
			<select name="seller_city">
				<option disabled selected>Select Your City</option>
				<option>Magelang</option>
				<option>Semarang</option>
				<option>Jogjakarta</option>
				<option>Solo</option>
				<option>Pati</option>
				<option>Kudus</option>
				<option>Demak</option>
				<option>Salatiga</option>
			</select>
			<br>
			<button type="submit" class="btn waves-effect waves-light white-text" style="background-color: #424242">Submit</button>
			<?= form_close(); ?>
			<br><br>

		</div>
	</div>
	<div class="col l4 m4 s12"></div>
</div>
<!-- contact form section end -->
<!-- body section end -->
<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
</body>
</html>