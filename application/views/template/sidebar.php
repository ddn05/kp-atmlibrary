  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>dashboard">
        <div class="sidebar-brand-icon">
            <i class="fas fa-book-reader"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ATM LIBRARY</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Offline Library
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#moduleMaster" aria-expanded="true" aria-controls="moduleMaster">
          <i class="fas fa-fw fa-cog"></i>
          <span>Module Master</span>
        </a>
        <div id="moduleMaster" class="collapse" aria-labelledby="moduleMaster" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>anggota"><i class="fas fa-users mr-2"></i>Anggota</a>
            <a class="collapse-item" href="utilities-border.html"><i class="fas fa-book mr-3"></i>Buku</a>
            <a class="collapse-item" href="utilities-animation.html"><i class="fas fa-user mr-3"></i>User</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#modulTransaksi" aria-expanded="true" aria-controls="modulTransaksi">
          <i class="fas fa-cash-register"></i>
          <span>Module Transaksi</span>
        </a>
        <div id="modulTransaksi" class="collapse" aria-labelledby="modulTransaksi" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html"><i class="fas fa-cart-plus mr-3"></i></i> Peminjaman</a>
            <a class="collapse-item" href="utilities-border.html"><i class="fas fa-cart-arrow-down mr-2"></i>Pengembalian</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#moduleLaporan" aria-expanded="true" aria-controls="moduleLaporan">
        <i class="fas fa-file mr-2"></i>
          <span>Module Laporan</span>
        </a>
        <div id="moduleLaporan" class="collapse" aria-labelledby="moduleLaporan" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url()?>anggota/laporan_anggota"><i class="fas fa-users mr-2"></i>Data Anggota</a>
            <a class="collapse-item" href="utilities-border.html"><i class="fas fa-book mr-3"></i>Data Buku</a>
            <a class="collapse-item" href="utilities-animation.html"><i class="fas fa-cart-plus mr-3"></i></i>Data Peminjaman</a>
            <a class="collapse-item" href="utilities-animation.html"><i class="fas fa-cart-arrow-down mr-3"></i></i>Data Pengembalian</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Online Library
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
        <i class="fas fa-file-alt"></i>
          <span>Data E-Book</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kategori" aria-expanded="true" aria-controls="kategori">
        <i class="fas fa-bookmark"></i>
          <span>Kategori</span>
        </a>
        <div id="kategori" class="collapse" aria-labelledby="headingkategori" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Umum</a>
            <a class="collapse-item" href="utilities-border.html">Pemasaran</a>
            <a class="collapse-item" href="utilities-animation.html">Pariwisata</a>
            <a class="collapse-item" href="utilities-animation.html">Peternakan</a>
            <a class="collapse-item" href="utilities-animation.html">Vokasi</a>
            <a class="collapse-item" href="utilities-animation.html">Inspirasi</a>
          </div>
        </div>

        <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
        <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div> -->
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
