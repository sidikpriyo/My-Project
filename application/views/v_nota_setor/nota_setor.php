<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Setor Harian
      </h1> 
    </section>
    
    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>

        <a class="btn btn-success" href=" <?php echo base_url('index.php/nota_setor/tambah_nota_setor') ?>"> 
            <i class="fa fa-plus"></i> Tambah Nota</a>

            <div class="navbar-form navbar-right">
            <?php echo form_open('nota_setor/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-primary">Cari</button>
            <?php echo form_close() ?>
        </div>

            <section class="content">
            <form method="post" action="<?php echo base_url('index.php/nota_setor/find_nota') ?>">
            <div class="form-group">
                                <label>Cari Berdasarkan Tanggal</label>
                                <input type="date" id="tanggal_nota" name="tanggal_nota" class="form-control"> 
                            </div>
                            <button type="submit" class="btn btn-info" ><i class="fa fa-search"> Cari Tanggal Nota</i></button>

        <a class="btn btn-danger" href=" <?php echo base_url('index.php/nota_setor') ?>"><i class="fa fa-refresh"> Refresh</i></a>

</form>
        <table class="table">
            <tr> 
                <th>NOMOR</th>
                <th>ID NOTA</th>
                <th>TANGGAL SETOR</th>
                <th>NO INDUK</th>
                <th>NAMA</th>
                <!-- <th>STATUS</th> -->
                <th>ALAMAT</th>
                <th>TOTAL SETOR</th>
                <th colspan="1">HAPUS</th>
                <th colspan="1">EDIT</th>

            </tr>

            <?php 

            $no = 1;
            foreach ($nota_setor as $nt) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $nt->id_nota ?></td>
                <td><?php echo $nt->tanggal_nota ?></td>
                <td><?php echo $nt->no_induk ?></td>
                <td><?php echo $nt->nama ?></td>
                <!-- <td><?php echo $nt->id_status?></td> -->
                <td><?php echo $nt->alamat ?></td>
                <td>Rp. <?php echo $nt->total_setor ?></td>

                <td onclick="javascript: return confirm('Anda Yakin HAPUS?')">
                    <?php echo anchor('nota_setor/hapus/'.$nt->id_nota, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

                <td><?php echo anchor('nota_setor/edit/'.$nt->id_nota, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>

        <?php endforeach; ?>
        </table>
    </section>
</div>


<script src="<?= base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>

 <script>
    $('#cari').on('click',function() {
        $.post('<?=base_url("index.php/Nota_setor/carinota")?>', 
            { tanggal: $('#tanggal_nota').val() },
              function(returnedData){
                console.log(returnedData)
                // $('#tanggal').val(returnedData.tanggal_nota);
                //tampilkan data
                // $('#no_induk').val(returnedData.no_induk);
                // $('#alamat').val(returnedData.alamat);
                },
                "json");
    });
</script>