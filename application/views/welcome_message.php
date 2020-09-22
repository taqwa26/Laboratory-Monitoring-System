<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_partials/head.php") ?>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

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

          <h2><?php echo SITE_NAME?></h2>

          <!-- Topbar Navbar -->
                  </nav>
        <!-- End of Topbar -->

        
        <!-- breadcrumb -->
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
        <!-- End of breadcrumb -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?php echo site_url('admin') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sign-in-alt fa-sm text-white-50"></i> Login Admin</a>            
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
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $power1 ?></div></td>
                        </tr>
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $current1 ?></div></td>
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
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $power2 ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $current2 ?></div></td>
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
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $power3 ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $current3 ?></div></td>
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
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $power4 ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $current4 ?></div></td>
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
          </div>

          <div class="row">

            <div class="col-lg-6">

              <!-- Default Card Example -->
              <?php
               foreach($charth as $chart){
                $pw[] = $chart->power;
                $tm[] = date("H:i", substr("$chart->time", 0, 10));
               }
            	?>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chart Power Usage / Hours</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.js') ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
                <canvas id="myAreaChart1" width="100%" height="30"></canvas>
                <script>
                  var ctx = document.getElementById("myAreaChart1");
                  var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: <?php echo json_encode($tm);?>,
                      datasets: [{
                        label: "Power (Watt/Hours)",
                        lineTension: 0.3,
                        backgroundColor: "rgba(2,117,216,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(2,117,216,1)",
                        pointBorderColor: "rgba(255,255,255,0.8)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        data: <?php echo json_encode($pw);?>,
                      }],
                    },
                    options: {
                      scales: {
                        xAxes: [{
                          time: {
                            unit: 'date'
                          },
                          gridLines: {
                            display: true
                          },
                          ticks: {
                            maxTicksLimit: 10
                          }
                        }],
                        yAxes: [{
                          ticks: {
                            min: 0,
                            max: 30000,
                            maxTicksLimit: 5
                          },
                          gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                          }
                        }],
                      },
                      legend: {
                        display: true
                      }
                    }
                  });
                </script>
                </div>
                  <hr>
                  chart of power usage across the room each 1 hours 
                </div>
              </div>

              <!-- Basic Card Example -->
              <?php
               foreach($chartd as $chart){
                $power[] = $chart->power;
                $time[] = date("d-m-Y", substr("$chart->time", 0, 10));
               }
            	?>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chart Power Usage / Days </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.js') ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
                <canvas id="myAreaChart2" width="100%" height="30"></canvas>
                <script>
                  var ctx = document.getElementById("myAreaChart2");
                  var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: <?php echo json_encode($time);?>,
                      datasets: [{
                        label: "Power (Watt/Hours)",
                        lineTension: 0.3,
                        backgroundColor: "rgba(2,117,216,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(2,117,216,1)",
                        pointBorderColor: "rgba(255,255,255,0.8)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        data: <?php echo json_encode($power);?>,
                      }],
                    },
                    options: {
                      scales: {
                        xAxes: [{
                          time: {
                            unit: 'date'
                          },
                          gridLines: {
                            display: true
                          },
                          ticks: {
                            maxTicksLimit: 10
                          }
                        }],
                        yAxes: [{
                          ticks: {
                            min: 0,
                            max: 100000,
                            maxTicksLimit: 5
                          },
                          gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                          }
                        }],
                      },
                      legend: {
                        display: true
                      }
                    }
                  });
                </script>
                </div>
                  <hr>
                  chart of power usage across the room each days 
                </div>
              </div>

            </div>

            <div class="col-lg-6">

              <!-- Dropdown Card Example -->
              <?php
               foreach($chartm as $chart){
                $pwr[] = $chart->power;
                $tme[] = date("d-m-Y", substr("$chart->time", 0, 10));
               }
            	?>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chart Power Usage / Month </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.js') ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
                <canvas id="myAreaChart3" width="100%" height="30"></canvas>
                <script>
                  var ctx = document.getElementById("myAreaChart3");
                  var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: <?php echo json_encode($tme);?>,
                      datasets: [{
                        label: "Power (Watt/Hours)",
                        lineTension: 0.3,
                        backgroundColor: "rgba(2,117,216,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(2,117,216,1)",
                        pointBorderColor: "rgba(255,255,255,0.8)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        data: <?php echo json_encode($pwr);?>,
                      }],
                    },
                    options: {
                      scales: {
                        xAxes: [{
                          time: {
                            unit: 'date'
                          },
                          gridLines: {
                            display: true
                          },
                          ticks: {
                            maxTicksLimit: 10
                          }
                        }],
                        yAxes: [{
                          ticks: {
                            min: 0,
                            max: 1000000,
                            maxTicksLimit: 5
                          },
                          gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                          }
                        }],
                      },
                      legend: {
                        display: true
                      }
                    }
                  });
                </script>
                </div>
                  <hr>
                  chart of power usage across the room each month 
                </div>
              </div>

              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Information</h6>
                </div>
                <div class="card-body">
                  <p>This is card information about calculation power usage of all the room</p>
                  <p>===============================================================================</p>
                  <hr>
                  <table cellpadding="10">
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Currently</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td align="right"><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $powerh ?></div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                  </tr>
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Yesterday</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td align="right"><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $powerd ?></div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Today From Last Month</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                     <td align="right"><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $powers ?></div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Last Month</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                     <td align="right"><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $powerm ?></div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                 </table>
                </div>
                <hr>
                <a onclick="deleteConfirm('<?php echo site_url('admin/overview/reset') ?>')" href="#!" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-trash fa-sm text-white-50"></i> Reset</a>
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

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>
