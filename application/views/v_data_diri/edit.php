<div class="content-wrapper">
	<section class="content">
		<?php foreach($data_diri as $dt) { ?>
		<form action="<?php echo base_url().'index.php/data_diri/update';?>" 
		 method="post">


		<div class="form-group">
			<label>STATUS</label>
			<input type="hidden" name="no_induk" class="form-control"
			value="<?php echo $dt->no_induk ?>">
			<select class="form-control" name="id_status" value="
			<?php echo $dt->id_status ?>">
			<option value="1">Pengurus</option>
			<option value="2">Nasabah</option>
			<!-- <option>3</option> -->	
			</select>
			</div>
		<div class="form-group">
			<label>NAMA DATA DIRI</label>
			<input type="text" name="nama" class="form-control"
			value="<?php echo $dt->nama ?>">
		</div>
		<div class="form-group">
			<label>ALAMAT</label>
			<input type="text" name="alamat" class="form-control"
			value="<?php echo $dt->alamat ?>">
		</div>
		<div class="form-group">
			<label>NO HP</label>
			<input type="text" name="no_hp" class="form-control"
			value="<?php echo $dt->no_hp ?>">
		</div>
		<div class="form-group">
			<tr>
			<td>
				<img src="<?php echo base_url(); ?>assets/foto/<?php echo $dt->foto; ?>"
				widt="90" height="110">
			</td>
		</tr>

		</div>

			<!-- <button type="reset" class="btn btn-danger">Reset</button> -->
			<button type="submit" class="btn btn-success">Simpan</button>
			<a href="<?php echo base_url().'index.php/data_diri';?>" class="btn btn-primary">Kembali</a>
		</form>
	<?php }?>
	<!-- coba foto -->
	<?php echo form_close(); ?>
	</section>
</div>