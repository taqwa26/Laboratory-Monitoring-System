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
            <h1 class="h3 mb-0 text-gray-800">Room 4 (on development)</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Power Usage</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>
                  This chart power usage form Room 4 over time.
                </div>
              </div>
            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <table cellpadding="10">
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Today</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                   </tr>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage This Week</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                   </tr>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage This Month</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                   </tr>
                 </table>
                  <hr>
                  Information power usage form Room 4.
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
                  <h6 class="m-0 font-weight-bold text-primary">Lamp</h6>
                </div>
                <div class="card-body">
                <div class="card bg-warning text-white shadow">
                  <div class="card-body">
                      Lamp 1
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
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
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-warning text-white shadow">
                  <div class="card-body">
                      Lamp 2
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
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
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-warning text-white shadow">
                  <div class="card-body">
                      Lamp 3
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
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
                  </div>
                </div>
              </div>
            
            </div>

            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Socket</h6>
                </div>
                <div class="card-body">
                <div class="card bg-info text-white shadow">
                  <div class="card-body">
                      Socket 1
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
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
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-info text-white shadow">
                  <div class="card-body">
                      Socket 2
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
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
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-info text-white shadow">
                  <div class="card-body">
                      Socket 3
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
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
                  </div>
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
