<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
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
            
            <a href="<?= base_url('index.php/home/dashboard') ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right rotate-90"></i>
                </span>
                <span class="text">Dashboard</span>
            </a>

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
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                  <img class="img-profile rounded-circle" src="assets/img/kominfo.png" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

           <!-- Begin Page Content -->
           <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">DAFTAR IP & LOKASI</h1>
            </div>

            <!--  tambah index.php d form action -->
                <form class="form mb-4" action="<?= base_url('index.php/home/insertip') ?>" method="post">
                  <table class="table">
                        <tr>
                            <th>IP Address</th>
                            <th>:</th>
                            <th><input  type="text" name="ip" required style="width:50%;"></th>
                        </tr>
                        <tr">
                            <th>Nama</th>
                            <th>:</th>
                            <th><input type="text" name="nama" required style="width:50%;"></th>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <th>:</th>
                            <th><input type="text" name="lokasi" required style="width:50%;"></th>
                        </tr>
                        </table>
                        <input class="btn btn-primary" type="submit">
                </form>

                <table id="tabelCCTV" class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>IP</th>
                              <th>Nama CCTV</th>
                              <th>Lokasi</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                          <?php
                                    $count = 0;
                                    foreach ($data_cctv as $row) {

                                        $count = $count + 1;
                                    ?>
                                        <tr>
                                            <td><?php echo $row->ip ?></td>
                                            <td><?php echo $row->nama ?></td>
                                            <td><?php echo $row->lokasi ?></td>
                                              <?php
                                              $ip = $row->ip;
                                              $ping = exec("ping -n 1 $ip", $output, $status);
                                              if ($status === 0) {
                                                  echo '<td class="text text-success">Online</td>';
                                              } else {
                                                  echo '<td class="text text-danger">Offline</td>';
                                              }
                                              ?>
                                        </tr>
                                    <?php } ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Lokasi</th>
                              <th>Status</th>
                          </tr>
                      </tfoot>
                  </table>
                    </div>

                    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#tabelCCTV').DataTable({
            searching: false,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "ALL"]]
          });
      } );
    </script>

 </body>

 </html>