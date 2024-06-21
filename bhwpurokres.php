<?php
include_once("Db_connect/connection.php");

$id = $_GET['id']?? null;
if(!$id){

    header('Location: ../bhwpurok.php');
    
    exit;
    
    }
?>


<?php
include_once 'bhwhead.php';

$statement =$conn->prepare("SELECT count(*) from resident Where P_id=:id ");
$statement->bindParam(':id', $id);
$statement->execute();
$Resident=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from houshold Where P_id=:id");
$statement->bindParam(':id', $id);
$statement->execute();
$Household=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from resident Where P_id=:id AND Pwd ='Yes'");
$statement->bindParam(':id', $id);
$statement->execute();
$pwd=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from houshold Where P_id=:id AND govBenefits='4Ps'");
$statement->bindParam(':id', $id);
$statement->execute();
$Fps=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from resident Where P_id=:id AND (TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) )>=50");
$statement->bindParam(':id', $id);
$statement->execute();
$senior=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from resident Where P_id=:id AND R_gender='Male'");
$statement->bindParam(':id', $id);
$statement->execute();
$male=$statement->fetchColumn();

$statement =$conn->prepare("SELECT count(*) from resident Where P_id=:id AND R_gender='Female'");
$statement->bindParam(':id', $id);
$statement->execute();
$Fmale=$statement->fetchColumn();
// $statement = $conn->prepare("SELECT * from officials");
// $statement =
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                 
<!-- Resident -->

                    <div  class="card shadow mb-4 ">
                    <div class="tab">
                    <form action="" method="post" enctype="multipart/form-data">
  <button class="tablinks" name="london">Resident <label><?php echo "($Resident)" ?></label></button>
  <button class="tablinks" name="paris">Household <label><?php echo "($Household)" ?></button>
  <button class="tablinks" name="Paris1">Pwd <label><?php echo "($pwd)" ?></button>
  
  <button class="tablinks" name="Paris2">4Ps <label><?php echo "($Fps)" ?></label></button>
  <button class="tablinks" name="Paris3">Senior Cetizen <label><?php echo "($senior)" ?></label></button>
  <button class="tablinks" name="Paris4">Male <label><?php echo "($male)" ?></label></button>
  <button class="tablinks" name="Paris5">Female <label><?php echo "($Fmale)" ?></label></button>
