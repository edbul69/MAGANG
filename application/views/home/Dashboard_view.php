
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

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

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
              <h1 class="h3 mb-0 text-gray-800">Menu CCTV</h1>
            </div>

            <div class="row">
              <!-- Collapsable Card Example 1 -->
              <div class="col-xl-2 col-md-4 mb-2">
                <div class="card shadow mb-4 border-left-success">
                  <!-- Card Header - Accordion -->
                  <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Nama CCTV</h6>
                  </a>
                  <div class="collapse hidden" id="collapseCardExample1">
                    <div class="card-body">
                      <img src="assets\img\cctv.jpg" class="rounded-circle" alt="" width="100%" />
                      <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" style="margin-top: 2ch">
                          <tr>
                            <th>IP</th>
                            <th>0.0.0.0</th>
                          </tr>  
                          <tr>
                            <th>Status</th>
                            <th class="text-primary">Aktif</th>
                          </tr>
                          <tr>
                            <th>Lokasi</th>
                            <th>Jl. P. Sumatera Kel. Bahu Kec. Malalayang</th>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <a href="details.html" class="d-block card-header py-3" role="button">
                      <h6 class="m-0 font-weight-bold text-warning">Lihat Detail</h6>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Collapsable Card Example 2 -->
              <div class="col-xl-2 col-md-4 mb-2">
                <div class="card shadow mb-4 border-left-danger">
                  <!-- Card Header - Accordion -->
                  <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Nama CCTV</h6>
                  </a>
                  <div class="collapse hidden" id="collapseCardExample2">
                    <div class="card-body">
                      <img src="assets\img\cctv.jpg" class="rounded-circle" alt="" width="100%" />
                      <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" style="margin-top: 2ch">
                          <tr>
                            <th>IP</th>
                            <th>0.0.0.0</th>
                          </tr>  
                          <tr>
                            <th>Status</th>
                            <th class="text">Tidak Aktif</th>
                          </tr>
                          <tr>
                            <th>Lokasi</th>
                            <th>Jl. P. Sumatera Kel. Bahu Kec. Malalayang</th>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <a href="details.html" class="d-block card-header py-3" role="button">
                      <h6 class="m-0 font-weight-bold text-warning">Lihat Detail</h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </body>
