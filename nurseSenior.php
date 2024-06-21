<?php
include_once 'nursehead.php';
include_once("Db_connect/connection.php");


?>


<?php



// $statement = $conn->prepare("SELECT * from officials");
// $statement =
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    
                 
                    <form action="" method="post" enctype="multipart/form-data" id="first">
<div class="side">
                <button class="btn btn-warning " name="Report"></i>Report</button>
              
</div>
</form>
<div class="pos1" >
            <h5>Senior Citizen Record</h5>
        </div> 
     <?php
  if(isset($_POST['Report'])){
   

?>  
  <div class="sideReport">
<button onclick ="window.print();" id ="print2" class="btn btn-info" ><i class="fas fa-print"></i></button>
</div>   
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                               
                                <thead class ="alert-info">
                                
                            <tr>
                    
                            <th >Resident Id</th>
                            <th >Purok </th>
                                <th >Firstname</th>
                                <th >Middlename</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th >Gender</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT *from resident INNER JOIN purok ON resident.P_id = purok.P_id WHERE(TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) )>=50 AND Remark!='Dead' ");
                            $statement->execute();
                            while($resident=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$resident['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%y');
                                ?>
                            <tr>
                                <td><?php echo $resident['resident_ID']   ?></td>
                                <td><?php echo $resident['P_name']   ?></td>
                                <td><?php echo $resident['R_firstname']   ?></td>
                                <td><?php echo $resident['R_Middilename']   ?></td>
                                <td><?php echo $resident['R_Lastname']   ?></td>
                                <td><?php echo $age ?></td>
                                <td><?php echo $resident['R_gender']   ?></td>
                             

                              
                            </tr>


                            <?php
                            }


                            ?>

                            </tbody>

                            </table>
                            <?php
                        }else{?>
                            <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                <thead class ="alert-info">
                                
                            <tr>
                    
                            <th >Resident ID</th>
                            <th >Purok </th>
                                <th >Firstname</th>
                                <th >Middlename</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th >Gender</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT *from resident INNER JOIN purok ON resident.P_id = purok.P_id WHERE(TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) )>=50 AND Remark!='Dead' ");
                            $statement->execute();
                            while($resident=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$resident['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%y');
                                ?>
                            <tr>
                                <td><?php echo $resident['resident_ID']   ?></td>
                                <td><?php echo $resident['P_name']   ?></td>
                                <td><?php echo $resident['R_firstname']   ?></td>
                                <td><?php echo $resident['R_Middilename']   ?></td>
                                <td><?php echo $resident['R_Lastname']   ?></td>
                                <td><?php echo $age ?></td>
                                <td><?php echo $resident['R_gender']   ?></td>
                             

                              
                            </tr>


                            <?php
                            }
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
  

   
<!-- delete script -->


</body>

</html>