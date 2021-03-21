<!DOCTYPE html>
<html>
<head>
	<title>BUKU TABUNGAN</title>
</head>
<body>
	<h2 style="text-align: center">TABUNGAN <?php echo $tabungan['nama'] ?> </h2>
	<table border="1" align="center">
		<tr>
			<td style="background-color: #FF6633">No Induk</td>
			<td style="background-color: #FF6633">Nama</td>
			<td style="background-color: #FF6633">Status</td>
			<td style="background-color: #FF6633">Alamat</td>

			<td style="background-color: #FF6633">Total Pendapatan</td>
			<td style="background-color: #FF6633">Pajak 15%</td>

			<td style="background-color: #FF6633">Pendapatan Bersih</td>
			<td style="background-color: #FF6633">Jumlah Penarikan</td>
			<td style="background-color: #FF6633">Saldo Akhir</td>
		</tr>

			<tr>
				<td align="center"><?php echo $tabungan['no_induk'] ?></td>
				<td><?php echo $tabungan['nama'] ?></td>
				<td><?php echo $tabungan['nm_status'] ?></td>
				<td><?php echo $tabungan['alamat'] ?></td>

				<td align="center"><?php echo $tabungan['pendapatan_kotor'] ?></td>
				
				<td align="center"><?php echo $tabungan['pajak'] ?></td>
				 
				<td align="center"><?php echo $tabungan['total_tabungan'] ?></td>
				<td align="center"><?php echo $tabungan['total_penarikan'] ?></td>
				<td align="center"><?php echo $tabungan['saldo'] ?></td>
			</tr>
	</table>

	<script type="text/javascript">
	window.print();
	</script>
<br><a href="<?php echo base_url().'index.php/tabungan';?>" class="btn btn-primary"><p align="right">Kembali</a>
</body>
</html>