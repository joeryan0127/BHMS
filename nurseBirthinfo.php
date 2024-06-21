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
                  
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <div class="pos1" >
            <h5>Child Info</h5>
        </div> 
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >ID</th>
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Sex</th>
                                <th>Birthdate</th>
                              
                                <th>Weight</th>
                                <th>Height</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from newborn INNER JOIN resident on newborn.resident_ID = resident.resident_ID ");
                            $statement->execute();
                            while($Patient=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$Patient['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%m');

                                ?>

                            <tr>
                            <td><?php echo $Patient['C_id']?></td>
                                <td><?php echo $Patient['R_firstname']?></td>
                                <td><?php echo $Patient['R_Lastname']?></td>
                                <td><?php echo $Patient['R_gender']?></td>
                                <td><?php echo $Patient['R_birthdate']?></td>
                               
                                <td><?php echo $Patient['C_wt']?></td>
                                <td><?php echo $Patient['C_ht']?></td>
                                
                                <td>
                              
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit3_<?php echo $Patient['resident_ID']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                            <?php include('Views/Babyview.php'); ?>

                      
                            
                        
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
<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> -->
                <div class="modal-body">

                <form  action="bhwhealth/childdel.php" method="post" enctype="multipart/form-data">

                <input type ="hidden" class = "text1" name= "id1" id="id1"placeholder ="Position" readonly>


               <center> DO YOU WANT TO DELETE THIS DATA?</center>
               
               </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name ="del">Delete</button>
                </div>

                </form>
            </div>
        </div>
    </div>

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