<?php
include_once 'bhwhead.php';
include_once("Db_connect/connection.php");


?>


<?php


?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    <div class="pos1">
            <h5>Female</h5>
        </div>

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
                <div  class="card-body">
                      <div class="table-responsive">


                      
                          <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                      
                          
                      <thead class ="alert-info">
                      <tr>

                      <th >Resident Id</th>
                      <th >Purok </th>
                          <th >First Name</th>
                          <th >Last Name</th>
                          <th >Age</th>
                       
                          <th >Gender</th>
                          <th >Action</th>
                         
                      </tr>
                      </thead>
                      <tbody>
                      <?php

                      $statement =$conn->prepare("SELECT * from resident WHERE R_gender='Female'");
                      $statement->execute();
                      while($resident=$statement->fetch()){
                          
                        $today =date("Y-m-d");
                        $bdate1=$resident['R_birthdate'];
                        $diff=date_diff(date_create($bdate1),date_create($today));
                        $age=$diff->format('%y');?>
                      <tr>
                      <td><?php echo $resident['resident_ID']   ?></td>
                          <td><?php echo $resident['P_id']   ?></td>
                          <td><?php echo $resident['R_firstname']   ?></td>
                          <td><?php echo $resident['R_Lastname']   ?></td>
                          <td><?php echo $age?></td>
                          
                          <td><?php echo $resident['R_gender']   ?></td>
                          <td>
                          <a href="#edit2_<?php echo $resident['resident_ID']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                    <?php include('Views/adviewresmodal.php'); ?>
                                
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
//     $(".multipleselect1").select2({

// });
</script>
    <!-- update script -->

 



</body>

</html>