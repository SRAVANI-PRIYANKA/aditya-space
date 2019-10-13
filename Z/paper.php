<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Aditya Space</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="  fab fa-studiovinari"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Aditya Space<sup>3</sup></div>
         </a>
         <!-- Divider -->
         <hr class="sidebar-divider my-0">
         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider">
         <!-- Heading -->
         <div class="sidebar-heading">
            Categories
         </div>
         <li class="nav-item">
            <a class="nav-link" href="workshop.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>WorkShop</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="paper.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Paper Publication</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="achievements.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Acheivement</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="lectures.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Guest Lecture</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="nptel.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>NPTEL</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="training.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Industry / Sabattical Research Training</span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider">
         <!-- Heading -->
         <div class="sidebar-heading">
            Data
         </div>
         <!-- Nav Item - Charts -->
       
         <!-- Nav Item - Tables -->
         <li class="nav-item">
            <a class="nav-link" href="data.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Data </span></a>
         </li>
       
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">
         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
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
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                              <div class="col-md-5">
                                 <input class="form-control input-md" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["name"]; ?></span>
                  <img class="img-profile rounded-circle" src="https://image.flaticon.com/icons/svg/145/145867.svg">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/cs/z/logout.php" data-toggle="modal" data-target="#logoutModal">
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
           
            <!-- Content Row -->
            <div class="row">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Journal</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Conference</a>
            </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form>
              <center>
                              <u>
                                 <h1 >Journal</h1>
                              </u>
                           </center>
                   <div class="form-group row">
                      <label class="col-md-4 form-control-label">Journal type</label>
                       <div class="col-md-5">
            <select class="form-control input-md" >
            <option>National</option>
            <option>International</option>
            </select></div>
            </div>      
             <div class="form-group row">
            <label class="col-md-4 form-control-label">Name of the Journal:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Name of the Paper:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Co-author(if any):</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Volume no:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Issue no:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Year:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Impact fact:</label>
             <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
          </div>
           <div class="form-group row">
            <label class="col-md-4 form-control-label">Type of the for:</label>
              <div class="col-md-5">
            <input  type="checkbox" name="" value="">UGC
            <input  type="checkbox" name="" value="">SCI/SCOPUS
            <input  type="checkbox" name=""value="">WPS
          </div>
            </div>
             <div class="form-group row">
            <label class="col-md-4 form-control-label">Upload:</label>
             <div class="col-md-5"><input class="form-control input-md" type="file" id="myFile"></div>
            </div>
            <center><button>submit</button></center>
            </form>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form>
                  <center>
                              <u>
                                 <h1 >Conference</h1>
                              </u>
                           </center>
              <div class="form-group row">
       <label class="col-md-4 form-control-label">Conference Type :</label>
       <div class="col-md-5">
    <select class="form-control input-md">
      <option>National</option>
      <option>International</option></select>
    </select>
</div>
</div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Name of the Conference:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Name of the Paper:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Venue of the conference:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Date from:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Number of Days:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Is Conference associated with:</label>
     <div class="col-md-5"><input type="radio" name="choose" value="Yes" >Yes
     <input type="radio" name="choose" value="No" > No
</div></div>
     <div class="form-group row">
    <label class="col-md-4 form-control-label">Name of the Journal:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name="">
</div></div>
  <div class="form-group row">
    <label class="col-md-4 form-control-label">Name of the Paper:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name=""></div></div>
      <div class="form-group row">
    <label class="col-md-4 form-control-label">Co-author(if any):</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name=""></div></div>
      <div class="form-group row">
    <label class="col-md-4 form-control-label">Volume no:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name=""></div></div>
      <div class="form-group row">
    <label class="col-md-4 form-control-label">Issue no:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name=""></div></div>
      <div class="form-group row">
    <label class="col-md-4 form-control-label">Year:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name=""></div></div>
      <div class="form-group row">
    <label class="col-md-4 form-control-label">Impact fact:</label>
     <div class="col-md-5"><input class="form-control input-md"type="text" name=""></div></div>
      <div class="form-group row">
    <label class="col-md-4 form-control-label">Type of the for:</label>
    <div class="col-md-5">
       <input type="checkbox" name="" value="">UGC
       <input type="checkbox" name="" value="">SCI/SCOPUS
       <input type="checkbox" name=""value="">WPS

    </div></div>


      <div class="form-group row">
    <label class="col-md-4 form-control-label">Upload:</label>
     <div class="col-md-5"><input class="form-control input-md"type="file" id="myFile">
    </div></div>
    <center><button>submit</button></center>
   
            </form>

            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Your Website 2019</span>
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
                  <a class="btn btn-primary" href="/cs/z/logout.php">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>
   </body>
</html>