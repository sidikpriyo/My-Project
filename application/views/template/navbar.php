	<!-- custom css file section -->
	<style type="text/css">
		#all_categori{width: 25% !important; height: 650px; font-family: Monospace;}
		#all_categori li a{font-size: 14px;}
		#all_categori li{margin-bottom: 10px; line-height: 20px;}
		#all_categori a:hover{background: #ffee58; font-size: 16px;}

		#jenis_content {margin: 10px}
		#set_content {width: 30%; height: 200px;margin-left: 25px;margin-top: 20px; padding-left: 35px; padding-right: 35px}
		#set_content a {color: black;}
		#set_content h6{color: black; font-family: monospace; font-weight: bold; font-size: 17px}
		#set_content a:hover{ background: #424242;}

		#set_menu li a{font-size: 18px;font-family:Comic Sans MS}
		#set_menu a:hover{color: #ffee58;}

		#menu_perempuan, #menu_laki, #menu_anak{width: 70% !important;left: 16% !important;}

		#set_footer_link li a{color: black;line-height: 35px}
		#set_footer_link li a:hover{color: black;text-decoration: underline;}

		#set_social_icon li{display: inline;}
		#set_social_icon li a{color: black; padding: 15px 10px; border: 2px solid black;}

		#set_right_menu li{height: 20px}
		#set_right_menu a:hover{color: #ffee58}

		#menu_bantuan a{color: #424242; height: 50px; line-height: 50px; margin-bottom: 20px; font-family: monospace; font-size: 16px; margin-left: 10px}
		#menu_bantuan p{color: #424242; height: 10px; line-height: 30px; margin-bottom: 0px; font-family: monospace; font-size: 16px; margin-left: 10px;}
		#menu_bantuan a:hover{background: none; color: blue; font-size: 18px}
		#menu_bantuan img{width: 50px; height: 50px; float: left;}

		#costum_bantuan h4{color: black; font-size: 20px; font-family: monospace; font-weight: bold;}
		#costum_bantuan h5{color: blue; font-size:18px; font-family: monospace; margin-top: 40px; margin-left: 15px}
		#costum_bantuan p{color: black; font-size:15px; font-family: monospace;line-height: 20px; text-align: justify;}


		#set_search{width: 50%; border:1px solid white; box-shadow: none;margin-left: 20%;height: 42px;padding-left: 2px;background: white;border-radius: 20px;}
		#set_search_btn{height: 44px;line-height: 40%;margin-top: -4px;box-shadow: none;width: 4%;margin-left: 2px;border-radius: 30px;background: #ffee58;}

		#set_mobile_search:{border: 1px solid white; background: white;color: black;border-radius: 3px;box-shadow: none;padding-left: 3px;margin-left: -3px;}
		form{display: inline;}

		#mobile_menu_right li{display: inline;}
		#mobile_menu_right li a{color: #fee12b; padding-bottom: 0px;padding-top: 25px;height: 0px}

		#footer{color: #ffee58}

		.holder::-webkit-input-placeholder{color: gray; font-size: 14px;}

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

	<!-- navbar section start -->
	<div class="navbar-fixed hide-on-med-and-down">
	<nav style="background: #424242; height: 80px;">
	<div class="nav-wraper" style="line-height: 80px">

	<ul class="left hide-on-med-and-down" id="set_right_menu" style="margin-right: 30px">
		<li><a href="#" class="dropdown-trigger" data-target="all_categori"><i class="large material-icons" style="margin-top: 15px;">list</i></a></li>
		<!-- dropdown -->
		<ul class="dropdown-content" id="all_categori">
			<div class="row" align="center" style="padding: 2px; margin-top: 30px">
				<h6 style="color: black; font-size: 20px"><u><b>Kategori</b></u><h6>
			</div>
			<div class="content" style="margin-top: 50px">
				<li><a href="http://localhost/pancakarya/Baju" style="color: black">&emsp;&emsp;&nbsp;&nbsp;Baju</a></li>
				<li><a href="http://localhost/pancakarya/Celana" style="color: black">&emsp;&emsp;&nbsp;&nbsp;Celana</a></li>
				<li><a href="http://localhost/pancakarya/Tas" style="color: black">&emsp;&emsp;&nbsp;&nbsp;Tas</a></li>
				<li><a href="http://localhost/pancakarya/Sepatu" style="color: black">&emsp;&emsp;&nbsp;&nbsp;Sepatu</a></li>
				<li><a href="http://localhost/pancakarya/Sandal" style="color: black">&emsp;&emsp;&nbsp;&nbsp;Sandal</a></li>
				<li><a href="http://localhost/pancakarya/Fashion" style="color: black">&emsp;&emsp;&nbsp;&nbsp;Fashion</a></li>
			</div>
		</ul>
	</ul>


	<a style="color: #ffee58; margin-left: 30px" href="http://localhost/pancakarya/Home" class="brand-logo left">Ed's Shop</a>
	
	<!-- right menu section start -->
	<ul class="right hide-on-med-and-down" id="set_right_menu">

	<!-- Modal Trigger -->
  	<li style="margin-right: 25px"><a class="waves-effect waves-light modal-trigger tooltipped" data-position="bottom" data-tooltip="Pencarian" href="#modal1"><i class="material-icons">search</i></a></li>

	  <!-- Modal Structure -->
	  <div id="modal1" class="modal" style="width: 90%; height: 28%">
	    <div class="modal-content">
	    	<?= form_open(); ?>
			    <form class="col s12">
			      <div class="row" style="padding-left: 20px">
			      	<h6 style="color: black;font-weight: bold; margin-bottom: 12px;margin-left: 0px ;font-family: monospace; font-size: 20px;"><span class="fa fa-search"></span>&emsp;<u>Pencarian</u></h6>
			        <div class="input-field col l11" style="padding-left: 25px">
			          <input placeholder="" id="search" type="text" class="validate" style="border-bottom: 1px solid #424242">
					  <label style="margin-left: 15px" for="search" style="color: black; font-weight: bold;"><b>Cari Produk</b></label>
			        </div>
			        <div class="col l1">
			        	<button type="submit" class="btn-floating btn-large waves-effect waves-light" style="margin-left: 20px; background: #424242">
			        		<i class="material-icons" style="color: white">search</i>
			        	</button>
			        </div>
			    </form>
			    <?= form_close(); ?>
			  </div>
		</div>

	  </div>

		<li style="margin-right: 25px"><a href="#" class="tooltipped" data-position="bottom" data-tooltip="Keranjang"><i class="large material-icons" style="margin-top: 15px;">shopping_cart</i></a></li>
		
		<li style="margin-right: 25px"><a class="waves-effect waves-light modal-trigger tooltipped" data-position="bottom" data-tooltip="Bantuan" href="#modal_bantuan"><i class="material-icons">help</i></a></li>
		<!-- Modal Structure -->
	  
	    <div id="modal_bantuan" class="modal modal-fixed-footer" style="width: 35%; height: 100%; margin-top: 10px">
		    <div class="modal-content">
		      
		      	<div class="row" align="center" style="margin-top: -10px;">
		      	<h4 style="font-size: 20px; color: black; font-family: monospace; font-weight: bold;"><u>Bantuan</u></h4>
		      	</div>
		      	<div class="row" id="menu_bantuan">
		      		<a href="#bantuan_akun" class="modal-trigger modal-close" style="margin-top: -15px"><img src="<?=base_url('assets/icon/akun.png'); ?>">&emsp;&emsp;Akun Saya</a>
		      		<a href="#bantuan_pesanan" class="modal-trigger modal-close"><img style="" src="<?=base_url('assets/icon/pesanan.png');?>">&emsp;&emsp;Pesanan Saya</a>
		      		<a href="#bantuan_pembayaran" class="modal-trigger modal-close"><img src="<?=base_url('assets/icon/pembayaran.png');?>">&emsp;&emsp;Pembayaran</a>
		      		<a href="#bantuan_pengiriman" class="modal-trigger modal-close"><img src="<?=base_url('assets/icon/pengiriman.png');?>">&emsp;&emsp;Pengiriman</a>
		      		<a href="#bantuan_pengembalian" class="modal-trigger modal-close"><img src="<?=base_url('assets/icon/pengembalian.png');?>">&emsp;Pengembalian Dana</a>
		      		<a href="#bantuan_keamanan" class="modal-trigger modal-close" style="margin-bottom: 0px"><img src="<?=base_url('assets/icon/keamanan.png');?>">&emsp;&emsp;Keamanan</a>
		      		<p style="margin-top: 30px" align="center"><b>Tidak Menemukan Jawaban?</b> Hubungi Kontak Kami</p>
		      		<div class="row" id="menu_bantuan">
		      			<div class="col l2">
		      				<p style="font-size: 18px"><span class="fa fa-phone">&nbsp;Telepon</span></p>
		      				<p style="font-size: 18px"><span class="fa fa-whatsapp">&nbsp;Whatsapp</span></p>
		      			</div>
		      			<div class="col l10">
		      				<p style="font-size: 18px">&emsp;&emsp;&emsp;: (0293)367788</p>
		      				<p style="font-size: 18px">&emsp;&emsp;&emsp;: 085601434667</p>
		      			</div>

		      		</div>
		      		
		      	</div>

		    </div>
		    <div class="modal-footer" style="background: silver;">
		      <a href="#!" class="waves-effect waves-green btn-small modal-close" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		 </div>

		 <!-- struktur bantuan_akun -->
		  <div id="bantuan_akun" class="modal modal-fixed-footer" style="width: 50%;height: 100%; margin-top: 10px">
		    <div class="modal-content" id="costum_bantuan">
		      <img style="width: 50px;height: 50px; float: left; margin-top: -15px; right: 70%" src="<?=base_url('assets/icon/akun.png');?>">
		      <h4>&emsp;&emsp;Pertanyaan Mengenai Akun</h4>

		    <div class="row">
		      <h5>Bagaimana cara mendaftarkan akun pada Ed's Shop ini?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Anda dapat mengunjungi halaman utama website di <span style="color: blue">nama-situs.com</span></p>
		      		<p>Pada pojok kanan atas ada tombol <b>SIGN IN</b> kemudian pilih tombol <b>Daftar</b> dan isikan data pada kolom yang disediakan. Pastikan anda mengisi data dengan benar</p>
		      	</div>
		      </div>
		    </div>

		    <div class="row">
		      <h5>Bagaimana cara mengubah kata sandi?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      		<p><br>3.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Masuk pada akun anda</p>
		      		<p>Pada kanan atas terdapat username anda. Klik username-> pengaturan akun-> ganti sandi</p>
		      		<p>Masukkan Kata sandi lama dan kata sandi baru anda lalu pilih simpan</p>
		      	</div>		 
		      </div>
		  	</div>

		  	<div class="row">
		      <h5>Bagaimana cara mengubah informasi akun?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      		<p><br>3.</p>
		      		<p>4.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Masuk pada akun anda</p>
		      		<p>Pada kanan atas terdapat username anda. Klik username-> pengaturan akun-> informasi akun</p>
		      		<p>Pilih informasi mengenai akun anda yang akan dirubah</p>
		      		<p>Simpan perubahan jika sudah selesai</p>
		      	</div>		 
		      </div>
		  	</div>

		  	<div class="row">
		      <h5>Kenapa saya tidak bisa login?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      		<p>3.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Periksa apakah email dan kata sandi pada akun anda sudah benar</p>
		      		<p>Periksa capslok pada keyboard apakah aktif atau tidak</p>
		      		<p>Pastikan email yang digunakan sama dengan email pada akun nama-situs.com</p>
		      	</div>		 
		      </div>
		  	</div>

		    </div>
		   <div class="modal-footer" style="background: silver;">
		      <a href="#modal_bantuan" class="waves-effect waves-light btn-small modal-trigger modal-close" style="background: blue;margin-bottom: 40px">Kembali</a>
		      <a href="#!" class="modal-close waves-effect waves-green btn-small" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		  </div>

		  <!-- struktur bantuan_pesanan -->
		  <div id="bantuan_pesanan" class="modal modal-fixed-footer" style="width: 50%;height: 100%; margin-top: 10px">
		    <div class="modal-content" id="costum_bantuan">
		      <img style="width: 50px;height: 50px; float: left; margin-top: -15px; right: 70%" src="<?=base_url('assets/icon/pesanan.png');?>">
		      <h4 >&emsp;&emsp;Pertanyaan Mengenai Pemesanan</h4>

		      <div class="row">
		      <h5>Bagaimana cara mendaftarkan akun pada Ed's Shop ini?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Anda dapat mengunjungi halaman utama website di <span style="color: blue">nama-situs.com</span></p>
		      		<p>Pada pojok kanan atas ada tombol <b>SIGN IN</b> kemudian pilih tombol <b>Daftar</b> dan isikan data pada kolom yang disediakan. Pastikan anda mengisi data dengan benar</p>
		      	</div>
		      </div>
		    </div>

		    <div class="row">
		      <h5>Bagaimana cara mengubah kata sandi?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      		<p><br>3.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Masuk pada akun anda</p>
		      		<p>Pada kanan atas terdapat username anda. Klik username-> pengaturan akun-> ganti sandi</p>
		      		<p>Masukkan Kata sandi lama dan kata sandi baru anda lalu pilih simpan</p>
		      	</div>		 
		      </div>
		  	</div>

		  	<div class="row">
		      <h5>Bagaimana cara mengubah informasi akun?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      		<p><br>3.</p>
		      		<p>4.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Masuk pada akun anda</p>
		      		<p>Pada kanan atas terdapat username anda. Klik username-> pengaturan akun-> informasi akun</p>
		      		<p>Pilih informasi mengenai akun anda yang akan dirubah</p>
		      		<p>Simpan perubahan jika sudah selesai</p>
		      	</div>		 
		      </div>
		  	</div>

		  	<div class="row">
		      <h5>Kenapa saya tidak bisa login?</h5>
		      <div class="content" style="margin-left: 20px">
		      	<div class="col l1" style="width: 20px">
		      		<p>1.</p>
		      		<p>2.</p>
		      		<p>3.</p>
		      	</div>
		      	<div class="col l11">
		      		<p>Periksa apakah email dan kata sandi pada akun anda sudah benar</p>
		      		<p>Periksa capslok pada keyboard apakah aktif atau tidak</p>
		      		<p>Pastikan email yang digunakan sama dengan email pada akun nama-situs.com</p>
		      	</div>		 
		      </div>
		  	</div>
		      

		    </div>
		   <div class="modal-footer" style="background: silver;">
		      <a href="#modal_bantuan" class="waves-effect waves-light btn-small modal-trigger modal-close" style="background: blue;margin-bottom: 40px">Kembali</a>
		      <a href="#!" class="modal-close waves-effect waves-green btn-small" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		  </div>

		<!-- struktur bantuan_pembayaran -->
		  <div id="bantuan_pembayaran" class="modal modal-fixed-footer" style="width: 50%;height: 100%; margin-top: 10px">
		    <div class="modal-content" id="costum_bantuan">
		      <img style="width: 50px;height: 50px; float: left; margin-top: -15px; right: 70%" src="<?=base_url('assets/icon/pembayaran.png');?>">
		      <h4 >&emsp;&emsp;<u>Pertanyaan Mengenai Pembayaran</u></h4>
		      

		    </div>
		   <div class="modal-footer" style="background: silver;">
		      <a href="#modal_bantuan" class="waves-effect waves-light btn-small modal-trigger modal-close" style="background: blue;margin-bottom: 40px">Kembali</a>
		      <a href="#!" class="modal-close waves-effect waves-green btn-small" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		  </div>

		  <!-- struktur bantuan_pengiriman -->
		  <div id="bantuan_pengiriman" class="modal modal-fixed-footer" style="width: 50%;height: 100%; margin-top: 10px">
		    <div class="modal-content" id="costum_bantuan">
		      <img style="width: 50px;height: 50px; float: left; margin-top: -15px; right: 70%" src="<?=base_url('assets/icon/pengiriman.png');?>">
		      <h4 >&emsp;&emsp;<u>Pertanyaan Mengenai Pengiriman</u></h4>
		      

		    </div>
		   <div class="modal-footer" style="background: silver;">
		      <a href="#modal_bantuan" class="waves-effect waves-light btn-small modal-trigger modal-close" style="background: blue;margin-bottom: 40px">Kembali</a>
		      <a href="#!" class="modal-close waves-effect waves-green btn-small" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		  </div>

		  <!-- struktur bantuan_pengembalian dana -->
		  <div id="bantuan_pengembalian" class="modal modal-fixed-footer" style="width: 50%;height: 100%; margin-top: 10px">
		    <div class="modal-content" id="costum_bantuan">
		      <img style="width: 50px;height: 50px; float: left; margin-top: -15px; right: 70%" src="<?=base_url('assets/icon/pengembalian.png');?>">
		      <h4 >&emsp;&emsp;<u>Pertanyaan Mengenai Pengembalian Dana</u></h4>
		      

		    </div>
		   <div class="modal-footer" style="background: silver;">
		      <a href="#modal_bantuan" class="waves-effect waves-light btn-small modal-trigger modal-close" style="background: blue;margin-bottom: 40px">Kembali</a>
		      <a href="#!" class="modal-close waves-effect waves-green btn-small" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		  </div>

		  <!-- struktur bantuan_keamanan -->
		  <div id="bantuan_keamanan" class="modal modal-fixed-footer" style="width: 50%;height: 100%; margin-top: 10px">
		    <div class="modal-content" id="costum_bantuan">
		      <img style="width: 50px;height: 50px; float: left; margin-top: -15px; right: 70%" src="<?=base_url('assets/icon/keamanan.png');?>">
		      <h4 >&emsp;&emsp;<u>Pertanyaan Mengenai Keamanan</u></h4>
		      

		    </div>

		   <div class="modal-footer" style="background: silver;">
		      <a href="#modal_bantuan" class="waves-effect waves-light btn-small modal-trigger modal-close" style="background: blue;margin-bottom: 40px">Kembali</a>
		      <a href="#!" class="modal-close waves-effect waves-green btn-small" style="background: red;margin-bottom: 40px">Tutup</a>
		    </div>
		  </div>



		<!-- login with modal -->
		<li style="margin-right: 25px"><a class="btn waves-effect waves-black modal-trigger tooltipped" data-position="bottom" data-tooltip="Masuk/Daftar Akun" href="#modal_login" style="background: #ffee58; color: black; font-family: tahoma"><b>Sign In</b></a></li>


		<!-- Modal Structure -->
	  <div id="modal_login" class="modal" style="width: 40%; height: 60%; margin-top: 10px">
	    <div class="modal-content">
	    	<?= form_open("Home/Login"); ?>
			  
					<div class="row" style="margin-top: 30px">
			    		<h5 align="center" style="color: black;font-family: monospace;"><b>Masuk Akun</b></h5>
			    	</div>			    	

			    	 <div class="row" style="margin-top: -15px">
					  
					      <div class="row">
					        <div class="input-field col l11">
					        	<i class="material-icons prefix" style="color: #424242; width: 200px;height: 100px">account_circle</i>
					          <input id="icon_username" name="email" type="text" class="validate" required>
					          <label for="icon_username">E-mail</label>
					        </div>
					      </div>
					    
					   
					      <div class="row"style="margin-top: -15px">
					        <div class="input-field col l11">
					        	<i class="material-icons prefix" style="color: #424242; width: 200px;height: 100px">lock_outline</i>
					          <input id="icon_password" name="password" type="password" class="validate" required>
					          <label for="icon_password">Password</label>
					        </div>
					      </div>
					    
					    </div>
					    <center><button type="submit" class="waves-effect waves-light btn-small" style="background: #4caf50;font-size: 15px; width: 60%; margin-top: -90px" id="btn_submit" class="modal modal-close">Login</button>
  						</center>
			    <?= form_close(); ?>
			    <p align="center" style="margin-top: -50px; color: black; background: gray; height: 0px; font-family: monospace;">Anda Belum Terdaftar?<a href="#modal_daftar" class="waves-effect waves-light btn-small modal-trigger modal-close" style="font-size: 12px; background: #424242">Daftar</a></p>

			  </div>

		</div>
		

		<!-- Modal Structure Daftar-->
	  <div id="modal_daftar" class="modal" style="width: 50%; height: auto; margin-top: 10px">
	    <div class="modal-content">
	    	<?= form_open('Home/Tambah_user'); ?>

					<div class="row" style="margin-top: 0px; margin-bottom: 50px">
			    		<h5 align="center" style="color: black;font-family: monospace;"><b>Registrasi</b></h5>
			    	</div>			    	
			    	<form class="col s12">
			    	 <div class="row" style="margin-top: -15px">

					        <div class="input-field col s6">
					          <input placeholder="" id="nama_user" type="text" name="nama_user" class="validate" required>
					          <label for="nama_user" style="color: #424242;margin-top: -10px">Nama Lengkap</label>
					        </div>

					        <div class="input-field col s6">
					         <input type="email" name="email" id="email" placeholder="" required>
					         <label for="email" style="color: #424242;margin-top: -10px">E-Mail</label>
					        </div>
					   
					        <div class="input-field col s6">
					          <input placeholder="" id="tgl_lahir" name="tgl_lahir" type="date" class="validate" required>
					          <label for="tgl_lahir" style="color: #424242;margin-top: -10px">Tanggal Lahir</label>
					        </div>
	       
						     <div class="input-field col s6" style="margin-top: 20px">
						      <select id="jk" name="jk" required>
							    <option value="" disabled selected>Pilih Jenis Kelamin</option>
							    <option value="">Perempuan</option>
							    <option value="">Laki-Laki</option>
							  </select>
						     </div>
						  
						  <div class="row">
					        <div class="input-field col s12" style="margin-top: 20px">
					          <input placeholder="" id="alamat" name="alamat" type="text" class="validate" required>
					          <label for="alamat" style="color: #424242;margin-top: -10px">Alamat Lengkap</label>
					        </div>
					      </div>

					        <div class="input-field col s6">
					          <input type="number" name="no_telp" id="no_telp" placeholder="" required>
					          <label style="color: #424242;margin-top: -10px">No Hp</label>
					        </div>
				    		

					        <div class="input-field col s6">
					          <input placeholder="" name="password" id="password" type="password" class="validate" required>
					          <label for="password" style="color: #424242;margin-top: -10px">Buat Kata Sandi</label>
					        </div>
					   
					        
					        <center><button type="submit" class="waves-effect waves-light btn-small" style="background: #4caf50;font-size: 15px; width: 60%; margin-top: -10px" id="btn_register" class="modal modal-close">Create Acoount</button>
					  </div>
					  </form>				   
			    <?= form_close(); ?>
			    <p align="center" style="margin-top: -30px; color: black; background: gray; height: 0px; font-family: monospace; margin-bottom: 50px">Sudah Memiliki Akun?<a href="#modal_login" class="waves-effect waves-light btn-small modal-trigger modal-close" style="font-size: 12px; background: #424242">Login</a></p>		    
			  </div>
		</div>
	<!--right menu section end  -->
	</ul>

	<ul class="left hide-on-med-and-down" id="set_menu" style="margin-left: 20%">
		<li style=""><a href="http://localhost/pancakarya/Home"><span class="fa fa-home"></span>&nbsp;&nbsp;Home</a></li>

		<li><a href="#!" style="font-size: 18px;font-family:Comic Sans MS;"class="dropdown-trigger" data-target="menu_perempuan" style="background: pink"></span>Perempuan</a></li>
		<!-- dropdown -->
		<ul class="dropdown-content" id="menu_perempuan" style="width: 200px">
			<div class="row"><img style="width: 70px; height: 70px; float: left; margin-left: 20px;margin-top: -20px" src="<?= base_url('assets/icon/perempuan.png');?>">
				 <div class="container" style="margin-bottom: 40px;margin-top: 35px;margin-left: 11%"><h6 style="color: black; font-size: 23px; margin-left: -10px"><b><u>Perempuan</u></b></h6></div>
					<!-- <h6 style="color: black; font-size: 23px"><b><u>Perempuan</u></b></h6> -->

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/kemeja.png');?>">
					<h6>&emsp;Baju</h6>
					<a style="line-height: 25px;font-size: 14px; margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Baju/bajuPerempuan" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/celana.png');?>">
					<h6>&emsp;Celana</h6>
					<a style="line-height: 25px;font-size: 14px; margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Celana/celanaPerempuan" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 38px;height: 38px;float: left;" src="<?= base_url('assets/icon/tas.png');?>">
					<h6>&emsp;Tas</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Tas/tasPerempuan" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/sepatu.png');?>">
					<h6>&emsp;Sepatu</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Sepatu/sepatuPerempuan" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 36px;height: 36px;float: left;" src="<?= base_url('assets/icon/sandal.png');?>">
					<h6>&emsp;Sandal</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Sandal/sandalPerempuan" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 36px;height: 36px;float: left;" src="<?= base_url('assets/icon/jam.png');?>">
					<h6>&emsp;Fashion</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Fashion/fashionPerempuan" class="blue-text">Tampilkan Semua</a>
				</div>
			</div>
		</ul>


		<li><a href="#" style="font-size: 18px;font-family:Comic Sans MS"class="dropdown-trigger" data-target="menu_laki" style="background: pink"></span>Laki-Laki</a></li>
		<!-- dropdown -->
		<ul class="dropdown-content" id="menu_laki" style="width: 200px">
			<div class="row"><img style="width: 70px; height: 70px; float: left; margin-left: 20px;margin-top: -20px" src="<?= base_url('assets/icon/laki.png');?>">
				 <div class="container" style="margin-bottom: 40px;margin-top: 35px;margin-left: 11%"><h6 style="color: black; font-size: 23px; margin-left: -10px"><b><u>Laki-Laki</u></b></h6></div>
					<!-- <h6 style="color: black; font-size: 23px"><b><u>Perempuan</u></b></h6> -->

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/kemeja.png');?>">
					<h6>&emsp;Baju</h6>
					<a style="line-height: 25px;font-size: 14px; margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Baju/bajuLaki" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/celana.png');?>">
					<h6>&emsp;Celana</h6>
					<a style="line-height: 25px;font-size: 14px; margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Celana/celanaLaki" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 38px;height: 38px;float: left;" src="<?= base_url('assets/icon/tas.png');?>">
					<h6>&emsp;Tas</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Tas/tasLaki" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/sepatu.png');?>">
					<h6>&emsp;Sepatu</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Sepatu/sepatuLaki" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 36px;height: 36px;float: left;" src="<?= base_url('assets/icon/sandal.png');?>">
					<h6>&emsp;Sandal</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Sandal/sandalLaki" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 36px;height: 36px;float: left;" src="<?= base_url('assets/icon/jam.png');?>">
					<h6>&emsp;Fashion</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Fashion/fashionLaki" class="blue-text">Tampilkan Semua</a>
				</div>
			</div>
		</ul>


		<li><a href="#" style="font-size: 18px;font-family:Comic Sans MS"class="dropdown-trigger" data-target="menu_anak" style="background: pink"></span>Anak</a></li>
		<!-- dropdown -->
		<ul class="dropdown-content" id="menu_anak" style="width: 200px">
			<div class="row"><img style="width: 70px; height: 70px; float: left; margin-left: 20px;margin-top: -20px" src="<?= base_url('assets/icon/anak.png');?>">
				 <div class="container" style="margin-bottom: 40px;margin-top: 35px;margin-left: 11%"><h6 style="color: black; font-size: 23px; margin-left: -10px"><b><u>Anak</u></b></h6></div>
					<!-- <h6 style="color: black; font-size: 23px"><b><u>Perempuan</u></b></h6> -->

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/kemeja.png');?>">
					<h6>&emsp;Baju</h6>
					<a style="line-height: 25px;font-size: 14px; margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Baju/bajuAnak" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/celana.png');?>">
					<h6>&emsp;Celana</h6>
					<a style="line-height: 25px;font-size: 14px; margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Celana/celanaAnak" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content" style="margin-top: 0px">
					<img style="width: 38px;height: 38px;float: left;" src="<?= base_url('assets/icon/tas.png');?>">
					<h6>&emsp;Tas</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Tas/tasAnak" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 40px;height: 40px;float: left;" src="<?= base_url('assets/icon/sepatu.png');?>">
					<h6>&emsp;Sepatu</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Sepatu/sepatuAnak" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 36px;height: 36px;float: left;" src="<?= base_url('assets/icon/sandal.png');?>">
					<h6>&emsp;Sandal</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Sandal/sandalAnak" class="blue-text">Tampilkan Semua</a>
				</div>

				<div class="col" id="set_content">
					<img style="width: 36px;height: 36px;float: left;" src="<?= base_url('assets/icon/jam.png');?>">
					<h6>&emsp;Fashion</h6>
					<a style="line-height: 25px;font-size: 14px;margin-top: 15px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="">hai</a>
					<a style="line-height: 25px;font-size: 14px" href="http://localhost/pancakarya/Fashion/fashionAnak" class="blue-text">Tampilkan Semua</a>
				</div>
			</div>
		</ul>
	<!--right menu section end  -->
	</ul>
	</div>
	</nav>
