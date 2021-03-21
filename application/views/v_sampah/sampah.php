<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Sampah
      </h1>
    </section>
    
    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>

        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Sampah</button>

        <a class="btn btn-warning" href=" <?php echo base_url('index.php/sampah/pdf') ?>"> 
            <i class="fa fa-download"></i> Print/Download PDF</a>

        <div class="navbar-form navbar-right">
            <?php echo form_open('sampah/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php echo form_close() ?>
        </div>

        <div class="navbar-form navbar-right">
        <a class="btn btn-danger" href=" <?php echo base_url('index.php/sampah') ?>"><i class="fa fa-refresh"> Refresh</i></a></div>

        <table class="table">
            <tr> 
                <th>NOMOR</th>
                <th>ID SAMPAH</th>
                <th>NAMA SAMPAH</th>              
                <th>HARGA(Kg)</th>
                <!-- <th>HARGA NASABAH (Kg)</th> -->
                <th colspan="1">DETAIL</th>
                <th colspan="1">HAPUS</th>
                <th colspan="1">EDIT</th>

            </tr>

            <?php 

            $no = 1;
            foreach ($sampah as $smp) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $smp->id_sampah ?></td>
                <td><?php echo $smp->nm_sampah ?></td>
                <td>Rp. <?php echo $smp->hrg_pengurus ?></td>
                <!-- <td>Rp. <?php echo $smp->hrg_nasabah ?></td> -->
 
                <td><?php echo anchor('sampah/detail/'.$smp->id_sampah,'<div class="btn btn-info btn-sm"><i class="fa fa-eye"></i></div>') ?></td>

                <td onclick="javascript: return confirm('Anda Yakin HAPUS?')">
                    <?php echo anchor('sampah/hapus/'.$smp->id_sampah, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

                <td><?php echo anchor('sampah/edit/'.$smp->id_sampah, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>

        <?php endforeach; ?>
        </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SAMPAH</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <!-- Jquery -->
        <!-- <form method="post" action="<?php echo base_url().'index.php/sampah/tambah_aksi'; ?>"> -->  
            
            <?php echo form_open_multipart('sampah/tambah_aksi'); ?>
            
            <div class="form-group">
                <!-- <label>ID Sampah</label> -->
                <input type="hidden" name="id_sampah" class="form-control">
            </div>

            <div class="form-group">
                <label>Nama Sampah</label>
                <input type="text" name="nm_sampah" class="form-control">
            </div>

            <div class="form-group">
                <label>Harga Pengurus (Kg)</label>
                <input type="double" name="hrg_pengurus" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label>Harga Nasabah (Kg)</label>
                <input type="double" name="hrg_nasabah" class="form-control">
            </div> -->
            
            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
           
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
        
      </div>
      
      </div>
    </div>
  </div>
</div>
</div>