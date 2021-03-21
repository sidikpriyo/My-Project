<!DOCTYPE html>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
	<title>Online Shop | Seller Account</title>
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
		body{background: rgb(0,0,0,0.13);}
		#seller_username{width: 15%; border: 1px solid white; height: 30px; margin-left: 58%; box-shadow: none; font-size: 13px; padding-left: 2px; color: black; background: white;}
		#seller_password{width: 15%; border: 1px solid white; height: 30px; margin-left: 3px; box-shadow: none; font-size: 13px; padding-left: 2px; color: black; background: white;}
		button{height: 30px;line-height: 30px;}
		#company_name{width: 97.5%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 3px; height: 35px; margin-bottom: 25px;}
		#email{width: 48%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 2px; height: 35px; margin-bottom: 25px;}
		#password{width: 48%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 2px; height: 35px; margin-bottom: 25px;}
		#mobile_no{width: 48%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 2px; height: 35px; margin-bottom: 25px;}
		#pincode{width: 48%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 2px; height: 35px; margin-bottom: 25px;}
		#panno{width: 48%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 2px; height: 35px; margin-bottom: 15px;}
		#gstno{width: 48%;border: 1px solid silver; box-shadow: none; border-radius: 3px; padding-left: 2px; height: 35px; margin-bottom: 25px;}
		p{width: 50%;text-align: justify;}
		.box{width: 10%; height: 2px;background: blue;margin-top: 20px;margin-bottom: 20px;}

		#mobile_username,#mobile_password{box-shadow: none;border-bottom: 2px solid white;}
		#mobile_username + label,#mobile_password + label{color: #38b1a6;}

		/* media query section start*/
		@media only screen and (max-width: 800px){
			p{width: 100%;}
			#email{width: 100%;}
			#password{width: 100%;margin-left: -1px;}
			#mobile_no{width: 100%;}
			#picode{width: 100%;margin-left: -1px;}
			#panno{width: 100%;}
			#gstno{width: 100%;margin-left: -1px;}
		}
		 /*hide number input type arrow*/
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
    	/* display: none; <- Crashes Chrome on hover */
    	-webkit-appearance: none;
    	margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
		}
		input[type=number] {
    	-moz-appearance:textfield; /* Firefox */
		}

	</style>