</div>
	<!-- navbar section end -->

	<!-- nav mobile -->
	<nav style="background: black; height: 100px;" class="hide-on-large-only">
	<div class="nav-wraper" style="line-height: 100px">
	<a style="color: #fee12b" href="http://localhost/pancakarya/Home" class="brand-logo left">Logo Toko</a>



	<!-- menu button section start -->
	<a href="#!" class="sidenav-trigger right" data-target="mobile_menu"><i style="color: #fee12b" class="material-icons">menu</i></a>

	<ul class="right hide-on-large-only" id="mobile_menu_right">
		<li><a href="http://localhost/pancakarya/Daftar"><span class="fa fa-sign-in"></span>&nbsp;Daftar</a></li>
		<li><a href="http://localhost/pancakarya/Login"><span class="fa fa-sign-in"></span>&nbsp;Masuk</a></li>
	</ul>
	<!-- menu buttons section end -->

	<!--menu mobile section start-->
	<ul class="sidenav" id="mobile_menu">
		<li><a style="background: black; color: #d4cc5b" href="#!" class="center-align">Kategori Produk</a></li>
		<li><a href="<?= base_url('index.php/Home/mBajuMenu'); ?>">Baju</a></li>
		<li><a href="<?= base_url('index.php/Home/mCelanaMenu'); ?>">Celana</a></li>
		<li><a href="<?= base_url('index.php/Home/mTasMenu'); ?>">Tas</a></li>
		<li><a href="<?= base_url('index.php/Home/mSepatuMenu'); ?>">Sepatu</a></li>
		<li><a href="<?= base_url('index.php/Home/mFashionMenu'); ?>">Fashion</a></li>
	</ul>	
	<!--menu mobile section end-->
	</div>
	</nav>
