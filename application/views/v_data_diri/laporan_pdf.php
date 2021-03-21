<!DOCTYPE html>
<html>
<head>
	<title>DATA DIRI NASABAH DAN PENGURUS BANK SAMPAH</title>
</head>
<body>
	<h2 style="text-align: center">DATA DIRI</h2>
	<table border="1" align="center">
		<tr>
			<th style="background-color: #C0C0C0">No</th>
			<th style="background-color: #C0C0C0">No Induk</th>
			<th style="background-color: #C0C0C0">Status</th>
			<th style="background-color: #C0C0C0">Nama</th>
			<th style="background-color: #C0C0C0">Alamat</th>
			<th style="background-color: #C0C0C0">No HP</th>
		</tr>

				<?php
				$no=1;
				foreach ($data_diri as $dt1) : ?>

			<tr>
				<td align="center" style="background-color: #C0C0C0"><?php echo $no++ ?></td>
				<td align="center"><?php echo $dt1->no_induk ?></td>
				<td><?php echo $dt1->nm_status ?></td>
				<td><?php echo $dt1->nama ?></td> 
				<td><?php echo $dt1->alamat ?></td>
				<td><?php echo $dt1->no_hp ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<script type="text/javascript">
	window.print();
	</script>
<a href="<?php echo base_url().'index.php/data_diri';?>" class="btn btn-primary"><p align= "right">Kembali</a>
</body>
</html>