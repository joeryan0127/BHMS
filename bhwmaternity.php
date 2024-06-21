<?php
include_once 'bhwhead.php';
include_once("Db_connect/connection.php");

if($_SERVER['REQUEST_METHOD']==='POST'){

    date_default_timezone_set('Asia/Manila');
    $R_id =$_POST['browR_idm'];
    $temp=$_POST['temp'];
    $age=$_POST['age'];
    $wt=$_POST['wt'];
    $ht=$_POST['ht'];
    $Bp=$_POST['Bp'];
    $Pr=$_POST['Pr'];
    $Edc=$_POST['Edc'];
    $Aog=$_POST['Aog'];
    $date = date('Y-m-d');
    
    $statement = $conn ->prepare("INSERT INTO maternity (resident_ID ,temp ,age, Wt,Ht,	Bp,Pr,Edc,Aog,Dates ) 
    VALUES ( :R_id, :temp,:age, :Wt,:Ht, :Bp, :Pr,:edc,:Aog,:date)");
    
    $statement->bindValue(':R_id',$R_id);
    $statement->bindValue(':temp',$temp);
    $statement->bindValue(':age',$age);
    $statement->bindValue(':Wt',$wt);
    $statement->bindValue(':Ht',$ht);
    $statement->bindValue(':Bp',$Bp);
    $statement->bindValue(':Pr',$Pr);
    $statement->bindValue(':edc',$Edc);
    $statement->bindValue(':Aog',$Aog);
    $statement->bindValue(':date',$date);
    
    $result = $statement ->execute(); 
    
    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["bhuid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Added Mother";
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
            <h5>Maternity Management</h5>
        </div>

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <button type="button" class="btn btn-success sidebot" data-toggle="modal" data-target="#addhouseModal1">Add Mother</button>
                      
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                             
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Maternity ID</th>
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th >EDC</th>
                                <th >AOG</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT *  from maternity INNER JOIN resident ON maternity.resident_ID = resident.resident_ID");
                            $statement->execute();
                            while($Purok=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Purok['Maternity_id']   ?></td>
                                <td><?php echo $Purok['R_firstname']   ?></td>
                                <td><?php echo $Purok['R_Lastname']   ?></td>
                                <td><?php echo $Purok['age']   ?></td>
                                <td><?php echo $Purok['Edc']   ?></td>
                                <td><?php echo $Purok['Aog']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit3_<?php echo $Purok['Maternity_id']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                           <?php include('Views/Maternityview.php'); ?>


                           <a href="#edit4_<?php echo $Purok['Maternity_id']?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="fas fa-syringe"></span></a>

                            <?php include('bhwhealth/PrenatalM.php'); ?>
                         
                            <a href="#edit2_<?php echo $Purok['Maternity_id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                            <?php include('bhwhealth/MaternityM.php'); ?>
                            
                            <!-- <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fa fa-trash"></i></a> -->
                         

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
                    <h5 class="modal-title" id="exampleModalLabel">Add Pregnant</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="" method="post" enctype="multipart/form-data">

                         
                  
                         
                    <div class="" >
                 
                    <?php

                $statement =$conn->prepare("SELECT * from resident");
                $statement->execute();
                $house=$statement->fetchAll()?>

                

<label class ="text2">Resident </label>    
<input type = "text" name="browR_idm" list="browP_id" class="text1 form-control" placeholder ="Select Resident"  required >
            <datalist id="browP_id">
                <!-- <option >Select Resident</option> -->
                <?php foreach ($house as $row): ?>
                <option value=<?= $row['resident_ID'] ?> ><?= $row['R_firstname']?> <?= $row['R_Lastname']?> </option>

                <?php endforeach ?>

                </datalist> 
                </div>
               

                    <label class ="text2">Temparature</label>            
                    <input type ="text" class = "text1" name= "temp" placeholder ="Temperature" required>

                    <label class ="text2">Age</label>            
                    <input type ="text" class = "text1" name= "age" placeholder ="Age" required>
                   
                    <label class ="text2">Weight</label>            
                    <input type ="text" class = "text1" name= "wt" placeholder ="Weight" required>

                    <label class ="text2">Height</label>            
                    <input type ="text" class = "text1" name= "ht" placeholder ="Height" required>
                  
                    <label class ="text2">Blood Pressure</label>            
                    <input type ="text" class = "text1" name= "Bp" placeholder ="Blood pressure" required>
                    
                    <label class ="text2">Pulse Rate</label>            
                    <input type ="text" class = "text1" name= "Pr" placeholder ="Pulse Rate" required>

                    <label class ="text2">EDC</label>            
                    <input type ="date" class = "text1" name= "Edc" placeholder ="EDC" required>

                    <label class ="text2">AOG</label>            
                    <input type ="text" class = "text1" name= "Aog" placeholder ="AOG" required>
             
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

        <!-- <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Up Officials</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="Barangay/upOfficial.php" method="post" enctype="multipart/form-data">

                         
                             
                    <input type ="hidden" class = "text1" name= "id" id="id"placeholder ="Position" readonly>

                    <label class ="text2">Position</label>            
                    <input type ="text" class = "text1" name= "Pos" id="pos"placeholder ="Position" required>

                    <label class ="text2" >Full Name</label> 
                    <input type ="text" class = "text1" name ="uname" id ="name" placeholder ="Full Name"  required>

                    <label class ="text2">Contact No#</label> 
                    <input class = "text1" name ="contact1" id ="contact"placeholder ="Contact No#"  required>

                 
                    <label class ="text2">Start Term</label> 
                    <input type ="Date" class = "text1" name="Start1" id="start" placeholder ="Start Term:"  required>

                    <label class ="text2">End Term</label> 
                    <input type ="Date" class = "text1" name ="end1" id="end" placeholder ="Firstname" required>
                    
                   
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name ="submit1"class="btn btn-primary"> update</button>
                </div>
               </form>
            </div>
         </div>
        </div> -->

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


<!-- <script>  
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