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
                   
<form action="" method="post" enctype="multipart/form-data" id="first">
<div class="margn">
<input class="dateD"  type="date" name ="word">
  <input class="dateD" type="date"  name ="keyword">
  <button name ="search" class="btn btn-outline-warning"><i class="fas fa-search"></i></button>
   </div>  
  </form>
  <div class="pos1" >
            <h5>Child Record</h5>
        </div> 
<?php
  if(isset($_POST['search'])){
    $Date1 =$_POST['word'];
    $Date2=$_POST['keyword'];

?>             
                    
                    <div class="sideReport1">
<button onclick ="window.print();" id ="print2" class="btn btn-info" ><i class="fas fa-print"></i></button>
</div>    
             
          
               
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >ID</th>
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Sex</th>
                                <th>Birthdate</th>
                                <th>Birth Place</th>
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Mother</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from newborn INNER JOIN resident on newborn.resident_ID = resident.resident_ID WHERE R_birthdate BETWEEN '$Date1' AND '$Date2'AND (TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) )<=1");
                            $statement->execute();
                            while($Patient=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$Patient['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%m');
                                $C_parent=$Patient['C_Parent'];
                                ?>
   <?php
                                $statement1 =$conn->prepare("SELECT * from maternity INNER JOIN resident on maternity.resident_ID = resident.resident_ID WHERE Maternity_id LIKE $C_parent");
                                $statement1->execute();
                                while($Mother=$statement1->fetch()){
                                    $mother= $Mother['R_firstname'];
                                    $Last= $Mother['R_Lastname'];
                               
                                ?>

                            <tr>
                            <td><?php echo $Patient['C_id']?></td>
                                <td><?php echo $Patient['R_firstname']?></td>
                                <td><?php echo $Patient['R_Lastname']?></td>
                                <td><?php echo $Patient['R_gender']?></td>
                                <td><?php echo $Patient['R_birthdate']?></td>
                                <td><?php echo $Patient['R_Birthplace']?></td>
                                <td><?php echo $Patient['C_wt']?></td>
                                <td><?php echo $Patient['C_ht']?></td>
                                <td><?php echo $mother.' '. $Last ?></td>
                                <td>
                              
                           

                              
                            </tr>


                            <?php
                            }
                        }


                            ?>

                            </tbody>

                            </table>
                            <?php
                        }else{?>

<div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0" >
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >ID</th>
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Sex</th>
                                <th>Birthdate</th>
                                <th>Birth Place</th>
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Mother</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from newborn INNER JOIN resident on newborn.resident_ID = resident.resident_ID WHERE (TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) )<=1");
                            $statement->execute();
                            while($Patient=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$Patient['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%m');
                                $C_parent=$Patient['C_Parent'];
                                ?>

                            <?php
                                $statement1 =$conn->prepare("SELECT * from maternity INNER JOIN resident on maternity.resident_ID = resident.resident_ID WHERE Maternity_id LIKE $C_parent");
                                $statement1->execute();
                                while($Mother=$statement1->fetch()){
                                    $mother= $Mother['R_firstname'];
                                    $Last= $Mother['R_Lastname'];
                               
                              ?>

                            <tr>
                            <td><?php echo $Patient['C_id']?></td>
                                <td><?php echo $Patient['R_firstname']?></td>
                                <td><?php echo $Patient['R_Lastname']?></td>
                                <td><?php echo $Patient['R_gender']?></td>
                                <td><?php echo $Patient['R_birthdate']?></td>
                                <td><?php echo $Patient['R_Birthplace']?></td>
                                <td><?php echo $Patient['C_wt']?></td>
                                <td><?php echo $Patient['C_ht']?></td>
                                <td><?php echo $mother.' '. $Last ?></td>
                               
                           

                              
                            </tr>


                            <?php
                            }
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