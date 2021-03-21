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
    <li class="breadcrumb-item"><a href="http://localhost/pancakarya/Produk/allTas">Semua Kategori Tas</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/pancakarya/Produk/tasAnak">Tas Anak</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Tas Anak</li>
  </ol>
  </nav>

<div class="container">
  <div class="card" style="background-color: white;">
    <div class="card-body">
      <div class="content">
        <h4 style="text-align: center;background-color: rgb(0,0,0,0.07); padding: 10px; border-radius: 5px;">MENAMBAHKAN DATA TAS ANAK</h4>
      </div>
      <form>
     <div class="form-group">
          <input type="hidden" name="id_baju" class="form-control">
     </div>
    <div class="row" style="margin-top: 30px;">
     <div class="col l4 mb-3">
      <label class="col-form-label">Nama Tas</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l4 mb-3">
      <label class="col-form-label">Jenis Tas</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
     <div class="col l4 mb-3">
      <label class="col-form-label">Kategori Tas</label>
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
      <label class="col-form-label">S</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">M</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">L</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    <div class="col l2 mb-3" align="center">
      <label class="col-form-label">XL</label>
      <input type="text" class="form-control" name="" required style="width: 100%">
    </div>
    </div>

    <h5 align="center" style="margin-top: 30px">Ukuran S</h5>
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

    <h5 align="center" style="margin-top: 30px">Ukuran M</h5>
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

    <h5 align="center" style="margin-top: 30px">Ukuran L</h5>
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

    <h5 align="center" style="margin-top: 30px">Ukuran XL</h5>
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
    <a href="http://localhost/pancakarya/Produk/tasAnak" class="btn btn-danger"><span class="fa fa-backspace"></span>&nbsp;Kembali</a>
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
