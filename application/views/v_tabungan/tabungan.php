<div class="content-wrapper">
	<section class="content-header">
	<h1>
		Tabungan
	</h1>
	</section>

	<section class="content">
        <?php echo $this->session->flashdata('message'); ?>

        <div class="navbar-form navbar-right">
            <?php echo form_open('tabungan/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Masukkan Nama">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php echo form_close() ?>
        </div>

        <a class="btn btn-success" href=" <?php echo base_url('index.php/tabungan') ?>"><i class="fa fa-refresh"> Refresh</i></a>

        <a class="btn btn-warning" href=" <?php echo base_url('index.php/tabungan/print_tabungan') ?>"> 
            <i class="fa fa-download"></i> Print Laporan/Download PDF</a>

        <a class="btn btn-danger" href=" <?php echo base_url('index.php/tabungan/reset') ?>"> 
            <i class="fa fa-warning"></i> Reset Data Tabungan</a>
        


	<table class="table">
            <tr> 
                <th>NOMOR</th>
                
                <th>NO INDUK</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>STATUS</th>
                <th>TOTAL PENDAPATAN</th>
                <th>PAJAK</th>
                <th>PENDAPATAN BERSIH</th>
              

            </tr>
            <?php $no=1?>
            <?php foreach($tabungan as $d):?>
            <tr> 
                <td><?php echo $no++?></td>
                <td><?php echo $d['no_induk'] ?></</td>
                <td><?php echo $d['nama'] ?></</td>
                <td><?php echo $d['alamat'] ?></</td>
                <td><?php echo $d['nm_status'] ?></</td>
                <td>Rp. <?php echo $d['pendapatan_kotor'] ?></</td>
                <td>Rp. <?php echo $d['pajak'] ?></</td>
                <td>Rp. <?php echo $d['pendapatan_bersih'] ?></td>

            </tr>
              


            <?php endforeach;?>

            <tr>
                <th style="background-color: #FF6633" colspan="5" rowspan="1" align="center"><strong><p align="center">JUMLAH :</p></strong></th>
                <th style="background-color: #FF6633" rowspan="1" align="center"><strong>Rp. <?php echo $total_inventori ?></strong></th>

                <!-- jumlahkan pajak= 1125 -->
                <th style="background-color: #FF6633" rowspan="1" align="center"><strong>Rp. 
                    <?php
                    // $d['pajak'];
                    // echo array_sum($d);
                    $sum = 0;
                    foreach($tabungan as $d)
                    {
                       $sum+= $d['pajak'];
                    }
                    echo $sum;
                    ?></strong></th>

                <!-- total pendapatan-jumlah pajak = 9075 -->
                    <th style="background-color: #FF6633" rowspan="1" align="center"><strong>Rp. 
                        <?php
                         $sum = 0;
                        foreach($tabungan as $d)
                        {
                        $sum+= $d['pendapatan_bersih'];
                        }
                        echo $sum; 
                         ?></strong></th>


            </tr>

        </table>

</div>