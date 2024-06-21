<?php
include_once 'bhwhead.php';
include_once("Db_connect/connection.php");



?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
      

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <div class="pos1">
            <h5>Barangay Purok</h5>
        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                <?php
                              
                              if(isset($_GET["error"])){
                                  if($_GET["error"]== "purok"){
                                  echo "<script> alert('You cant delete this data,Please Delete first the connected data');</script>";
                                  }
                                  
                              
                              }
                                
                             ?>
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Purok ID</th>
                                <th >Name</th>
                               
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * FROM `purok` ");
                            $statement->execute();
                            while($Purok=$statement->fetch()){
                               
                                ?>
                            <tr>
                                <td><?php echo $Purok['P_id']   ?></td>
                                <td><?php echo $Purok['P_name']   ?></td>
                              
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="bhwpurokres.php?id=<?php echo $Purok['P_id']?>"class="btn btn-light"><i class="fas fa-eye"></i></a>
                          
                        
                                </td>

                              
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


    <!-- update script -->



</body>

</html>