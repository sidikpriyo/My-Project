<!-- INI TIDAK DIPAKA -->

<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR SAMPAH DI BANK SAMPAH KANCI</title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
			<th>ID Sampah</th>
			<th>Nama Sampah</th>
			<th>Harga Pengurus</th>
			<th>Harga Nasabah </th>
		</tr>

				<?php
				$no=1;
				foreach ($sampah as $smp) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $smp->id_sampah ?></td>
				<td><?php echo $smp->nm_sampah ?></td>
				<td><?php echo $smp->hrg_pengurus ?></td>
				<td><?php echo $smp->hrg_nasabah ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<script type="text/javascript">
	window.print();
	</script>
<a href="<?php echo base_url().'index.php/sampah';?>" class="btn btn-primary">Kembali</a>
</body>
</html>