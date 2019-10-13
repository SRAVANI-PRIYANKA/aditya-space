<?php include 'connect.php';?>
<?php
   if(! empty( $_POST ) )
   {
   
    if (($_FILES['certificate']['name']!="")){
       $uploaddir = 'upload/';
    $uploadfile = $uploaddir . basename($_FILES['certificate']['name']);
    if (move_uploaded_file($_FILES['certificate']['tmp_name'], $uploadfile)) {
   $faculty_name=$_POST['faculty_name'];
   $eid=$_POST['eid'];
   $academic_year=$_POST['academic_year'];
   $event_attended=$_POST['event_attended'];
   $institute_organized=$_POST['institute_organized'];
   $event_place=$_POST['event_place'];
   $from_date=$_POST['from_date'];
   $to_date=$_POST['to_date'];
   $total_days=$_POST['total_days'];
   $remarks=$_POST['remarks'];
   $sql = "INSERT INTO workshops 
   VALUES ('','{$faculty_name}','{$eid}','{$academic_year}', '{$event_attended}', '{$institute_organized}','{$event_place}','{$from_date}','{$to_date}','{$total_days}','{$uploadfile}','{$remarks}')";
   if (mysqli_query($conn, $sql)) {
       echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>hurray !</strong> Workshop Successfully added
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";  
   } else {
       echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Error</strong>".mysqli_error($conn)."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
   }
    }
   else { 
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Error</strong>While Uploading<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
   }
   
     mysqli_close($conn);
   
    }
   }
   
   
   
   
   
   
 
 
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
      <style type="text/css">
         .align-items-center{
         align-items: center;
         width: 100%;
         padding: 40px;
         }
      </style>
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
     
            <!-- Nav Item - Tables -->
            <li class="nav-item">
               <a class="nav-link" href="data.php">
               <i class="fas fa-fw fa-table"></i>
               <span>Data Tables</span></a>
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
                        <input  type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                  <!-- Content Row -->
                  <div class="row jumbotron">
                     <form class="align-items-center" enctype="multipart/form-data" method="POST" action="">
                        <fieldset>
                           <center>
                              <u>
                                 <h1 >Workshops</h1>
                              </u>
                           </center>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Name Of The Faculty:</label>
                              <div class="col-md-5"><input readonly="true" class="form-control input-md" name="faculty_name"  value="<?php echo $_SESSION["name"] ?>" type="text"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Emp Id:</label>
                              <div class="col-md-5"><input readonly="true" class="form-control input-md"   value="<?php echo $_SESSION["eid"] ?>" type="text" name="eid"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Choose Academic year</label>
                              <div class="col-md-5"> <input class="form-control  input-md" id="year" type="text" name="academic_year" >
                              </div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Event Attended:</label>
                              <div class="col-md-5">
                                 <select name="event_attended"
                                    class="form-control input-md">
                                    <option value="FDP/FIP">FDP/FIP</option>
                                    <option value="WORKSHOP">WORKSHOP</option>
                                    <option value="TRAINING">TRAINING</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Title of the event</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name=""></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Name Of The Institute Organised The Event</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="institute_organized"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Place Of The Event Organised</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="event_place"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Duration Date-from: </label> 
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="from_date"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Duration Date-to:</label>  
                              <div class="col-md-5"><input class="form-control input-md" type="date" name="to_date"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Total Number Of Days: </label>
                              <div class="col-md-5"><input  class="form-control input-md" type="number" name="total_days" min="1" max="100">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Upload Certificate:</label>
                              <div class="col-md-5"><input name="certificate" class="form-control input-md" type="file" id="myFile"></div>
                           </div>
                           <div class="form-group row">
                              <label  class="col-md-4 form-control-label" >Remarks</label>
                              <div class="col-md-5"><input class="form-control input-md" type="text" name="remarks"></div>
                           </div>
                           <center><button>submit</button></center>
                  </div>
                  </fieldset>
                  </form>
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
      <script type="text/javascript">
         $("#year").datepicker({
          format: "yyyy",
          viewMode: "years", 
          minViewMode: "years"
         });
      </script>
   </body>
</html>