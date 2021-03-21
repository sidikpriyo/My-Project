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
    <li class="breadcrumb-item"><a href="http://localhost/pancakarya/Produk/allCelana">Semua Kategori Celana</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/pancakarya/Produk/celanaLaki">Celana Laki-Laki</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Celana Laki-Laki</li>
  </ol>
  </nav>

<div class="container">
  <div class="card" style="background-color: white;">
    <div class="card-body">
      <div class="content">
        <h4 style="text-align: center;background-color: rgb(0,0,0,0.07); padding: 10px; border-radius: 5px;">MENAMBAHKAN DATA CELANA LAKI-LAKI</h4>
      </div>
      <form>
     <div class="form-group">
          <input type="hidden" name="id_baju" class="form-control">
     </div>
    <div class="row" style="margin-top: 30px;">
     <div class="col l4 mb-3">
      <label class="col-form-label">Nama Celana</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l4 mb-3">
      <label class="col-form-label">Jenis Celana</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
     <div class="col l4 mb-3">
      <label class="col-form-label">Kategori Celana</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="container mb-1"><h6 style="margin-left: -12px">Upload Foto</h6></div>
      <div class="col l4 mb-3" style="width: 99%">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
    </div>
    <div class="col l4 mb-3" style="width: 99%">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
    </div>
    <div class="col l4 mb-3" style="width: 99%">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
    </div>
    </div>
    <div class="row" style="margin-top: 20px">
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">27</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">28</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">29</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">30</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">31</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">32</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>
    <h5 align="center" style="margin-top: 30px">Ukuran 27</h5>
    <div class="row" style="border-bottom: 2px solid gray">
      <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Merah</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Kuning</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Hijau</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Biru</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Ungu</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Tosca</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>

    <h5 align="center" style="margin-top: 30px">Ukuran 28</h5>
    <div class="row" style="border-bottom: 2px solid gray">
      <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Merah</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Kuning</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Hijau</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Biru</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Ungu</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Tosca</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>

    <h5 align="center" style="margin-top: 30px">Ukuran 29</h5>
    <div class="row" style="border-bottom: 2px solid gray">
      <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Merah</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Kuning</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Hijau</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Biru</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Ungu</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Tosca</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>

    <h5 align="center" style="margin-top: 30px">Ukuran 30</h5>
    <div class="row" style="border-bottom: 2px solid gray">
      <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Merah</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Kuning</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Hijau</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Biru</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Ungu</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Tosca</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>

    <h5 align="center" style="margin-top: 30px">Ukuran 31</h5>
    <div class="row" style="border-bottom: 2px solid gray">
      <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Merah</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Kuning</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Hijau</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Biru</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Ungu</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Tosca</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>

    <h5 align="center" style="margin-top: 30px">Ukuran 32</h5>
    <div class="row" style="border-bottom: 2px solid gray">
      <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Merah</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Kuning</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Hijau</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Biru</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Ungu</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">Tosca</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>
    <div class="text-right" style="margin-top: 20px">
    <a href="http://localhost/pancakarya/Produk/celanaLaki" class="btn btn-danger"><span class="fa fa-backspace"></span>&nbsp;Kembali</a>
    <button type="submit" class="btn btn-success"><span class="fa fa-save"></span>&nbsp;Simpan</button>
  </div>
  </form>
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

</body>

</html>
