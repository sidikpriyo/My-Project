<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("adm_produk/_partials/head.php") ?>
<!-- costum css file -->
<style type="text/css">
  #font{font-family: Lucida Console;}
</style>
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
<div class="d-sm-flex align-items-center justify-content-between mb-4">

</div>

    <div class="card" style="padding: 30px; background-color: rgb(0,0,0,0.2);">
    <div class="card-header" align="center" style="background-color: rgb(0,0,0,0.7);"><h4 style="color: #ffee58;" id="font">KATEGORI TAS</h4></div>
    <div class="card-body"></div>

    <div class="row" style="padding: 20px; margin-bottom: 30px">

    <div class="col-md-4">
      <a href="http://localhost/pancakarya/Produk/tasPerempuan" style="text-decoration: none;"><div class="card bg-danger text-white">
          <div class="card-body">
            <div class="pull-right">
              <h2 align="center" id="font" style="padding: 10px">Perempuan</h2>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="http://localhost/pancakarya/Produk/tasLaki" style="text-decoration: none;"><div class="card bg-success text-white">
          <div class="card-body">
            <div class="pull-right">
              <h2 align="center" id="font" style="padding: 10px">Laki-Laki</h2>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="http://localhost/pancakarya/Produk/tasAnak" style="text-decoration: none;"><div class="card bg-primary text-white">
          <div class="card-body">
            <div class="pull-right">
              <h2 align="center" id="font" style="padding: 10px">Anak</h2>
            </div>
          </div>
        </div>
      </a>
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
