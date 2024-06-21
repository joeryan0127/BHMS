<?php
include_once 'header.php';
include_once("Db_connect/connection.php");



if($_SERVER['REQUEST_METHOD']==='POST'){

$p_id=$_POST['browad'];
$H_id=$_POST['brow0ad'];
$fname=$_POST['fname'];
$Mname=$_POST['Mname'];
$lname=$_POST['lname'];

$gender=$_POST['gender'];
$blood =$_POST['Blood'];
$bdate =$_POST['Bdate'];




$bplace =$_POST['Bplace'];
$stat =$_POST['Stat'];
$religion =$_POST['religion'];
$national =$_POST['Nationality'];
$pwd =$_POST['pwd'];


$statement = $conn->prepare("INSERT INTO resident ( P_id , householdNO , R_firstname , R_Middilename , R_Lastname  , R_gender, R_bloodtype , R_birthdate, R_Birthplace , R_status , R_religion , R_nationality,Pwd ) 
VALUES ( :P_id, :H_id,:fname, :Mname, :lname , :gender, :blood, :Bdate, :Bplace, :stat, :religion, :national,:pwd)");

$statement->bindValue(':P_id', $p_id);
$statement->bindValue(':H_id', $H_id);
$statement->bindValue(':fname',$fname);
$statement->bindValue(':Mname',$Mname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':gender', $gender);
$statement->bindValue(':blood', $blood);
$statement->bindValue(':Bdate', $bdate);
$statement->bindValue(':Bplace', $bplace);
$statement->bindValue(':stat', $stat);
$statement->bindValue(':religion', $religion);
$statement->bindValue(':national', $national);

$statement->bindValue(':pwd',$pwd);


$result = $statement ->execute(); 

$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["uid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Added Resident";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

}
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
                    <div class="pos">
            <h5>Barangay Resident</h5>
        </div>
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
                
               
                <div class="Sidebutton" >
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addofficialModal">Add Resident</button>
                <a href ="Upload.php" class="btn btn-info" ><i class="fas fa-upload"></i></a>
                <a href ="#" class="btn btn-info delbtn1" ><i class="fas fa-file-export"></i> </a>
                <!-- <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fa fa-trash"></i></a> -->
                </div> 
               
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                <thead class ="alert-info">
                                
                            <tr>
                    
                            <th >Resident Id</th>
                            <th >Purok </th>
                                <th >First Name</th>
                                <th >Middle Name</th>
                                <th >Last Name</th>
                                <th >Age</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT *,purok.P_name from resident INNER JOIN purok ON resident.P_id = purok.P_id where Remark=''");
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

                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit2_<?php echo $resident['resident_ID']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                            <?php include('Views/adviewresmodal.php'); ?>
                            
                            <a href="#edit1_<?php echo $resident['resident_ID']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                             <?php include('Barangay/editmodal.php'); ?>

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
        <div class="modal fade" id="addofficialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Resident</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="" method="post" enctype="multipart/form-data">

                    

                        <div class="row align-items-start">
                            
                        <div class="col">
                    <label class ="text2">First Name</label> 
                    <input class = "text1 form-control" name ="fname" placeholder ="First Name"  required>
                        </div>

                    <div class="col">

                    <label class ="text2">Middle Name</label> 
                    <input type ="text" class = "text1 form-control" name ="Mname" placeholder ="Middle Name"  required>

                        </div>
                      
                        <div class="col">
                    <label class ="text2">Last Name</label> 
                    <input type ="text" class = "text1 form-control" name="lname" placeholder ="Last Name"  required>
                        </div>

                        <!-- <div class="col">
                    <label class ="text2">Age</label> 
                    <input type ="text" class = "text1" name ="age"  placeholder ="Age" required>
                        </div> -->

                    </div>

                    <div class="row align-items-start">
                    <div class="col">

                    <label class ="text2">Gender</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    
                    <select  class = "text1 form-control" name ="gender" placeholder ="Gender"  required>
                    <option disabled selected>Select Gender</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                    
                      </select>
                        </div>
                      
                        <div class="col">
                    <label class ="text2">Bloodtype</label> 

                    <select  class = "text1 form-control" name ="Blood" placeholder ="Gender"  required>
                    <option disabled selected>Select Bloodtype</option>
                       <option value="A+">A+</option>
                       <option value="B+">B+</option>
                       <option value="O+">O+</option>
                       <option value="AB+">AB+</option>
                       <option value="A-">A-</option>
                       <option value="B-">B-</option>
                       <option value="O-">O-</option>
                       <option value="AB-">AB-</option>
                       <option value="NONE">NONE</option>
                    
                      </select>
                        </div>

                        <div class="col">
                    <label class ="text2">Bithdate</label> 
                    <input type ="Date" class = "text1 form-control" name ="Bdate"  placeholder ="Bithdate" required>
                        </div>
                   
            </div>

            <div class="row align-items-start">
                    <div class="col">

                    <label class ="text2">Birth Place</label> 
                    <input type ="text" class = "text1 form-control" name ="Bplace" placeholder ="Birth Place"  required>

                        </div>
                      
                        <div class="col">
                    <label class ="text2">Status</label> 

                    <select  class = "text1 form-control" name ="Stat" placeholder ="Gender"  required>
                    <option disabled selected>Select Status</option>
                       <option value="Single">Single</option>
                       <option value="Merried">Married</option>
                       <option value="Widow">Widow</option>
                    
                      </select>
                        </div>

                        <div class="col">
                    <label class ="text2">Religion</label> 
                    <input type ="text" class = "text1 form-control" name ="religion"  placeholder ="Religion" required>
                        </div>
                   
            </div>

            <div class="row align-items-start">
                    <div class="col">

                    <label class ="text2">Nationality</label> 
                    <input type ="text" class = "text1 form-control" name ="Nationality" placeholder ="Nationality"  required>

                        </div>
                 

                        <div class="col">

                    <label class ="text2">PWD</label> 
                    <select  class = "text1 form-control" name ="pwd"  required>
                    <option disabled selected>Select </option>
                       <option value="Single">Yes</option>
                       <option value="Merried">No</option>
                    
                    
                      </select>
                        </div>


                    <div class="search_select_box">
                        
                    <label class ="text2">Purok ID</label>            
                    <!-- <input type ="text" class = "text1" name= "P_id" placeholder ="Purok ID" required> -->
                    <?php

                    $statement =$conn->prepare("SELECT * from purok");
                    $statement->execute();
                    $purok=$statement->fetchAll()?>

        <input type = "text" name="browad" list="browad" class="form-control"  placeholder ="Select Purok"  required>
            <datalist id="browad">
                    <!-- <option >Selec Purok</option> -->
                    <?php foreach ($purok as $row): ?>
                    <option value=<?= $row['P_id'] ?> > <?= $row['P_id'] ?> <?= $row['P_name'] ?> </option>

                    <?php endforeach ?>
    
                    </datalist>  
                </div>

                    
                
                        <div class="search_select_box">
                    <label class ="text2" >Household ID</label> 
                    <!-- <input type ="text" class = "text1" name ="H_id" placeholder ="Household ID"  required> -->

                    <?php

                $statement =$conn->prepare("SELECT * from houshold  where Remark=''");
                $statement->execute();
                $house=$statement->fetchAll()?>

   <input type = "text" name="brow0ad" list="brow0ad" class="form-control" placeholder ="Select Household"  required >
            <datalist id="brow0ad">
                <!-- <option >Select Household</option> -->
                <?php foreach ($house as $row): ?>
                <option value=<?= $row['householdNO'] ?> ><?= $row['householdNO']?> <?= $row['H_headoffamily']?> </option>

                <?php endforeach ?>

                </datalist>  

                        </div>

     
              
                   
            </div>




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


    <div class="modal fade" id="delmodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header"> -->
                    <!-- <h5 class="modal-title" id="exampleModalLabel">DELETE</h5> -->
                    <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> -->
                <div class="modal-body">

                <form  action="admin/export.php" method="post" enctype="multipart/form-data">

               

             <center>   DO YOU WANT TO DOWNLOAD RESIDENT DATA?</center>
           
            </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-info" name ="del">yes</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <!-- update script -->
<!-- <script>  
$(document).ready(function(){
$('.edtbtn').on('click',function(){

$('#editmodal').modal('show');

    $tr= $(this).closest('tr');

    var data = $tr.children("td").map(function(){
        return $(this).text();
    }).get();

    console.log(data);

    // $statement =$conn->prepare("SELECT * from officials");
    // $statement->execute();
    // $lib = $statement->fetchAll(PDO ::FETCH_ASSOC);

    $('#pos').val( $lib['Posision']);
    $('#pos').val(data[1]);
    $('#name').val(data[2]);
    $('#contact').val(data[3]);
    $('#start').val(data[4]);
    $('#end').val(data[5]);



});

});


</script> -->

<script>
    $(document).ready(function(){

        $('.search_select_box select').selectpicker();
    })
    </script>

<!-- delete script -->


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


</script>

<script>

$(document).ready(function(){
$('.delbtn1').on('click',function(){

$('#delmodal1').modal('show');

    $tr= $(this).closest('tr');

    var data = $tr.children("td").map(function(){
        return $(this).text();
    }).get();

    console.log(data);
    
    $('#id1').val(data[0]);




});

});
    </script>

</body>

</html>