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
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Chart and Datatables
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'overview' ? 'active': '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sensor</h6>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_1r1' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_1r1') ?>">Sensor_1r1</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_2r1' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_2r1') ?>">Sensor_2r1</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_3r1' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_3r1') ?>">Sensor_3r1</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_4r1' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_4r1') ?>">Sensor_4r1</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_5r1' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_5r1') ?>">Sensor_5r1</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_6r1' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_6r1') ?>">Sensor_6r1</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_1r2' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_1r2') ?>">Sensor_1r2</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_2r2' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_2r2') ?>">Sensor_2r2</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_3r2' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_3r2') ?>">Sensor_3r2</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_4r2' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_4r2') ?>">Sensor_4r2</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_5r2' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_5r2') ?>">Sensor_5r2</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_6r2' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_6r2') ?>">Sensor_6r2</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_1r3' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_1r3') ?>">Sensor_1r3</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_2r3' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_2r3') ?>">Sensor_2r3</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_3r3' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_3r3') ?>">Sensor_3r3</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_4r3' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_4r3') ?>">Sensor_4r3</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_5r3' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_5r3') ?>">Sensor_5r3</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_6r3' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_6r3') ?>">Sensor_6r3</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_1r4' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_1r4') ?>">Sensor_1r4</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_2r4' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_2r4') ?>">Sensor_2r4</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_3r4' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_3r4') ?>">Sensor_3r4</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_4r4' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_4r4') ?>">Sensor_4r4</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_5r4' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_5r4') ?>">Sensor_5r4</a>
            <a class="collapse-item <?php echo $this->uri->segment(3) == 'sensor_6r4' ? 'active': '' ?>" href="<?php echo site_url('admin/overview/sensor_6r4') ?>">Sensor_6r4</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->