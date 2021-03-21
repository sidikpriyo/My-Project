<div class="content-wrapper">
	<section class="content">

		<h4><strong>DETAIL DATA SAMPAH</strong></h4>
		<table class="table">
		<tr>
			<th>ID Sampah</th>
			<td><?php echo $detail->id_sampah ?></td>
		</tr>
		<tr>
			<th>Nama Sampah</th>
			<td><?php echo $detail->nm_sampah ?></td>
		</tr>
		<tr>
			<th>Harga Pengurus</th>
			<td>Rp. <?php echo $detail->hrg_pengurus ?></td>
		</tr>
		<!-- <tr>
			<th>Harga Nasabah</th>
			<td>Rp. <?php echo $detail->hrg_nasabah ?></td>
		</tr> -->
		
		<tr>
		<tr>
			<th>Foto</th>
			<!-- <td><?php echo $detail->foto ?></td> -->
		</tr>
		<tr>
			<td>
				<img src="<?php echo base_url(); ?>assets/foto_sampah/<?php echo $detail->foto; ?>"
				widt="90" height="110">
			</td>
		</tr>
	
	</table>
	<a href="<?php echo base_url().'index.php/sampah';?>" class="btn btn-primary">Kembali</a>
	</section>
</div>