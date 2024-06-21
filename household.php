<?php
include_once 'header.php';
include_once("Db_connect/connection.php");

if($_SERVER['REQUEST_METHOD']==='POST'){

    $Purok =$_POST['browP_id1'];
    $member=$_POST['member'];
    $Family=$_POST['Family'];
    $benefit=$_POST['benefit'];
    
    
    
    $statement = $conn ->prepare("INSERT INTO houshold ( P_id ,H_member ,H_headoffamily,govBenefits) 
    VALUES ( :Purok, :member,:Hof,:benefits)");
    
    $statement->bindValue(':Purok',$Purok);
    $statement->bindValue(':member',$member);
    $statement->bindValue(':Hof',$Family);
    $statement->bindValue(':benefits',$benefit);
   
    
    $result = $statement ->execute(); 
    
    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["uid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Added Household";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

    
    }

?>


<?php


?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">

                    <div class="pos">
            <h5>Barangay Household</h5>
        </div>
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
                
                <div class="Sidebutton" >
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#addhouseModal1">Add Household</button>
                <a href ="adHupload.php" class="btn btn-info" ><i class="fas fa-upload"></i></a>
                </div> 
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               <?php
                              
                                if(isset($_GET["error"])){
                                    if($_GET["error"]== "house"){
                                    echo "<script> alert('You cant delete this data,Please Delete first the connected data');</script>";
                                    }
                                    
                                
                                }
                                  
                               ?>
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Household</th>
                                <th >Purok</th>
                                <th >No.of Member</th>
                                <th >Head of family</th>
                                <th >Beneficiary</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT *,purok.P_name from houshold INNER JOIN purok ON houshold.P_id = purok.P_id WHERE Remark='' ");
                            $statement->execute();
                            while($Purok=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Purok['householdNO']   ?></td>
                                <td><?php echo $Purok['P_name']   ?></td>
                                <td><?php echo $Purok['H_member']   ?></td>
                                <td><?php echo $Purok['H_headoffamily']   ?></td>
                                <td><?php echo $Purok['govBenefits']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="viewhouse.php?id=<?php echo $Purok['householdNO']?>"class="btn btn-light"><i class="fas fa-eye"></i></a>
                
                            <a href="#edit2_<?php echo $Purok['householdNO']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                            <?php include('Barangay/edithousemodal.php'); ?>
                           
                            <a href="#edit5_<?php echo $Purok['householdNO']; ?>"class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>
                            <?php include('DeleteModal/AdhousedelM.php'); ?>  
                            
                            <!-- <a href="#edit2_<?php echo $Purok['householdNO']; ?>" class="btn btn-outline-info"><i class="fas fa-eye"></i></a> -->
      
            
                            
                            <!-- <a href="#"class="btn btn-info"><i class="far fa-eye"></i></a> -->
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
        <div class="modal fade" id="addhouseModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Houshold</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="" method="post" enctype="multipart/form-data">

                    <div class="" >
                        
                        <label class ="text2">Purok ID</label>            
                        <?php
    
                        $statement =$conn->prepare("SELECT * from purok");
                        $statement->execute();
                        $purok=$statement->fetchAll()?>
    
    <input type = "text" name="browP_id1" list="browP_id1" class="text1 form-control" placeholder ="Select ID" required >
            <datalist id="browP_id1">
                        <!-- <option >Selec Purok</option> -->
                        <?php foreach ($purok as $row): ?>
                        <option value=<?= $row['P_id'] ?> >  <?= $row['P_name'] ?> </option>
    
                        <?php endforeach ?>

                        </datalist>  

                       
                    </div>
    
                    <label class ="text2">No Members</label>            
                    <input type ="text" class = "text1 form-control" name= "member" placeholder ="Member" required>

                    <label class ="text2">Head of Family</label>            
                    <input type ="text" class = "text1 form-control" name= "Family" placeholder ="Head Of Family" required>
                   
                    <label class ="text2">Gov. Beneficiary</label> 

                    <select  class = "text1 form-control" name ="benefit" placeholder ="Gender"  required>
                    <option disabled selected> Select Beneficiary</option>
                    <option value="4Ps">4Ps</option>
                    <option value="UCT">UCT</option>
                    <option value="UCT">NONE</option>


                    </select>

            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"> Save</button>
                </div>
               </form>
            </div>
         </div>
        </div>
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

    <!-- update script -->
    <script>
    $(document).ready(function(){

        $('.search_select_box select').selectpicker();
    })
    </script>



<!-- delete script -->

<!-- 
<script>  
$(document).ready(function(){
$('.delbtn').on('click',function(){

$('#delmodal').modal('show');

    $tr= $(this).closest('tr');

    var data = $tr.children("td").map(function(){
        return $(this).text();
    }).get();

    console.log(data);
    
    $('#id1').val(data[0]);




});

});


</script> -->

</body>

</html>