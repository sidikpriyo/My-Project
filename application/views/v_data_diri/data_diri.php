<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Diri
      </h1>
    </section>
    
    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>

    	<button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Diri</button>

        <a class="btn btn-warning" href=" <?php echo base_url('index.php/data_diri/pdf') ?>"> 
            <i class="fa fa-download"></i> Print/Download PDF</a>

        <div class="navbar-form navbar-right">
            <?php echo form_open('data_diri/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php echo form_close() ?>
        </div>

        <div class="navbar-form navbar-right">
        <a class="btn btn-danger" href=" <?php echo base_url('index.php/data_diri') ?>"><i class="fa fa-refresh"> Refresh</i></a></div>

    	<table class="table">
    		<tr> 
    			<th>NOMOR</th>
    			<th>NO INDUK</th>
    			<th>STATUS</th>
    			<th>NAMA</th>
    			<th>ALAMAT</th>
    			<th>NO HP</th>
                <th colspan="1">DETAIL</th>
                <th colspan="1">HAPUS</th>
                <th colspan="1">EDIT</th>

    		</tr>

    		<?php 

    		$no = 1;
    		foreach ($data_diri as $dt) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $dt->no_induk ?></td>
    			<td><?php echo $dt->nm_status ?></td>
    			<td><?php echo $dt->nama ?></td>
    			<td><?php echo $dt->alamat ?></td>
    			<td><?php echo $dt->no_hp ?></td> 
                <td><?php echo anchor('data_diri/detail/'.$dt->no_induk,'<div class="btn btn-info btn-sm"><i class="fa fa-eye"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda Yakin HAPUS?')">
                    <?php echo anchor('data_diri/hapus/'.$dt->no_induk, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('data_diri/edit/'.$dt->no_induk, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    		</tr>

    	<?php endforeach; ?>
    	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DIRI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

	
        	
            <?php echo form_open_multipart('data_diri/tambah_aksi'); ?>
            
            <div class="form-group">
        		<label>No Induk</label>
        		<input type="integer" name="no_induk" class="form-control">
        	</div>

            <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="id_status" class="form-control">
            <option value="1">Pengurus</option>
            <option value="2">Nasabah</option>  
            </select>
            </div>

        	<div class="form-group">
        		<label>Nama</label>
        		<input type="text" name="nama" class="form-control">
        	</div>


        	<div class="form-group">
        		<label>Alamat</label>
        		<input type="text" name="alamat" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>No. Hp</label>
        		<input type="text" name="no_hp" class="form-control">
        	</div>

            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <?php echo form_close(); ?>
        <!-- </form> -->
      </div>
      <!-- <div class="modal-footer"> -->
      </div>
    </div>
  </div>
</div>
</div>