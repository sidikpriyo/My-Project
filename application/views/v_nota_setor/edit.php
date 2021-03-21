<div class="content-wrapper">
	<section class="content">
		<h2>Edit Nota</h2>
		<?php// foreach($nota_setor as $dt) { ?>
		<form action="<?php echo base_url().'index.php/nota_setor/update';?>" 
		 method="post">


		<div class="form-group">
            <input type="hidden" name="id_nota" class="form-control"
            value="<?php echo $nota_setor->id_nota ?>">
            </div>

        <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $nota_setor->nama ?>" readonly>
        </div>

		<div class="form-group">
            <label>No Induk</label>
            <input type="text" name="no_induk" class="form-control" id="no_induk" value="<?php echo $nota_setor->no_induk ?>" readonly>
        </div>
                            
        <div class="form-group">
            <label>Alamat</label>
            <input type="integer" name="alamat" class="form-control" id="alamat" value="<?php echo $nota_setor->alamat ?>" readonly>    
        </div>

        
                            <?php foreach($sampah as $s):?>
                            <div class="form-group">
                            <label><?= $s->nm_sampah?> (kg)</label>
                                <input name="<?= str_replace(" ", "", $s->nm_sampah)?>" class="form-control">    
                            </div>
                            <?php endforeach;?>

			<button type="submit" class="btn btn-success">Simpan</button>
			<a href="<?php echo base_url().'index.php/nota_setor';?>" class="btn btn-primary">Kembali</a>
		</form>
	<?php// }?>
	<!-- coba foto -->
	<?php echo form_close(); ?>
	</section>
</div>
