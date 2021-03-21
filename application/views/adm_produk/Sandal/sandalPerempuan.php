<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("adm_produk/_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <?php $this->load->view("adm_produk/_partials/sidebar.php") ?>
  <!-- end of sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

  <!-- navbar -->
  <?php $this->load->view("adm_produk/_partials/navbar.php") ?>
  <!-- navbar section end -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

  <!-- Page Heading -->
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/pancakarya/Produk/allSandal">Semua Kategori Sandal</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sandal Perempuan</li>
  </ol>
  </nav>

  <div class="container">
  <div class="card">
    <div class="card-body">
      <div class="container" align="center" style="background: rgb(0,0,0,0.07); padding: 5px; margin-bottom: 20px;border-radius: 3px"><h4>DATA SANDAL PEREMPUAN</h4></div>
      <!-- Tambah Sandal Perempuan Button -->
      <a href="http://localhost/pancakarya/Produk/tambahSandalPerempuan" class="btn btn-success" style="margin-bottom: 10px;"><span class="fa fa-plus"></span>&nbsp;Tambah Sandal Perempuan</a>

    <div class="table-responsive"></div>
   <table id="tables" class="table table-bordered table-striped table-hover table-datatable">

        <thead align="center">
          <tr>
            <th width="1%">No</th>
            <th>Nama Sandal</th>
            <th>Jenis Sandal</th>
            <th>Kategori Sandal</th>
            <th>37</th>
            <th>38</th>
            <th>39</th>
            <th>40</th>
            <th>41</th>
            <th>42</th>
            <th>Hapus</th>
            <th>Edit</th>
          </tr>
        </thead>

        <!-- <tbody>
        <?php
        $no=1;
        foreach ($celanaPerempuan as $a) 
        { ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $a->nm_baju; ?></td>
            <td><?php echo $a->jns_baju; ?></td>
            <td><?php echo $a->kat_baju; ?></td>
            <td><?php echo $a->SS; ?></td>
            <td><?php echo $a->S; ?></td>
            <td><?php echo $a->M; ?></td>
            <td><?php echo $a->L; ?></td>
            <td><?php echo $a->XL; ?></td>
            <td><?php echo $a->XXL; ?></td>

            <td onclick="javascript: return confirm('Anda Yakin HAPUS?')" align="center">
              <a style="margin-right: 10px" href="<?php echo base_url().'Produk/hapus/'.$a->id_baju ; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
            </td>
            <td>
                <a id="tombolUbah" data-toggle="modal" data-target="#ubahModal" style="margin-left: 10px;color: white" class="btn btn-warning" data-idbuku="<?php echo $a->Kode_buku; ?>" data-judul="<?php echo $a->Judul_buku; ?>" data-kategori="<?php echo $a->kategori_idkategori ; ?>" data-tahun="<?php echo $a->tahun; ?>" data-jml="<?php echo $a->jumlah; ?>"><i class="fa fa-edit"></i>Edit</a>
              </td>
  
          </tr>
        <?php } ?>
        </tbody> -->
    </table>
    <div class="text-right">
      <a href="http://localhost/pancakarya/Produk/allSandal" class="btn btn-primary" style="margin-bottom: 10px;">Kembali</a>
    </div>
    </div>
  </div>

</div>

        

           
  </div>
  <!--  end of content fluid -->
  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <?php $this->load->view("adm_produk/_partials/footer.php") ?>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("adm_produk/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("adm_produk/_partials/modal.php") ?>

<!-- js section start -->
<?php $this->load->view("adm_produk/_partials/js.php") ?>
<!-- js section end -->

<script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tables').DataTable();
});
</script>

</body>

</html>