</head>
<body>
<!-- body section start -->
	<!-- topbar section start -->
	<nav style="background-color: #38b1a6; box-shadow: none;">
		<div class="nav-wrapper">
			<a href="" class="brand-logo left">&nbsp;Seller Account</a>
			<?= form_open('Seller/Login'); ?>
			<input type="text" name="seller_username" id="seller_username" placeholder="&nbsp;Masukkan Username" class="hide-on-med-and-down" required>
			<input type="password" name="seller_password" id="seller_password" placeholder="&nbsp;Masukkan Password" class="hide-on-med-and-down" required>
			<button class="btn waves-effect waves-light hide-on-med-and-down" style="background: #28d0c8; height: 32px;line-height: 32px; margin-top: -6px;margin-left: 3px; border: 1px solid white; font-size: 11px;"><b>Login</b></button>
			<?= form_close(); ?>
		</div>
	</nav>
	<!-- topbar section end -->

	<!-- mobile screen login form start -->
	<div class="hide-on-large-only" style="padding: 15px;">
		<div class="input-field">
		<input type="text" name="" id="mobile_username">
		<label for="mobile_username">Masukkan Username</label>
		</div>
		<div class="input-field">
		<input type="password" name="" id="mobile_password">
		<label for="mobile">Masukkan Password</label>
	</div>
		<button type="submit" class="btn waves-effect waves-light" style="background: #28d0c8; border: 1px solid white;"><b>Login</b></button>
	</div>
	<!-- mobile screen login form end -->

	<!-- register section form start -->
	<div class="row">
		<div class="col l7 m7 s12" style="padding: 15px;">
			<h5 style="margin-top: 5%; margin-left: 20px"><b style="color: #38b1a6">Start Selling On My Shop</h5>
			<div class="box" style="background: white; margin-top: 0px; margin-left: 20px;width: 18%;"></div>
			<p class="col l9 m9 s12" style="color: #20504b; margin-left: 15px;">Ini adalah toko online CV Panca Karya Sakti. Hal terkait kebijakan dan privasi silahkan hubungi saya wkwkwk dan ini hanyalah halaman testimoni. Aku gak reti kudu nulis apa cuma tak tulis aja biar keliatan di tampilan supaya yang punya bisa liat. Coba saya tulis asal, karena ini nantinya berisisikan deskrpsi.</p>
			<br><p class="col l9 m9 s12" style="color: #20504b; margin-left: 15px;">Ini adalah toko online CV Panca Karya Sakti. Hal terkait kebijakan dan privasi silahkan hubungi saya wkwkwk dan ini hanyalah halaman testimoni. Aku gak reti kudu nulis apa cuma tak tulis aja biar keliatan di tampilan supaya yang punya bisa liat.</p>
			<br>
			<p class="col l8 m8 s12"><button type="submit" class="btn-large waves-light waves-effect" style="background: #28d0c8; margin-left: 20px"><b>Sell On My Shop</b></button></p><br><br><br><br>
		</div>
		<div class="col l4 m4 s12" style="padding: 15px; margin-top: 48px; background: #38b1a6;">
			<?= form_open("Seller/CreateAccount"); ?>
			<h6 class="center-align" style="margin-bottom: 20px; margin-top: 30px; color: white; font-size: 25px">Register Now</h6>
			<input type="text" name="company_name" id="company_name" placeholder="Company Name" style="background: white; font-size: 13px;" required>
			<input type="email" name="email" id="email" placeholder="E-Mail" style="background: white;font-size: 13px;" required>
			<input type="password" name="password" id="password" placeholder="Password" style="background: white;font-size: 13px;" required>
			<input type="number" name="mobile_no" id="mobile_no" placeholder="No.Hp" style="background: white;font-size: 13px;" required>
			<input type="number" name="pincode" id="pincode" placeholder="Pin Code" style="background: white;font-size: 13px;" required>
			<input type="number" name="panno" id="panno" placeholder="Pan No." style="background: white; font-size: 13px;" required>
			<input type="number" name="gstno" id="gstno" placeholder="GST No." style="background: white; font-size: 13px;" required>
			<div class="center-align">
			<button type="submit" class="btn waves-effect waves-light" style="background: #28d0c8; margin-bottom: 30px; border: 1px solid white; font-size: 12px" id="btn_submit"><b>Create Account</b></button>
			</div>
			<?= form_close(); ?>
			</b>
		</div>
	</div>

	<!-- register section form end -->

	<!-- footer section start -->
	<footer class="page-footer" style="background: #38b1a6; margin-top: 98px">      
            <div>
            &emsp;&emsp;© <?= date('Y'); ?> Copyright CV. Panca Karya Sakti
          </div>&nbsp;
        </footer>
	<!-- footers section end -->

<!-- body section end -->
<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>

<!-- costum js file include -->
<script type="text/javascript">
	$(document).ready(function(){
		//validasi email
	function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
    }
    $("#email").keyup(function () {
        if (!ValidateEmail($("#email").val())) {
          $('#btn_submit').prop('disabled', true)
        }
        else {
         $('#btn_submit').prop('disabled', false)
        }
    });

	// mobile no validation start
	$('#mobile_no').keyup(function(){
		var mobile_no = $('#mobile_no').val();
		var mobile_no_len = $('#mobile_no').val().length;
		if (mobile_no > 0) {
			if (mobile_no_len >= 11) {
				$('#btn_submit').prop('disabled',false);
			}
			else{
				$('#btn_submit').prop('disabled',true);
			}
		}
		else{
			$('#btn_submit').prop('disabled',true);
		}
	});
	});
</script>

</body>
</html>