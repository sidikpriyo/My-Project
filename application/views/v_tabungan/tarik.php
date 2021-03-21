<div class="content-wrapper">
	<section class="content">
		<h2>Tarik Tabungan</h2>
		<?php// foreach($nota_setor as $dt) { ?>
		
        <!-- <form action="<?php// echo base_url().'index.php/nota_setor/update';?>" 
		 method="post">-->
        <?php echo validation_errors(); ?>

        <?php echo form_open('tabungan/tarik/'.$buku_tabungan['id_tabungan']); ?>
		<div class="form-group">
            <input type="hidden" name="id_tabungan" class="form-control"
            value="<?php echo $buku_tabungan['id_tabungan']?>">
            </div>

        <div class="form-group">
            <label>NO INDUK</label>
            <input type="text" name="no_induk" class="form-control" value="<?php echo $buku_tabungan['no_induk'] ?>">
        </div>

		<div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $buku_tabungan['nama'] ?>">
        </div>
                            
        <div class="form-group">
            <label>STATUS</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $buku_tabungan['nm_status'] ?>">    
        </div>

        <div class="form-group">
            <label>ALAMAT</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $buku_tabungan['alamat']  ?>">    
        </div>

        <div class="form-group">
            <label>TOTAL TABUNGAN</label>
            <input type="integer" name="" class="form-control" value="<?php echo $buku_tabungan['saldo'] ?>">    
        </div>

        <div class="form-group">
            <label>JUMLAH TARIK</label>
            <input type="integer" name="tarik" class="form-control" id="">
            </div>    

			<button type="submit" class="btn btn-success">Simpan</button>
			<a href="<?php echo base_url().'index.php/tabungan';?>" class="btn btn-primary">Batal</a>
		</form>
	<?php// }?>
	<!-- coba foto -->
	<?php echo form_close(); ?>
	</section>
</div>
