<?php
include_once 'header1.php';
include_once("Db_connect/connection.php");



if($_SERVER['REQUEST_METHOD']==='POST'){

    try
    {   
    $complainant1=$_POST['res12Report'];
    if(!empty($complainant1)){
    $statement =$conn->prepare("SELECT * from resident INNER JOIN purok ON resident.P_id = purok.P_id where resident_ID LIKE  $complainant1");
    $statement->execute();
    while($Blotter=$statement->fetch()){
    $first2=$Blotter['R_firstname'];
    $Last2=$Blotter['R_Lastname'];
    $Purok=$Blotter['P_name'];
   }


    $show = "true";

}else{
    $first2="";
    $Last2="";
    $Purok="";
        $show = "true";
    }
}
catch (PDOException $e)
{
    echo "<script> alert('Invalid Input');</script>";

}



// date_default_timezone_set('Asia/Manila');
// $todays_date = date("y-m-d h:i:sa");
// $today = strtotime($todays_date);
// $time=date("h:i:sa", $today);
// $date = date('Y-m-d');

// $complainant =$_POST['Complainant'];
// $respondent =$_POST['Respondent'];
// $datails =$_POST['Details'];
// $status ="Report";




// $statement = $conn ->prepare("INSERT INTO tblblotter ( complainant, respondent, date, time,	details, status) 
// VALUES (:name, :respondent, :date,:time,:details,:status)");

// $statement->bindValue(':name',$complainant);
// $statement->bindValue(':respondent',$respondent);
// $statement->bindValue(':date',$date);
// $statement->bindValue(':time',$time);
// $statement->bindValue(':details',$datails);
// $statement->bindValue(':status',$status);

// $result = $statement ->execute(); 

// $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


// $account=$_SESSION["Suid"];

// date_default_timezone_set('Asia/Manila');
// $todays_date = date("y-m-d h:i:sa");
// $today = strtotime($todays_date);
// $time=date("h:i:sa", $today);

// $action="Added Blotter";
// $date = date('Y-m-d');

// $statement->bindValue(':id',$account);
// $statement->bindValue(':Ldate', $date);
// $statement->bindValue(':ltime', $time);
// $statement->bindValue(':laction',$action);
// $result = $statement ->execute(); 

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
            <h5>Blotter Report</h5>
        </div>

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <button type="button" class="btn btn-success sidebot" data-toggle="modal" data-target="#addofficialModal">Add Report</button>
 

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                                <th >ID</th>
                                <th >Complainant</th>
                                <th >Respondent</th>
                                <th >Date</th>
                                <th >Time</th>
                          
                                <th >Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from tblblotter INNER JOIN resident On tblblotter.respondent = resident.resident_ID Where status='Report'");
                            $statement->execute();
                            while($Blotter=$statement->fetch()){
                                $first=$Blotter['R_firstname'];
                                $Last=$Blotter['R_Lastname'];
                                ?>
                            <tr>
                               
                                <td> <?php echo $Blotter['id']; ?></td>
                                <td><?php echo $Blotter['complainant']?></td>
                                <td><?php echo $first.' '.$Last ?></td>
                                <td><?php echo $Blotter['date']?></td>
                                <td><?php echo $Blotter['time']?></td>
                              
                                <td><?php echo $Blotter['status']?></td>
                             
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                          
                          
                            <a href="#edit_<?php echo $Blotter['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                            <?php include('Barangay/SecRblotterModal.php'); ?>

                            <!-- <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fa fa-trash"></i></a> -->
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Blotter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="" method="post" enctype="multipart/form-data">

                         
                   <label class ="text2">Compalinant</label>            
                    <!-- <input type ="text" class = "text1" name= "Complainant" placeholder ="Complainant" required> -->

                    <?php

                    $statement =$conn->prepare("SELECT * from resident where Remark=''");
                    $statement->execute();
                    $house=$statement->fetchAll()?>

                    <input type = "text" name="res12Report" list="res12Report" class="text1"  placeholder ="Select Resident" >
                 
                 
                    <datalist id="res12Report">

<!-- <option >Select Household</option> -->
                    <?php foreach ($house as $row): ?>
                    <option value=<?= $row['resident_ID']?> ><?= $row['R_firstname']?> <?= $row['R_Lastname']?></option>
                    <?php endforeach ?>
             
                    </datalist>  
                   
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

                <form  action="Barangay/Blotterdel.php" method="post" enctype="multipart/form-data">

                <input type ="hidden" class = "text1" name="id1" id="id1"  readonly>


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


<!-- delete script -->
<?php
require_once("bhwhealth/ReportM.php");

if(!empty($show)) {
		// CALL MODAL HERE
		echo '<script type="text/javascript">
			$(document).ready(function(){
				$("#Report").modal("show");
			});
		</script>';
}
?>

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



</body>

</html>