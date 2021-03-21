<div class="content-wrapper">
	<section class="content">
		<?php foreach($sampah as $smp) { ?>
		<form action="<?php echo base_url().'index.php/sampah/update';?>" 
		 method="post">


		<!-- <div class="form-group">
			<label>ID SAMPAH</label>
			<input type="hidden" name="id_sampah" class="form-control"
			value="<?php echo $smp->id_sampah ?>">
			<select class="form-control" name="id_status" value="
			<?php echo $dt->id_status ?>">
			<option>1</option>
			<option>2</option>
			<option>3</option>	
			</select>
			</div> -->

		<div class="form-group">
			<!-- <label>ID SAMPAH</label> -->
			<input type="hidden" name="id_sampah" class="form-control"
			value="<?php echo $smp->id_sampah ?>">
			<label>NAMA SAMPAH</label>
			<input type="text" name="nm_sampah" class="form-control"
			value="<?php echo $smp->nm_sampah ?>">
		</div>

		<div class="form-group">
			<label>HARGA PENGURUS</label>
			<input type="double" name="hrg_pengurus" class="form-control"
			value="<?php echo $smp->hrg_pengurus ?>">
		</div>

		<!-- <div class="form-group">
			<label>HARGA NASABAH</label>
			<input type="double" name="hrg_nasabah" class="form-control"
			value="<?php echo $smp->hrg_nasabah ?>">
		</div> -->

		<div class="form-group">
			<tr>
			<td>
				<img src="<?php echo base_url(); ?>assets/foto_sampah/<?php echo $smp->foto; ?>"
				widt="90" height="110">
			</td>
		</tr>

		</div>

			<!-- <button type="reset" class="btn btn-danger">Reset</button> -->
			<button type="submit" class="btn btn-success">Simpan</button>
			<a href="<?php echo base_url().'index.php/sampah';?>" class="btn btn-primary">Kembali</a>
		</form>
	<?php }?>
	<?php echo form_close(); ?>
	</section>
</div>