<div class="content-wrapper">
	<section class="content">

		<h4><strong>DETAIL DATA DIRI</strong></h4>
		<table class="table">
		<tr>
			<th>No Induk</th>
			<td><?php echo $detail->no_induk ?></td>
		</tr>
		<!-- <tr>
			<th>Status</th>
			<td><?php echo $detail->id_status ?></td>
		</tr> -->
		<tr>
			<th>Nama</th>
			<td><?php echo $detail->nama ?></td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td><?php echo $detail->alamat ?></td>
		</tr>
		<tr>
			<th>No HP</th>
			<td><?php echo $detail->no_hp ?></td>
		</tr>
		<tr>
			<th>Foto</th>
			<!-- <td><?php echo $detail->foto ?></td> -->
		</tr>
		<tr>
			<td>
				<img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>"
				widt="90" height="110">
			</td>
		</tr>
	
	</table>
	<a href="<?php echo base_url().'index.php/data_diri';?>" class="btn btn-primary">Kembali</a>
	</section>
</div>