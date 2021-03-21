<!DOCTYPE html>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
	<title>Dashboard Seller</title>
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
		#show_user_profile {width: 15% !important;}
		#show_user_profile li a{color: #38b1a6;}
		#show_user_profile li a:hover{color: white;background: #28d0c8;}
		#left_menu li a,#right_menu li a{color: #38b1a6}
		#left_menu a:hover, #right_menu a:hover{background: #28d0c8; color: white;}
		#show_order,#show_listings,#show_marketing{width: 13% !important}
		#set_task li a,#set_feedback li a{color: silver;padding-left: 15px;line-height: 21px;display: block; padding: 5px;}
		#seller_level li a{color: silver;padding-left: 15px;line-height: 58px;display: block; padding: 5px;}
		#selling_tools li a{color: silver; line-height: 42px; padding-left: 15px;display: block;}
		#set_recent_feedback li a{color: silver; line-height: 22px; padding-left: 15px;display: block;}
	</style>
</head>
<body>
	<!-- Body section start -->
	<!-- top bar section start -->
	<nav style="height: 35px;line-height: 35px;background-color: #38b1a6" class="hide-on-med-and-down">
		<div class="nav-wrapper">
			<!-- left menu section start -->
			<ul class="left">
				<li><a href="#!" class="dropdown-trigger" data-target="show_user_profile"><span class=" fa fa-user"></span>&nbsp;Hi user</a></li>
				<!-- dropdown section start -->
				<ul class="dropdown-content" id="show_user_profile">
					<li><a href=""><span class="fa fa-picture-o"></span>&nbsp;&nbsp;Company Profile</a></li>
					<li><a href=""><span class="fa fa-cogs"></span>&nbsp;&nbsp;Account Setting</a></li>
					<li><a href="<?= base_url('Seller/Logout'); ?>"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;Logout</a></li>
				</ul>				
				<!-- dropdown section end -->
				<li><a href=""><span class=" fa fa-phone"></span>&nbsp;Help & Contact</a></li>
			</ul>
			<!-- left menu section end -->

			<!-- right menu section start -->
			<ul class="right">
				<li><a href=""><span class="fa fa-cubes"></span>&nbsp;Sell</a></li>
				<li><a href=""><span class="fa fa-bell"></span>&nbsp;Notification</a></li>
				<li><a href=""><span class="fa fa-shopping-cart"></span>&nbsp;Cart</a></li>
			</ul>
			<!-- right menu section end -->
		</div>
	</nav>
	<!-- top bar section start -->
	<!-- website name section start -->
	<h4 style="margin-left: 10px;">Shop</h4>
	<!-- website name section end -->
	<h5 style="margin-top: 30px;margin-left: 10px">Seller Hub&nbsp;&nbsp;<span style="font-size: 18px"><a href="">Profile Name</a></span></h5>

	<!-- menu bar section start -->
	<nav style="box-shadow: none; background: white; border-bottom: 2px solid silver;" class="hide-on-med-and-down">
		<div class="nav-wrapper">
			<!-- left menu section start -->
			<ul class="left" id="left_menu">
				<li><a href="" style="background: #28d0c8; color: white;">Overview</a></li>
				<li><a href="#show_order" class="dropdown-trigger">Orders</a></li>
				<!-- order dropdown section start -->
				<ul class="dropdown-content" id="show_order">
					<li><a href="">All Orders</a></li>
					<li><a href="">Awaiting Payment</a></li>
					<li><a href="">Awaiting Shipment</a></li>
					<li><a href="">Paid and Shipped</a></li>
					<li><a href="">Cancellations</a></li>
					<li><a href="">Return</a></li>
				</ul>
				<!-- order dropdown section end -->
				
				<li><a href="#show_listings" class="dropdown-trigger">Listings</a></li>
				<!-- Listings dropdown section start -->
				<ul class="dropdown-content" id="show_listings">
					<li><a href="<?= base_url('Seller/CreateListing'); ?>">Create Listing</a></li>
					<li><a href="">Active</a></li>
					<li><a href="">Unsold</a></li>
				</ul>
				<!-- Listings dropdown section end -->

				<li><a href="#show_marketing" class="dropdown-trigger">Marketing</a></li>
				<!-- marketing dropdown section start -->
				<ul class="dropdown-content" id="show_marketing">
					<li><a href="">Price Offers</a></li>
					<li><a href="">Quantity Offers</a></li>
					<li><a href="">Create Sale</a></li>
				</ul>
				<!-- marketing dropdown section end -->
				<li><a href="">Performance</a></li>
			</ul>
			<!-- left menu section end  -->
			<!-- right menu section start -->
			<ul class="right" id="right_menu">
				<li><a href="">Messages(0)</a></li>
				<li><a href="">Comments</a></li>
			</ul>
		</div>
			<!-- right menu section end  -->
	</nav>
	<!-- menu bar section end -->
	<br><br><br>
	<!-- data section start -->
	<div class="row">
		<div class="col l2 m4 s12" style="padding: 5px">
			<div id="box" style="border: 1px solid #28d0c8;">
				<h6 style="background:  #28d0c8; margin-top: 0px;margin-bottom: 0px;font-size: 16px; padding: 5px; color: white;">Unread Messages</h6>
				<h5 style="color: silver;padding-left: 3px;">52</h5>
			</div>
		</div>

		<div class="col l2 m4 s12" style="padding: 5px">
			<div id="box" style="border: 1px solid #28d0c8;">
				<h6 style="background:  #28d0c8; margin-top: 0px;margin-bottom: 0px;font-size: 16px; padding: 5px; color: white;">Awaiting Shipment</h6>
				<h5 style="color: silver;padding-left: 3px;">15</h5>
			</div>
		</div>

		<div class="col l2 m4 s12" style="padding: 5px">
			<div id="box" style="border: 1px solid #28d0c8;">
				<h6 style="background:  #28d0c8; margin-top: 0px;margin-bottom: 0px;font-size: 16px; padding: 5px; color: white;">Sales(Last 31 Days)</h6>
				<h5 style="color: silver;padding-left: 3px;">55,000</h5>
			</div>
		</div>

		<div class="col l2 m4 s12" style="padding: 5px">
			<div id="box" style="border: 1px solid #28d0c8;">
				<h6 style="background:  #28d0c8; margin-top: 0px;margin-bottom: 0px;font-size: 16px; padding: 5px; color: white;">Today Sales</h6>
				<h5 style="color: silver;padding-left: 3px;">3,502</h5>
			</div>
		</div>

		<div class="col l2 m4 s12" style="padding: 5px">
			<div id="box" style="border: 1px solid #28d0c8;">
				<h6 style="background:  #28d0c8; margin-top: 0px;margin-bottom: 0px;font-size: 16px; padding: 5px; color: white;">Today Feedback</h6>
				<h5 style="color: silver;padding-left: 3px;">52</h5>
			</div>
		</div>

		<div class="col l2 m4 s12" style="padding: 5px">
			<div id="box" style="border: 1px solid #28d0c8;">
				<h6 style="background:  #28d0c8; margin-top: 0px;margin-bottom: 0px;font-size: 16px; padding: 5px; color: white;">Seller Level</h6>
				<h5 style="color: silver;padding-left: 3px;">Above Standar</h5>
			</div>
		</div>
	</div>
	<!-- data section end -->

	<!-- task and sales section start -->
	<div class="row">
		<div class="col l4 m4 s12" style="padding: 10px;">
			<div style="border: 1px solid #28d0c8;border-radius: 3px">
				<h6 style="background: #28d0c8; padding: 5px;margin: 0px;margin-bottom: 0px;color: white">Task</h6>
				<ul id="set_task">
					<li><a href=""><span style="background-color:#28d0c8" class="badge white-text">5</span>&nbsp;Message</a></li>
					<li><a href=""><span style="background-color:#28d0c8" class="badge white-text">5</span>&nbsp;Shipment</a></li>
					<li><a href=""><span style="background-color:#28d0c8" class="badge white-text">5</span>&nbsp;Feedback</a></li>
				</ul>
			</div>
			<!-- selling tools section start -->
			<div style="border: 1px solid #28d0c8; margin-top: 25px;border-radius: 3px">
				<h6 style="background: #28d0c8; padding: 5px;margin: 0px;margin-bottom: 0px;color: white">Selling Tools</h6>
				<ul id="selling_tools">
					<li><a href="">My Profile (profile name)</a></li>
					<li><a href="">View My Listings</a></li>
					<li><a href="">Manage Profile (profile name)</a></li>
					<li><a href="">Create Name</a></li>
					<li><a href="">My Performance</a></li>
				</ul>
			</div>
			<!-- selling tools section end -->
			
			<!-- Feedback section start -->
			<div style="border: 1px solid #28d0c8;margin-top: 25px;border-radius: 3px;">
				<h6 style="background: #28d0c8;padding: 5px; margin-top: 0px;margin-bottom: 0px;color: white;">Feedbacks (Last 31 Days)</h6>
			<ul id="set_feedback">
				<li><a href=""><span style="background-color:#28d0c8" class="badge white-text">5</span>&nbsp;Positive</a></li>
				<li><a href=""><span style="background-color:#28d0c8" class="badge white-text">1</span>&nbsp;Negative</a></li>
			</ul>
			<hr>
			<ul id="set_recent_feedback">
				<li><a href="">one feedback</a></li>
				<li><a href="">one feedback</a></li>
				<li><a href="">one feedback</a></li>
				<li><a href="">one feedback</a></li>
				<li><a href="">one feedback</a></li>
			</ul>
			</div>
			<!-- Feedback section end -->
		</div>
		<div class="col l8 m8 s12" style="padding: 10px;">
			<div style="border: 1px solid #28d0c8;border-radius: 3px">
				<h6 style="background: #28d0c8; padding: 8px;margin: 0px;margin-bottom: 1px;color: white;">Sales</h6>
				<!-- sale section start -->
				<div class="row">
					<div class="col l3 m3 s16">
						<center>
						<h6 style="color: silver">Today</h6>
						<h5 style="margin-top: -4px; color: gray"><span class=" fa fa-inr"></span>25,000</h5>
						</center>
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>

					<div class="col l3 m3 s16">
						<center>
						<h6 style="color: silver">Last 7 Days</h6>
						<h5 style="margin-top: -4px; color: gray"><span class=" fa fa-inr"></span>25,000</h5>
						</center>
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>

					<div class="col l3 m3 s16">
						<center>
						<h6 style="color: silver">Last 31 Days</h6>
						<h5 style="margin-top: -4px; color: gray"><span class=" fa fa-inr"></span>25,000</h5>
						</center>
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>

					<div class="col l3 m3 s16">
						<center>
						<h6 style="color: silver">Last 90 Days</h6>
						<h5 style="margin-top: -4px;color: gray"><span class=" fa fa-inr"></span>25,000</h5>
						</center>
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>
				</div>
				<!-- sale section end -->
				<!-- sale bar section start -->
				<!-- <div class="row">
					<div class="col l3 m3 s6">
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>					

					<div class="col l3 m3 s6">
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>

					<div class="col l3 m3 s6">
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>

					<div class="col l3 m3 s6">
						<div class="progress" style="height: 10px;margin-top: 0px">
							<div class="determinate" style="width: 50%">
							</div>
						</div>
					</div>
				</div> -->
				<!--  sale bar section end -->
			</div>
			<!-- seller level section start -->
			<div class="col l6 m6 s12" style="margin-top: 28px;">
				<div style="border: 1px solid #28d0c8;border-radius: 3px">
					<h6 style="background: #28d0c8; padding: 5px;margin-top: 0px; margin-bottom: 0px;color: white;">Seller Level</h6>
					<ul id="seller_level">
						<li><a href="">Current Seller Level<span class="right">Above Standared</span></a></li>
						<li><a href="">Transaction (Last 12 Months)<span class="right">250</span></a></li>
						<li><a href="">Sales (Last 12 Month)<span class="right">25,000</span></a></li>
					</ul>
				</div>
			<!-- Account Summary section start -->
				<div style="border: 1px solid #28d0c8;margin-top: 29px;border-radius: 3px;line-height: 40px">
					<h6 style="background: #28d0c8; padding: 5px;margin-top: 0px; margin-bottom: 0px;color: white">Account Summary</h6>
					<h6 style="padding-left: 10px;font-size: 14px; color: gray"><b>Invoice</b></h6>
					<p style="padding-left: 10px; color: silver">Last Invoice&emsp; -&emsp;<span class="fa fa-inr"> 3,550</span><br>
					New Invoice&emsp;-&emsp;<span class="fa fa-inr"> 550</span></p>
					<hr>
					<h6 style="padding-left: 10px;font-size: 14px;color: gray"><b>Our Balance</b></h6>
					<p style="padding-left: 10px;color: silver">Balance&emsp;&emsp;&emsp;-&emsp; <span class="fa fa-inr"> 220</span><br></p>
				</div>
			</div>
			<!-- Account summary section end -->
			<!-- seller level section end -->

			<!-- Listing offers section start -->
			<div class="col l6 m6 s12" style="margin-top: 25px;font-size: 14px;margin-top: 28px;line-height: 20px">
				<div style="border: 1px solid #28d0c8;border-radius: 3px">
					<h6 style="background: #28d0c8; padding: 5px;margin-top: 0px; margin-bottom: 0px;color: white">Listings Offers</h6>
					<h6 style="padding-left: 10px;font-size: 14px;color: gray"><b>Fixed Price Listings</b></h6>
					<p style="padding-left: 10px;color: silver">Start Date - 20-5-2020<br>
					End Date - 25-6-2020</p>
					<h6 style="padding-left: 10px;font-size: 14px;color: silver">Used/Left : <a href="">250</a>/250</h6>
					<hr>
					<h6 style="padding-left: 10px;font-size: 14px;color: gray"><b>Fixed Price Listings</b></h6>
					<p style="padding-left: 10px;color: silver">Start Date - 20-5-2020<br>
					End Date - 25-6-2020</p>
					<h6 style="padding-left: 10px;font-size: 14px;color: silver">Used/Left : <a href="">250</a>/250</h6>
				</div>
			</div>
			<!-- Listings offers section end -->
		</div>
		<!--  -->
	</div>
	<!-- task and sales section end -->	

<!-- Body section end -->
<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
<!-- costum js file include -->
<script type="text/javascript">
	$(document).ready(function(){
		//dropdown script start
		$('.dropdown-trigger').dropdown({
			hover:true,
			coverTrigger:false
		});

	});
</script>

</body>
</html>