<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_partials/head.php") ?>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

        
        <!-- breadcrumb -->
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
        <!-- End of breadcrumb -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?php echo site_url('admin/overview/error') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Room 1</div>
                      <br>
                      <table cellpadding="10">
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                      </table>                                        
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Room 2</div>
                      <br>
                      <table cellpadding="10">
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                      </table>                                        
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Room 3</div>
                      <br>
                      <table cellpadding="10">
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                      </table>                                        
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Room 4</div>
                      <br>
                      <table cellpadding="10">
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                        </tr>
                      </table>                                        
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart power usage across the room over time</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>
                </div>
              </div>


              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">chart of power usage across the room each week </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">chart of power usage across the room each month </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                </div>
                <div class="card-body">
                  <p>================================================================================</p>
                  <p>This is card information about calculation power usage of all the room</p>
                  <p>================================================================================</p>
                  <hr>
                  <table cellpadding="10">
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Currently</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> </div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                  </tr>
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Yesterday</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> </div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Last Week</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> </div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Last Month</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> </div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                 </table>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

      <?php $this->load->view("admin/_partials/footer.php") ?>

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
