<?php
include_once("Db_connect/connection.php");



?>


<?php
include_once 'nursehead.php';


// $statement = $conn->prepare("SELECT * from officials");
// $statement =
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="pos1" >
            <h5>User Logs</h5>
        </div> 

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          

                <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                <thead class ="alert-info">
                            <tr>

                            <th >Logs Id</th>
                                <th >Account ID</th>
                                <th >Date</th>
                                <th >Time</th>   
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from logs");
                            $statement->execute();
                            while($logs=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $logs['L_id']   ?></td>
                                <td><?php echo $logs['A_id']   ?></td>
                                <td><?php echo $logs['L_date']   ?></td>
                                <td><?php echo $logs['L_time']   ?></td>
                                <td><?php echo $logs['L_action']   ?></td>
                  

                              
                            </tr>


                            <?php
                            }


                            ?>

                            </tbody>

                            </table>
                         
                       
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

<!-- add officials -->
<!-- ############################################################################################################ -->
      
<!-- ################################################################################################ -->
        <!-- update modal -->

     

<!-- ######################################################################################################### -->
<!-- delete modal -->

       

    <!-- Logout Modal-->
  
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

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>