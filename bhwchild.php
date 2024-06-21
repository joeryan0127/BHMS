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
                  
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <div class="pos1">
            <h5>Child Info</h5>
        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >ID</th>
                                <th >First Name</th>
                                <th >Last name</th>
                                <th >Sex</th>
                                <th>Birth date</th>
                              
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

                            <a href="#edit4_<?php echo $Patient['resident_ID']?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="fas fa-syringe"></span></a>

                            <?php include('bhwhealth/vaccineM.php'); ?>

                            <a href="#edit2_<?php echo $Patient['resident_ID']?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                            <?php include('bhwhealth/ChildM.php'); ?>
                            
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