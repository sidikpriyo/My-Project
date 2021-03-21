<!DOCTYPE html>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
	<title>Listing Baju Perempuan</title>
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
	body {padding: 10px;background: rgb(0,0,0,0.05);}
	select{display: block;border: 1px solid rgb(0,0,0,0.2);}
	#judul_baju{border: 1px solid silver;box-shadow: none;padding-left: 5px;width: 99%;border-radius: 3px}
	#judul_baju:focus,#jumlah_stok:focus,#kategori_baju:focus{border: 1px solid black}
	#jumlah_stok{border: 1px solid silver;box-shadow: none;padding-left: 5px;width: 99%;border-radius: 3px}
	#kategori_baju{border: 1px solid silver;outline: none;height: 47px; border-radius: 3px}
	[type="radio"]:checked + span:after, [type="radio"].with-gap:checked + span:before, [type="radio"].with-gap:checked + span:after {background: black}
	[type="radio"]:checked + span:after, [type="radio"].with-gap:checked + span:before, [type="radio"].with-gap:checked + span:after {border: 2px solid gray}
	</style>
</head>
<body>
<!-- body section start -->
<div class="row">
	<div class="col l8 m8 s12">
		<div style="border: 1px solid rgb(0,0,0,0.2); padding: 10px; background: white; border-radius: 3px">
			<h6>General Details</h6>
			<br>
			<div id="first_section">
				<h6 style="font-size: 14px; color: silver">Judul Baju</h6>
				<input type="text" name="judul_baju" id="judul_baju" maxlength="80" minlength="10">
				<table class="table">
					<tr style="border-bottom: none">
					<td>
				<h6 style=" font-size: 14px;color: silver">Kategori baju</h6>
				<select name="kategori_baju" id="kategori_baju">
				<option disabled selected>Pilih Kategori Baju</option>
				<option>Kaos</option>
				<option>Kemeja</option>
				<option>Batik</option>
				<option>Jas</option>
				<option>Gamis</option>
			</select>
				</td>
				<td>
					<h6 style="font-size: 14px; color: silver; margin-top: 18px">Jumlah Stok</h6>
					<input type="text" name="jumlah_stok" id="jumlah_stok">
				</td>
				</tr>
			</table>
				<table class="table">
				<tr style="border-bottom: none"><h6 style="font-size: 14px;color: silver">Warna</h6>
				<td>
				
				<p>
					<label>
					<input type="radio" name="warna" value="putih">
					<span>Putih</span>	
					</label>
				</p>
				</td>
				<td>
					<h6 style="font-size: 14px;color: silver"></h6>
				<p>
					<label>
					<input type="radio" name="warna" value="hitam">
					<span>Hitam</span>	
					</label>
				</p>
			</td>
			</tr>
	</table>
	<table class="table">
		<h6 style="font-size: 14px;color: silver">Ukuran</h6>
				<tr style="border-bottom: none">
				<td>
					<h6 style="font-size: 14px"></h6>
				<p>
					<label>
					<input type="radio" name="ukuran" value="supersmall">
					<span>SS</span>	
					</label>
				</p>
				</td>
				<td>
				<p>
					<label>
					<input type="radio" name="ukuran" value="Small">
					<span>S</span>	
					</label>
				</p>
				</td>
				<td>
					<h6 style="font-size: 14px"></h6>
				<p>
					<label>
					<input type="radio" name="ukuran" value="Medium">
					<span>M</span>	
					</label>
				</p>
				</td>
				</tr>
				<tr style="border-bottom: none">
				<td>
				<h6 style="font-size: 14px"></h6>
				<p>
					<label>
					<input type="radio" name="ukuran" value="Large">
					<span>L</span>	
					</label>
				</p>
				</td>
				<td>
					<h6 style="font-size: 14px"></h6>
				<p>
					<label>
					<input type="radio" name="ukuran" value="ExtraLarge">
					<span>XL</span>	
					</label>
				</p>
				</td>
				<td>
					<h6 style="font-size: 14px"></h6>
				<p>
					<label>
					<input type="radio" name="ukuran" value="ExtraExtraLarge">
					<span>XXL</span>	
					</label>
				</p>
				</td>
				</tr>
		</table>
			</div>
		</div>
	</div>
	<div class="col l4 m4 s12">
	<div style="border: 1px solid silver"><br></div>
</div>
</div>

<!-- body section end -->
<!-- jquery js file include -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
<!--materialixe js file include  -->
<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
</body>
</html>