
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Form Tambah Nota
        <!-- <?php var_dump(json_encode($dd_bidang))?> -->

      </h1> 
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <!-- <h2 class="box-title">Form Tambah Nota</h2> -->
                <label class="box-title"><h3>Tambah Nota Setor</h3></label>
                <div class="pull-right">
                   <!--  <a href="<?php echo base_url('index.php/nota_setor/') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-undo"></i> Kembali</a> -->
                </div>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-5">
                        <form method="post" action="<?php echo base_url('index.php/nota_setor/tambah_data')?>">
                        <div class="form-group">
                                <!-- <label>Id Nota</label> -->
                                <input type="hidden" name="id_nota" class="form-control" id="id_nota">    
                            </div>

                            <!-- <div class="form-group">
                            <label for="name">PILIH NAMA</label>
                                <div class="controls">
                                    <select required name="nama" id="nama">
                                        <option disabled diselected>-- Pilih Nama --</option>
                                    <?php                                
                                    foreach ($dd_bidang as $row) {  
                                        //berdasarkan no_induk, tampilkan nama
                                      echo "<option value='".$row->no_induk."'>".$row->nama."</option>";
                                      }
                                    ?>
                                    </select>
                                </div>
                            </div> -->

                            <!-- dropdown -->
                           <!--  <label for="name">Nama Anggota</label>
                            <div class="input-group input-group-sm">
                            <select required name="nama" id="nama" style="width: 100%;">
                            <option value="">-- Pilih Nama --</option>
                                <?php
                                foreach ($dd_bidang as $row) {  
                                        //berdasarkan no_induk, tampilkan nama
                                echo "<option value='".$row->no_induk."'>".$row->nama."</option>";
                                      }
                                 ?>
                             </select> -->

                             <!-- LookUp -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <span class="input-group-btn">
                                <input type="text" name="nama" id="nama" class="form-control" required autofocus readonly>
                                <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#modal-item">
                                <i class=" fa fa-search">-- Klik dan Pilih Nama Anggota Bank Sampah --</i>
                                <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                        <form>
                            <!--LookUp no induk dan alamat otomatis  -->
                            <!-- <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" readonly>
                            </div> -->
                            <div class="form-group">
                                <label for="no_induk">No Induk</label>
                                <input type="number" name="no_induk" id="no_induk" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" readonly>
                            </div>

                        <!-- <div class="form-group">
                                <label>No Induk</label>
                                <input type="integer" name="no_induk" class="form-control" id="no_induk">    
                            </div> -->

                           <!--  <div class="form-group">
                                <label>Alamat</label>
                                <input type="varchar" name="alamat" class="form-control" id="alamat">    
                            </div> -->

                        <div class="form-group">
                                <label>Tanggal Nota</label>
                                <input type="date" name="tanggal_nota" id="tanggal" class="form-control">    
                            </div>

                            <?php foreach($sampah as $s):?>
                            <div class="form-group">
                            <label><?= $s->nm_sampah?> (kg)</label>
                                <input name="<?= str_replace(" ", "", $s->nm_sampah)?>" class="form-control">    
                            </div>
                            <?php endforeach;?>
        
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?php echo base_url().'index.php/nota_setor';?>" class="btn btn-primary">Kembali</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>

<!-- panggil modal dalam lookup -->
<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><STRONG>Pilih Nama</STRONG></h4>
            </div>
            <div class="modal-body table-responsive">
            <table class="table table-border table-sriped" id="table1" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>Nama</strong></th>
                        <th><strong>No Induk</strong></th>
                        <th><strong>Alamat</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dd_bidang as $row =>$data) { ?>
                    <tr>
                        <td><?=$data->nama?></td>
                        <td><?=$data->no_induk?></td>
                        <td><?=$data->alamat?></td>
                        <td>
                            <button class="btn btn-xs btn-success" id="select"
                            data-nama="<?=$data->nama?>"
                            data-no_induk="<?=$data->no_induk?>"
                            data-alamat="<?=$data->alamat?>">
                                <i class="fa fa-check"></i>Pilih
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
</div>

</div>


<script src="<?= base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>

 <script>
    $('#nama').on('click',function() {
        $.post('<?=base_url("index.php/nota_setor/find_note")?>', 
            { nama: $('#nama').val() },
              function(returnedData){
                // $('#tanggal').val(returnedData.tanggal_nota);
                //tampilkan data
                $('#no_induk').val(returnedData.no_induk);
                $('#alamat').val(returnedData.alamat);
                },"json");
    });
</script>

<script src="<?= base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click','#select',function() {
        var nama = $(this).data('nama');
        var no_induk = $(this).data('no_induk');
        var alamat = $(this).data('alamat');
        $('#nama').val(nama);
        $('#no_induk').val(no_induk);
        $('#alamat').val(alamat);
        $('#modal-item').modal('hide');
    })
})
</script>
