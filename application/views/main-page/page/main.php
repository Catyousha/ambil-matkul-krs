<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Rancang KRS</div>
         </a>
         <!-- Divider -->
         <hr class="sidebar-divider my-0">
         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">
         <!-- Sidebar Toggler (Sidebar) -->
         <div class="mt-4 text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
      </ul>
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
               <!-- Topbar Search -->
               <form
                  class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
               </form>
               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="mr-2 d-none d-lg-inline text-gray-600 small">Arkatama Ardiya</span>
                     <img class="img-profile rounded-circle"
                        src="<?=base_url('assets/img/undraw_profile.svg')?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
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
               <h1 class="h3 mb-2 text-gray-800">Menu Rancang KRS</h1>
               <p class="mb-4">Silahkan ambil mata kuliah yang tersedia dan pastikan memenuhi persyaratan yang ada.</p>
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Daftar Mata Kuliah</h6>
                     <?= matkul["id"][0]?>

                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-sm-12">
                                 <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                       <tr role="row">
                                          <th rowspan="1" colspan="1" style="width: 38px;">Check Untuk Ambil</th>
                                          <th rowspan="1" colspan="1" style="width: 61px;">Kode Mata Kuliah</th>
										  <th rowspan="1" colspan="1" style="width: 50px;">Nama Mata Kuliah</th>
										  <th rowspan="1" colspan="1" style="width: 50px;">Jadwal</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr role="row">
                                          <td><input style="width: 20px; height: 20px;" type="checkbox" name="" id=""></td>
                                          <td>NINF6023</td>
										  <td>Rekayasa Perangkat Lunak</td>
										  <td>Senin, 07:00-09:35</td>
									   </tr>
									   <tr role="row">
                                          <td><input style="width: 20px; height: 20px;" type="checkbox" name="" id=""></td>
                                          <td>NINF6030</td>
										  <td>Proyek Perangkat Lunak</td>
										  <td>Senin, 09:35-12:10</td>
									   </tr>
									   <tr role="row">
                                          <td><input style="width: 20px; height: 20px;" type="checkbox" name="" id=""></td>
                                          <td>NINF6033</td>
										  <td>Analisis dan Desain Sistem</td>
										  <td>Senin, 11:20-15:30</td>
                                       </tr>
                                    </tbody>
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
         <footer class="sticky-footer bg-white">
            <div class="container my-auto">
               <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2020</span>
               </div>
            </div>
         </footer>
         <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
   </div>
   <!-- End of Page Wrapper -->
   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
   </a>
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
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
