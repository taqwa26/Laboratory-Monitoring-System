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
            <h1 class="h3 mb-0 text-gray-800">Room 1</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

             <!-- Area Chart -->
             <?php
               foreach($powerc2 as $data){
                $power1[] = $data->power;
                $time1[] = date("H:i | d-m-Y", substr("$data->time", 0, 10));
               }
            	?>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Power Usage / Hours</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.js') ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
                <script>
                  var ctx = document.getElementById("myAreaChart");
                  var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: <?php echo json_encode($time1);?>,
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
                        data: <?php echo json_encode($power1);?>,
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
                            max: 15000,
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
                  This chart power usage form Room 1 every 1 hours.
                </div>
              </div>

              <?php
               foreach($powerc5 as $data){
                $power[] = $data->power;
                $time[] = date("d-m-Y", substr("$data->time", 0, 10));
               }
            	?>
              <div class="card shadow mb-4">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Power Usage / Day</h6>
                </a>
                <div class="collapse" id="collapseCardExample">
                <div class="card-body">
                  <div class="chart-area">
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.js') ?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
                <canvas id="myChart" width="100%" height="30"></canvas>
                <script>
                  var ctx = document.getElementById("myChart");
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
                            max: 20000,
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
                  This chart power usage form Room 1 every day.
                </div>
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
                <?php foreach($powerc0 as $value): ?>
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Currently</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php $data=$value->power/1000; echo $data; ?></div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                  </tr>
                  <?php endforeach ?>
                  <?php foreach($powerc1 as $value): ?>
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Yesterday</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php $data=$value->power/1000; echo $data; ?></div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <?php endforeach ?>
                   <?php foreach($powerc3 as $value): ?>
                  <tr>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Today From Last Month</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php $data=$value->powerm/1000; echo $data; ?></div></td>
                    <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <?php endforeach ?>
                   <?php foreach($powerc4 as $value): ?>
                   <tr>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power Usage Last Month</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> <?php $data=$value->power/1000; echo $data; ?></div></td>
                     <td><div class="h5 mb-0 font-weight-bold text-gray-800"> KW/H</div></td>
                   </tr>
                   <?php endforeach ?>
                 </table>
                  <hr>
                  Information power usage form Room 1.
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
                      <?php foreach ($sensor1 as $lamp1): ?>
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp1->power ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp1->current ?></div></td>
                        </tr>
                      </table>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-warning text-white shadow">
                  <div class="card-body">
                      Lamp 2
                      <?php foreach ($sensor2 as $lamp2): ?>
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp2->power ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp2->current ?></div></td>
                        </tr>
                      </table>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-warning text-white shadow">
                  <div class="card-body">
                      Lamp 3
                      <?php foreach ($sensor3 as $lamp3): ?>
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp3->power ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp3->current ?></div></td>
                        </tr>
                      </table>
                      <?php endforeach ?>
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
                      <?php foreach ($sensor4 as $lamp4): ?>
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp4->power ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp4->current ?></div></td>
                        </tr>
                      </table>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-info text-white shadow">
                  <div class="card-body">
                      Socket 2
                      <?php foreach ($sensor5 as $lamp5): ?>
                      <table cellpadding="10">
                        <tr>
                          <td align=center>
                            <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                          </td>
                        </tr>
                        <tr>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800">Power (W)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp5->power ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp5->current ?></div></td>
                        </tr>
                      </table>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                <div class="card bg-info text-white shadow">
                  <div class="card-body">
                  <?php foreach ($sensor6 as $lamp6): ?>
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
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp6->power ?></div></td>
                        </tr>
                        <tr>
                        <td><div class="h5 mb-0 font-weight-bold text-gray-800">Current (A)</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"> :</div></td>
                          <td><div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $lamp6->current ?></div></td>
                        </tr>
                      </table>
                      <?php endforeach ?>
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