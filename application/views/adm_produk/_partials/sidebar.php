<!-- Sidebar -->
<!-- costum css file include -->
<style type="text/css">
#collapseKategori a, #collapseProduk a{color: black}
</style>

    <ul style="background: #424242" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a style="color: #ffee58" class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard">
        <div class="sidebar-brand-icon">
          <i class="fa fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text">&nbsp;ADMIN PRODUK</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="Dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- sidebar produk section start -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKategori" aria-expanded="true" aria-controls="collapseKategori">
          <i class="fa fa-cart-plus"></i>
          <span>Kategori</span>
        </a>
        <div id="collapseKategori" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div style="background: #ffee58" class="py-2 collapse-inner rounded">
            <h6 class="collapse-header"><span style="color: black">Jenis Kategori:</span></h6>
            <a class="collapse-item" href="allBaju">Baju</a>
            <a class="collapse-item" href="allCelana">Celana</a>
            <a class="collapse-item" href="allTas">Tas</a>
            <a class="collapse-item" href="allSepatu">Sepatu</a>
            <a class="collapse-item" href="allSandal">Sandal</a>
            <a class="collapse-item" href="allFashion">Fashion</a>
          </div>
        </div>
      </li>
      <!-- sidebar produk section end -->

      <!-- sidebar produk section start -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduk" aria-expanded="true" aria-controls="collapseProduk">
          <i class="fa fa-cart-plus"></i>
          <span>Produk</span>
        </a>
        <div id="collapseProduk" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div style="background: #ffee58" class="py-2 collapse-inner rounded">
            <h6 class="collapse-header"><span style="color: black">Menu Produk:</span></h6>
            <a class="collapse-item" href="kategori">Kategori Produk</a>
            <a class="collapse-item" href="jenis_produk">Jenis Produk</a>
            <a class="collapse-item" href="input_produk">Input Produk</a>
          </div>
        </div>
      </li>
      <!-- sidebar produk section end -->

      

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar