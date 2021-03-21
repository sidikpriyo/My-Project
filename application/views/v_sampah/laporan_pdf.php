<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR SAMPAH</title>
</head>
<body>
	<h2 style="text-align: center">DATA SAMPAH</h2>
	<table border="1" align="center">
		<tr>
			<th style="background-color: #C0C0C0">No</th>
			<!-- <th style="background-color: #C0C0C0">ID Sampah</th> -->
			<th style="background-color: #C0C0C0">Nama Sampah</th>
			<th style="background-color: #C0C0C0">Harga</th>
			<!-- <th style="background-color: #C0C0C0">Harga Nasabah</th> -->
		</tr>

				<?php
				$no=1;
				foreach ($sampah as $smp) : ?>

			<tr>
				<td align="center" style="background-color: #C0C0C0"><?php echo $no++ ?></td>
				<!-- <td><?php echo $smp->id_sampah ?></td> -->
				<td><?php echo $smp->nm_sampah ?></td>
				<td><?php echo $smp->hrg_pengurus ?></td>
				<!-- <td><?php echo $smp->hrg_nasabah ?></td> -->
			</tr>
		<?php endforeach; ?>
	</table>

	<script type="text/javascript">
	window.print();
	</script>
<a href="<?php echo base_url().'index.php/sampah';?>" class="btn btn-primary"><p align="right">Kembali</a>
</body>
</html>