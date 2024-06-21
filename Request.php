<?php
include_once("Db_connect/connection.php");


// $statement =$conn->prepare('SELECT Offcial_id FROM officials limit 1');
// $statement->execute();
// $official = $statement->fetch(PDO::FETCH_ASSOC);
// $lastid = $official['Offcial_id'];

// if($lastid == " "){

//     $official_id == "BMC1";
// }else {


//     $official_id = substr($lastid,3);
//     $official_id = intval($official_id);
//     $official_id = "BMC".($official_id +1);
// }

if($_SERVER['REQUEST_METHOD']==='POST'){

$Resident =$_POST['browR_idR'];
$Purok=$_POST['browP_idb'];

$end=$_POST['purpose'];
$request=$_POST['Request'];
$cert=$_POST['Cert'];
$app="";

$statement = $conn ->prepare("INSERT INTO certificate ( resident_ID, P_id , Porpose, Approve, Requesteddate,Certificate ) 
VALUES ( :Resident,:Purok, :Porpose, :Approve, :Request, :Cert)");

$statement->bindValue(':Resident', $Resident);

$statement->bindValue(':Purok',$Purok);
$statement->bindValue(':Porpose', $end);
$statement->bindValue(':Approve',$app);

$statement->bindValue(':Request',$request);
$statement->bindValue(':Cert',$cert);

$result = $statement ->execute(); 


}
?>


<?php
include_once 'header1.php';


// $statement = $conn->prepare("SELECT * from officials");
// $statement =
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    <div class="pos">
            <h5>Certificate Request</h5>
        </div> 

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <button type="button" class="btn btn-success sidebot" data-toggle="modal" data-target="#addofficialModal">Add Request</button>
                      
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Id</th>
                                <th >Name</th>
                                <th >Status</th>
                                <th >Purok</th>
                                <th >Purpose</th>
                                <th >Certificate</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare('SELECT *from certificate INNER JOIN resident ON certificate.resident_ID  = resident.resident_ID INNER JOIN purok ON certificate.P_id = purok.P_id  WHERE Approve ="" AND Remarks=" " ');
                            $statement->execute();
                            while($certificate=$statement->fetch()){
                                
                                $Fname=$certificate['R_firstname'];
                                $lname=$certificate["R_Lastname"];
                                ?>

                            
                            <tr>
                                <td><?php echo $certificate['id']   ?></td>
                                <td><?php echo $Fname .' '.$lname ?></td>
                                <td><?php echo $certificate['R_status']   ?></td>
                                <td><?php echo $certificate['P_name']   ?></td>
                                <td><?php echo $certificate['Porpose']   ?></td>
                                <td><?php echo $certificate['Certificate']   ?></td>
                                
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                            <a href="#edit_<?php echo $certificate['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                            <?php include('Barangay/editcert.php'); ?>

                            <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fa fa-trash"></i></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Request</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="" method="post" enctype="multipart/form-data">

                         
                     
                    
                   

                    <div class="search_select_box2">
                    <!-- <input type ="text" class = "text1" name ="H_id" placeholder ="Household ID"  required> -->

                    <?php

                $statement =$conn->prepare("SELECT * from resident");
                $statement->execute();
                $house=$statement->fetchAll()?>

                

                
<input type = "text" name="browR_idR" list="browR_idR" class="text1 form-control" placeholder ="Select Resident"  required >
            <datalist id="browR_idR">
                <!-- <option >Select Resident</option> -->
                <?php foreach ($house as $row): ?>
                <option value=<?= $row['resident_ID'] ?> ><?= $row['R_firstname']?> <?= $row['R_Lastname']?> </option>

                <?php endforeach ?>

                </datalist> 
                </div>
               


                <div class="search_select_box2"> 
                    <!-- <input type ="text" class = "text1" name= "P_id" placeholder ="Purok ID" required> -->
                    <?php

                    $statement =$conn->prepare("SELECT * from purok");
                    $statement->execute();
                    $purok=$statement->fetchAll()?>

                   
                    <!-- <label class ="text2">Purok ID</label> -->
                    <input type = "text" name="browP_idb" list="browP_idb" class=" form-control" placeholder ="Selec Purok"  required >
            <datalist id="browP_idb">
                    <!-- <option >Selec Purok</option> -->
                    <?php foreach ($purok as $row): ?>
                    <option value=<?= $row['P_id'] ?> > <?= $row['P_name'] ?> </option>

                    <?php endforeach ?>
    
                    </select>
                </div>
                  

                    <label class ="text2">Purpose</label> 
                    <input class = "text1 form-control" name ="purpose" placeholder ="Purpose"  required>

                


                    <label class ="text2">Request date</label> 
                    <input type ="Date" class = "text1 form-control" name="Request" placeholder =""  required>

                    <label class ="text2">Certificate</label> 
                    <!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->
                    
                    <select  class = "text1 form-control" name ="Cert"   required>
                    <option disabled selected >Select Certificate</option>
                       <option value="Barangay Clearance">Barangay Clearance</option>
                       <option value="Barangay Residency">Barangay Residency</option>
                       <option value="Barangay Indigency">Barangay Indigency</option>
                       <option value="Cutting Tree Permit">Cutting Tree Permit</option>
                    
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

                <form  action="Barangay/delcert.php" method="post" enctype="multipart/form-data">

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

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

   
    <script>
    $(document).ready(function(){

        $('.search_select_box2 select').selectpicker();
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

</body>

</html>