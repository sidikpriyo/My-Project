<!DOCTYPE html>
<html>
<head>
	<title>PRINT TABUNGAN</title>
</head>
<body>
	<h2 style="text-align: center">TABUNGAN</h2>
	<table border="1" align="center">
		<tr>
			<td style="background-color: #C0C0C0" align="center">No Induk</td>
			<td style="background-color: #C0C0C0" align="center">Nama</td>
			<td style="background-color: #C0C0C0" align="center">Alamat</td>
			<td style="background-color: #C0C0C0" align="center">Status</td>
			<td style="background-color: #C0C0C0" align="center">Total Pendapatan</td>
			<td style="background-color: #C0C0C0" align="center">Pajak 15%</td>
			<td style="background-color: #C0C0C0" align="center">Pendapatan Bersih</td>
		</tr>

			<?php foreach($tabungan as $d):?>
            <tr> 
                <td><?php echo $d['no_induk'] ?></</td>
                <td><?php echo $d['nama'] ?></</td>
                <td><?php echo $d['alamat'] ?></</td>
                <td><?php echo $d['nm_status'] ?></</td>
                <td>Rp. <?php echo $d['pendapatan_kotor'] ?></</td>
                <td>Rp. <?php echo $d['pajak'] ?></</td>
                <td>Rp. <?php echo $d['pendapatan_bersih'] ?></</td>
            </tr>
            <?php endforeach;?>

        <tr>
			<td colspan="4" style="background-color: #FF6633" align="center">Jumlah</td>

			<td style="background-color: #FF6633">Rp. <?php echo $total_inventori ?></td>
			<td style="background-color: #FF6633">Rp. <?php
                    // $d['pajak'];
                    // echo array_sum($d);
                    $sum = 0;
                    foreach($tabungan as $d)
                    {
                       $sum+= $d['pajak'];
                    }
                    echo $sum;
                    ?></td>
			<td style="background-color: #FF6633">Rp. <?php
                         $sum = 0;
                        foreach($tabungan as $d)
                        {
                        $sum+= $d['pendapatan_bersih'];
                        }
                        echo $sum; 
                         ?></td>
		</tr>

	</table>

	<script type="text/javascript">
	window.print();
	</script>
<br><a href="<?php echo base_url().'index.php/tabungan';?>" class="btn btn-primary"><p align="right">Kembali</a>
</body>
</html>