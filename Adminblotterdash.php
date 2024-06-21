<?php
include_once 'header.php';

include_once("Db_connect/connection.php");

$statement =$conn->prepare("SELECT count(*) from tblblotter WHERE status='Active' ");
$statement->execute();
$Active=$statement->fetchColumn();


$statement =$conn->prepare("SELECT count(*) from tblblotter WHERE status='Settled'");
$statement->execute();
$Settled=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from tblblotter WHERE status='Unsettled'");
$statement->execute();
$Unsettled=$statement->fetchColumn();


$statement =$conn->prepare("SELECT count(*) from tblblotter WHERE status='Report'");
$statement->execute();
$Report=$statement->fetchColumn();


 ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
     
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      
                                            <a href ="Adactiveblotter.php"> <h6>Active</h6></a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo"<h5>$Active</h5>" ?> </div>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- Resident -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          
                                              <a href ="Adsettledblotter.php"> <h6>Settled</h6></a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$Settled</h5>" ?></div>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- household -->

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                     
                                            <a href ="Adunsettledblotter.php"> <h6>Unsettled</h6></a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$Unsettled</h5>" ?></div>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
        <!-- purok -->

        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           
                                            <a href ="AdRblotter.php"> <h6>Report</h6></a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$Report</h5>" ?></div>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
          
            <!-- blotters -->
          

                <!-- Accounts -->
             
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                   
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