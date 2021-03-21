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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Input Produk</h1>
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
