<body id="page-top">
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
            
            <a href="#" class="btn btn-primary btn-icon-split">
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
                  <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg" />
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
                <form class="table" action="<?= base_url('home/insertip') ?>" method="post">
                        <tr>
                            <td>IP Address</td>
                            <td>:</td>
                            <td><input  type="text" name="ip" required></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>:</td>
                            <td><input type="text" name="lokasi" required></td>
                        </tr>
                        <input class="btn btn-primary" type="submit">
                </form>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead?>    
                <tr>
                        <td><b>IP Address</b></td>
                        <td><b>Lokasi</b></td>
                        <td><b>Status</b></td>
                    </tr>
</thead>
                    <?php
                    $count = 0;
                    foreach ($data_cctv as $row) {

                        $count = $count + 1;
                    ?>
                    <tfoot>
                        <tr>
                            <td><?php echo $row->ip ?></td>
                            <td><?php echo $row->lokasi ?></td>
                            <td>
                                <?php
                                // $ip = $row->ip;
                                // $ping = exec("ping -n 1 $ip", $output, $status);
                                // if ($status === 0) {
                                //     echo "Online";
                                // } else {
                                //     echo "Offline";
                                // }

                                ?>
                            </td>
                        </tr>
                                </tfoot>
                    <?php } ?>
                </table>
                    </div>
</body>

