    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo SITE_NAME1?> <sup>Admin</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Monitoring and Controlling
      </div>

      <!-- Nav Item -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'room1' ? 'active': '' ?>"><!-- Kode ini akan mengecek, apakah halaman /admin/siswa sedang dibuka atau tidak. -->
        <a class="nav-link" href="<?php echo site_url('admin/room1') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Room 1</span></a>
      </li>

      <!-- Nav Item -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'room2' ? 'active': '' ?>"><!-- Kode ini akan mengecek, apakah halaman /admin/siswa sedang dibuka atau tidak. -->
        <a class="nav-link" href="<?php echo site_url('admin/room2') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Room 2</span></a>
      </li>

      <!-- Nav Item -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'room3' ? 'active': '' ?>"><!-- Kode ini akan mengecek, apakah halaman /admin/siswa sedang dibuka atau tidak. -->
        <a class="nav-link" href="<?php echo site_url('admin/room3') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Room 3</span></a>
      </li>

      <!-- Nav Item -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'room4' ? 'active': '' ?>"><!-- Kode ini akan mengecek, apakah halaman /admin/siswa sedang dibuka atau tidak. -->
        <a class="nav-link" href="<?php echo site_url('admin/room4') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Room 4</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->