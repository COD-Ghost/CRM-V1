<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Style/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Style/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $username = $password = "";
      if (empty($_POST['username']) || empty($_POST['password'])) {
        //header('Location: 404.php');
        //echo ('<script>alert("Username and password are required")</script>');
      } else {
        $username = CheckInput($_POST['username']);
        $password = CheckInput($_POST['password']);
        if ($username == "ghost") {
          echo ('    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Welcome ' . $username . '</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>

                <div class="progress-group">
                  Add Products to Cart
                  <span class="float-right"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Complete Purchase
                  <span class="float-right"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Visit Premium Page</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  Send Inquiries
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">35,210.43 Dhs</h5>
                  <span class="description-text">TOTAL REVENUE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">10,390.90 Dhs</h5>
                  <span class="description-text">TOTAL COST</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">24,813.53 Dhs</h5>
                  <span class="description-text">TOTAL PROFIT</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">GOAL COMPLETIONS</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>');
        }

        if ($username == "wolf") {
          echo ('            <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Welcome ' . $username . '</h3>
            <div class="card-tools">
              <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
              </a>
              <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
              <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Sales</th>
                <th>More</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>
                  <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Some Product
                </td>
                <td>$13 USD</td>
                <td>
                  <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    12%
                  </small>
                  12,000 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Another Product
                </td>
                <td>$29 USD</td>
                <td>
                  <small class="text-warning mr-1">
                    <i class="fas fa-arrow-down"></i>
                    0.5%
                  </small>
                  123,234 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Amazing Product
                </td>
                <td>$1,230 USD</td>
                <td>
                  <small class="text-danger mr-1">
                    <i class="fas fa-arrow-down"></i>
                    3%
                  </small>
                  198 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                  Perfect Item
                  <span class="badge bg-danger">NEW</span>
                </td>
                <td>$199 USD</td>
                <td>
                  <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    63%
                  </small>
                  87 Sold
                </td>
                <td>
                  <a href="#" class="text-muted">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>');
        }
      }
    }

    function CheckInput($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>


    <!-- /.row -->


  </div>
  <script src="Style/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="Style/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="Style/js/adminlte.js"></script>

  <!-- ChartJS -->
  <script src="Style/js/Chart.min.js"></script>

  <!-- PAGE SCRIPTS -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>