<?php
include_once 'nursehead.php';
include_once("Db_connect/connection.php");



?>


<?php


?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    
                    <div class="pos1" >
            <h5>Prenatal Record</h5>
        </div> 
                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                          
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th >Weight</th>
                                <th>Bp</th>
                                <th>Temp</th>
                                <th>Weeks</th>
                                <th>Vaccine</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from prenatal INNER JOIN resident ON prenatal.resident_ID = resident.resident_ID INNER JOIN maternity ON prenatal.Maternity_id = maternity.Maternity_id WHERE Remarks=''");
                            $statement->execute();
                            while($Purok=$statement->fetch()){
                             
                                
                                ?>
                            <tr>
                                <td><?php echo $Purok['R_firstname']   ?></td>
                                <td><?php echo $Purok['R_Lastname']   ?></td>
                                <td><?php echo $Purok['age']  ?></td>
                                <td><?php echo $Purok['Wt']   ?></td>
                                <td><?php echo $Purok['Bp']   ?></td>
                                <td><?php echo $Purok['temp']   ?></td>
                                <td><?php echo $Purok['week']   ?></td>
                                <td><?php echo $Purok['vaccine']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                           
                       
                            <a href="#edit2_<?php echo $Purok['prenatal_id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fas fa-check"></span></a>

                            <?php include('nurse/prenatal.php'); ?>
                            
                            <!-- <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fas fa-times"></i></a>
                            -->
                            </div>
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


   



</body>

</html>