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
                                    
<form action="" method="post" enctype="multipart/form-data" id="first">
<div class="margn">
<input class="dateD" type="date" name ="word">
  <input class="dateD" type="date"  name ="keyword">
  <button name ="search" class="btn btn-outline-warning" ><i class="fas fa-search"></i></button>
  </div> 
  </form>
  <div class="pos1" >
            <h5>Prenatal Record</h5>
        </div> 
<?php
  if(isset($_POST['search'])){
    $Date1 =$_POST['word'];
    $Date2=$_POST['keyword'];

?>             
   <div class="sideReport1">
<button onclick ="window.print();" id ="print2" class="btn btn-info" ><i class="fas fa-print"></i></button>
</div>              
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                               
                                
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
                                <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from prenatal INNER JOIN resident ON prenatal.resident_ID = resident.resident_ID INNER JOIN maternity ON prenatal.Maternity_id = maternity.Maternity_id WHERE Remarks='OK' AND DOI BETWEEN '$Date1' AND '$Date2'");
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
                                <td><?php echo $Purok['Remarks']   ?></td>
                             
                                
                              
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

                          
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th >Weight</th>
                                <th>Bp</th>
                                <th>Temp</th>
                                <th>Weeks</th>
                                <th>Vaccine</th>
                                <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from prenatal INNER JOIN resident ON prenatal.resident_ID = resident.resident_ID INNER JOIN maternity ON prenatal.Maternity_id = maternity.Maternity_id WHERE Remarks='OK'");
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
                                <td><?php echo $Purok['Remarks']   ?></td>
                             
                                
                              
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


   



</body>

</html>