</form>
</div>    
<?php
  if(isset($_POST['london'])){
  

?>   

                  <div id="London"  class="card-body">
                      <div class="table-responsive">


                      
                          <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                         <label>Resident</label>
                          
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

                      $statement =$conn->prepare("SELECT * from resident WHERE P_id LIKE '$id' ");
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
                
<!-- Household -->
<?php
                        }else   if(isset($_POST['paris'])) {?>
                  
                    

                  <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
            
  
                          <div class="card-body ">
                           <div class="table-responsive">
                                  <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                                  <label>Household</label> 
                                  
                              <thead class ="alert-info">
                              <tr>
  
                              <th >Household Id</th>
                              <th >Purok </th>
                                  <th >Member</th>
                                  <th >Head of Family</th>
                               
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                  
                              <?php
  
                              $statement =$conn->prepare("SELECT * from houshold WHERE 	P_id LIKE '$id' ");
                              $statement->execute();
                              while($resident1=$statement->fetch()){
                             
                                  ?>
                              <tr>
                              <td><?php echo $resident1['householdNO']   ?></td>
                              <td><?php echo $resident1['P_id']   ?></td>
                              <td><?php echo $resident1['H_member']   ?></td>
                              <td><?php echo $resident1['H_headoffamily']   ?></td>
                                  <td>
                    
                                  <a href="bhwviewhouse.php?id=<?php echo $resident1['householdNO']?>"class="btn btn-light"><i class="fas fa-eye"></i></a>
                
                              <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                             -->
                        
                             
                                  </td>
  
                                
                              </tr>
  
  
                              <?php
                              }
                          
                              ?>
  
                              </tbody>
  
                              </table>
                           
                 
                              </div>
                          </div>
                 
                       
  <!-- Pwd --><?php
                        }else   if(isset($_POST['Paris1'])) {?>
                    
                  <div  class="card shadow mb-4 ">
                  
                    

                  <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
            
  
                          <div id="Paris1" class="card-body">
                              
                           <div class="table-responsive">
                              <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                              <label>Pwd</label> 
                              <thead class ="alert-info">
                               
                           <tr>
                   
                           <th >Resident Id</th>
                           <th >Purok </th>
                               <th >First Name</th>
                               <th >Last Name</th>
                               <th >Age</th>
                               <th >Gender</th>
                               <th >Pwd</th>
                               <th >Action</th>

                           </tr>
                           </thead>
                           <tbody>
                           <?php

                           $statement =$conn->prepare("SELECT *from resident WHERE P_id LIKE '$id' AND Pwd ='Yes'");
                           $statement->execute();
                           while($resident=$statement->fetch()){
                               $today =date("Y-m-d");
                               $bdate1=$resident['R_birthdate'];
                               $diff=date_diff(date_create($bdate1),date_create($today));
                               $age=$diff->format('%y');
                               ?>
                           <tr>
                               <td><?php echo $resident['resident_ID']   ?></td>
                               <td><?php echo $resident['P_id']   ?></td>
                               <td><?php echo $resident['R_firstname']   ?></td>
                               <td><?php echo $resident['R_Lastname']   ?></td>
                               <td><?php echo $age ?></td>
                               
                                <td><?php echo $resident['R_gender']   ?></td>
                               <td><?php echo  $resident['Pwd']  ?></td>
                               <td>
                          <a href="#edit3_<?php echo $resident['resident_ID']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                    <?php include('Views/resView.php'); ?>
                                
                                </td>
                            
                           </tr>


                           <?php
                           }


                           ?>

                           </tbody>

                           </table>
                           
                 
                              </div>
                          </div>
                      
                          <?php
                        }else   if(isset($_POST['Paris2'])) {?>
       <!-- 4Ps        -->

       <div  class="card shadow mb-4 ">
                  
                    

                  <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
            
  
                          <div id="Paris2" class="card-body">
                              
                           <div class="table-responsive">
                              <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                              <label>4Ps</label> 
                                  
                              <thead class ="alert-info">
                              <tr>
  
                              <th >Household Id</th>
                              <th >Purok </th>
                                  <th >Member</th>
                                  <th >Head of Family</th>
                                  <th >Beneficiary</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                  
                              <?php
  
                              $statement =$conn->prepare("SELECT * from houshold WHERE 	P_id LIKE '$id' AND govBenefits='4Ps'");
                              $statement->execute();
                              while($resident1=$statement->fetch()){
                             
                                  ?>
                              <tr>
                              <td><?php echo $resident1['householdNO']   ?></td>
                              <td><?php echo $resident1['P_id']   ?></td>
                              <td><?php echo $resident1['H_member']   ?></td>
                              <td><?php echo $resident1['H_headoffamily']   ?></td>
                              
                              <td><?php echo $resident1['govBenefits']   ?></td>
                                  <td>
                    
                                  <a href="bhwviewhouse.php?id=<?php echo $resident1['householdNO']?>"class="btn btn-light"><i class="fas fa-eye"></i></a>
                
                              <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                             -->
                        
                             
                                  </td>
                           </tr>


                           <?php
                           }


                           ?>

                           </tbody>

                           </table>
                           
                 
                              </div>
                          </div>
                          <?php
                        }else if(isset($_POST['Paris3'])) {?>
 <!-- Senior Citizen -->
                          <div  class="card shadow mb-4 ">
                  

                  <div   class="card-body ">
                      <div class="table-responsive">
                          <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                          <label>Senoir Citizen</label> 
                          
                      <thead class ="alert-info">
                      <tr>

                      <th >Resident Id</th>
                      <th >Purok </th>
                          <th >First Name</th>
                          <th >Middle Name</th>
                          <th >Last Name</th>
                          <th >Age</th>
                          <th >Action</th>

                       
                         
                      </tr>
                      </thead>
                      <tbody>
                      <?php

                      $statement =$conn->prepare("SELECT * from resident WHERE P_id LIKE '$id' AND (TIMESTAMPDIFF(YEAR, R_birthdate , CURDATE()) )>=50");
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
                          <td><?php echo $resident['R_Middilename']   ?></td>
                          <td><?php echo $resident['R_Lastname']   ?></td>
                       
                          <td><?php echo $age ?></td>
                          <td>
                          <a href="#edit3_<?php echo $resident['resident_ID']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                    <?php include('Views/resView.php'); ?>
                                
                                </td>

                        
                      </tr>


                      <?php
                      }
                 
                    
                      ?>

                      </tbody>

                      </table>
                   
         
                      </div>
                  </div>   

<!-- Male -->
<?php
                        }else if(isset($_POST['Paris4'])) {?>

                        <div id="London"  class="card-body">
                      <div class="table-responsive">


                      
                          <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                         <label>Male</label>
                          
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

                      $statement =$conn->prepare("SELECT * from resident WHERE P_id LIKE '$id' AND R_gender='Male'");
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
        
                  <?php
                        }else  {?>

<!-- Female -->

                  <div id="London"  class="card-body">
                      <div class="table-responsive">


                      
                          <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                          <label>Female</label>
                          
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

                      $statement =$conn->prepare("SELECT * from resident WHERE P_id LIKE '$id' AND R_gender='Female' ");
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
                    }

                      ?>

                      </tbody>

                      </table>
                   
         
                      </div>
                  </div>
                    
                <!-- /.container-fluid -->

            </div>
         
            <!-- End of Main Content -->
      
            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    

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


  

<!-- delete script -->

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>


</body>

</html>