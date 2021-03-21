<div class="content-wrapper">
	<section class="content-header">
		<div style="background-color: #737373">
	<h1><p align= "center"><font face="serif" color="black"><b>FORM RESET DATA TABUNGAN</b></font></h1>
	<h3><p align= "center"><font color="#FFFFFF" class="fa fa-warning"></font><font face="serif" color="#FFFF00"><b> PERHATIAN DAN PERINGATAN!!! <font class="fa fa-warning" color="#FFFFFF"></font></b></font></h3>

		<h4><font color="#FFFF00"><p style= "text-align: justify;">Form ini digunakan untuk melakukan hapus data <strong>"NOTA SETOR"</strong> dan <strong>"DATA TABUNGAN"</strong>. Hal ini akan membuat data <strong>NOTA SETOR dan DATA TABUNGAN</strong> menjadi <strong>KOSONG</strong> dengan <strong>PERMANEN!!</strong> Harap PRINT LAPORAN terlebih dahulu sebelum melakukan RESET DATA</p></font></h4><br>

	</section>

	<section class="content-header">
		<div align="center"><br>

	<a class="btn btn-warning" href=" <?php echo base_url('index.php/tabungan/print_tabungan') ?>"> 
            <i class="fa fa-download"></i> Print Laporan/Download PDF</a>

        <!-- <a onclick="javascript: return confirm('Anda Yakin Melakukan RESET DATA TABUNGAN?')" class="btn btn-danger" 
        href=" <?php echo base_url('index.php/tabungan/hapus') ?>"
        > 
        <i class="fa fa-warning"></i> Reset Data Tabungan</a><br> -->

        <a onclick="javascript: return confirm('Anda Yakin Melakukan RESET DATA TABUNGAN?')" class="btn btn-danger" 
        href=" <?php echo base_url('index.php/tabungan/reset_data') ?>"
        > 
        <i class="fa fa-warning"></i> Reset Data Tabungan</a><br>
      </section>

</div>