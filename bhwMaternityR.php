<?php
include_once 'bhwhead.php';
include_once("Db_connect/connection.php");
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');

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
  <button name ="search1" class="btn btn-outline-warning"><i class="fas fa-search"></i></button>
 </div> 
  </form>
  <div class="pos1" >
            <h5>Maternity Record</h5>
        </div> 
<?php
  if(isset($_POST['search1'])){
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

                            <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th>Temp</th>
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Pulse Rate</th>
                                <th>Edc</th>
                                <th>Aog</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from maternity INNER JOIN resident on maternity.resident_ID = resident.resident_ID WHERE Dates BETWEEN '$Date1' AND '$Date2' AND Edc>$date");
                            $statement->execute();
                            while($Patient=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$Patient['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%m');

                                ?>

                            <tr>
                              <td><?php echo $Patient['R_firstname']?></td>
                                <td><?php echo $Patient['R_Lastname']?></td>
                                <td><?php echo $Patient['age']?></td>
                                <td><?php echo $Patient['temp']?></td>
                                <td><?php echo $Patient['Wt']?></td>
                                <td><?php echo $Patient['Ht']?></td>
                                <td><?php echo $Patient['Pr']?></td>
                                <td><?php echo $Patient['Edc']?></td>
                                
                                <td><?php echo $Patient['Aog']?></td>
                              
                              
                           

                              
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
                                <table class="table table-borderless"id="dataTable" width="100%" cellspacing="0" >
                               
                                
                            <thead class ="alert-info">
                            <tr>

                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th>Temp</th>
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Pulse Rate</th>
                                <th>Edc</th>
                                <th>Aog</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from maternity INNER JOIN resident on maternity.resident_ID = resident.resident_ID WHERE Edc>$date");
                            $statement->execute();
                            while($Patient=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$Patient['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%m');

                                ?>

                            <tr>
                                <td><?php echo $Patient['R_firstname']?></td>
                                <td><?php echo $Patient['R_Lastname']?></td>
                                <td><?php echo $Patient['age']?></td>
                                <td><?php echo $Patient['temp']?></td>
                                <td><?php echo $Patient['Wt']?></td>
                                <td><?php echo $Patient['Ht']?></td>
                                <td><?php echo $Patient['Pr']?></td>
                                <td><?php echo $Patient['Edc']?></td>
                                
                                <td><?php echo $Patient['Aog']?></td>
                               
                              
                           

                              
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