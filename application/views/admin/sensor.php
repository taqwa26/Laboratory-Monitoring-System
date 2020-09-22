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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center">
                  <thead>
                    <tr>
                      <th width = "60%">Time</th>
                      <th>Current (A)</th>
                      <th>Power (W)</th>
                    </tr>
                  </thead>                  
                  <tbody>
                  <?php foreach ($chart as $data): ?>
                    <tr>
                      <td><?php echo date("H:i | d:m:Y", substr("$data->time", 0, 10)) ?></td>
                      <td><?php echo $data->current ?></td>
                      <td><?php echo $data->power ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Area Chart -->
          <?php
               foreach($chart as $data){
                $power1[] = $data->power;
                // $time1[] = date("H:i | d-m-Y", substr("$data->time", 0, 10));
                $time1[] = date("H:i", substr("$data->time", 0, 10));
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
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
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