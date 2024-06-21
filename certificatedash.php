<?php
include_once 'header1.php';
include_once("Db_connect/connection.php");

$statement =$conn->prepare("SELECT count(*) from officials");
$statement->execute();
$official=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from certificate WHERE Approve ='Approve' AND Certificate ='Cutting Tree Permit' AND Remarks =''");
$statement->execute();
$certificate=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from certificate WHERE Approve ='Approve' AND Certificate ='Barangay Clearance' AND Remarks =''");
$statement->execute();
$Clearance=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from certificate WHERE Approve ='Approve' AND Certificate ='Barangay Residency' AND Remarks =''");
$statement->execute();
$Residency=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from certificate WHERE Approve ='Approve' AND Certificate ='Barangay Indigency' AND Remarks =''");
$statement->execute();
$Indigency=$statement->fetchColumn();
?>

<!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div> -->

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <a href ="SecClearance.php">Cutting Tree Permit</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$certificate</h5>" ?></div>
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
                          <a href ="SecBarangayclear.php">Barangay Clearance</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$Clearance</h5>" ?></div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <a href ="SecBarangayResidency.php">Barangay Residency</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$Residency</h5>" ?></div>
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
                        <a href ="SecBarangayindigency.php">Barangay Indigency</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$Indigency</h5>" ?></div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- purok -->

     <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <a href ="barangayofficial.php"> Purok</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$official</h5>" ?></div>
                    </div>
              
                </div>
            </div>
        </div>
    </div> -->
<!-- blotters -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <a href ="barangayofficial.php"> Blotters</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "<h5>$official</h5>" ?></div>
                    </div>
              
                </div>
            </div>
        </div>
    </div> -->

<!-- Accounts -->
      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Accounts</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div> -->



<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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