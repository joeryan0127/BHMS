<?php
include_once 'header1.php';

include_once("Db_connect/connection.php");


?>


<?php

?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    <div class="pos">
            <h5>User Account</h5>
        </div>

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <button type="button" class="btn btn-success sidebot" data-toggle="modal" data-target="#addhouseModal1">Add Account</button>
                      
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Account ID</th>
                                <th >Fullname</th>
                                <th >Username</th>
                                <th >Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from account Where Remark='Approve' AND Del=''");
                            $statement->execute();
                            while($Purok=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Purok['A_id']   ?></td>
                                <td><?php echo $Purok['A_Completename']   ?></td>
                                <td><?php echo $Purok['A_username']   ?></td>
                                <td><?php echo $Purok['A_type']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <!-- <a href="viewhouse.php?id=<?php echo $Purok['householdNO']?>"class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                 -->
                            
                            

                            <a href="#edit3_<?php echo $Purok['A_id']; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="fas fa-key"></span></a>

                            <?php include('Account/Spass.php'); ?>
                            
                            <a href="#edit5_<?php echo $Purok['A_id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal"><span class="fa fa-trash"></span></a>

                            <?php include('Account/SecAccountDelM.php'); ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="includes/Sadduser.php" method="post" enctype="multipart/form-data">
                    <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"]== "none"){
                                echo "<script> alert('Updated');</script>";
                                }
                                if($_GET["error"]== "None"){
                                    echo "<script> alert('Successfuly change');</script>";
                                    }
                                if($_GET["error"]== "Usernameistaken"){
                                    echo "<script> alert('Usernameistaken');</script>";
                                    }
                                    if($_GET["error"]== "Passmismatch"){
                                        echo "<script> alert('Passmismatch');</script>";
                                        }
                                        if($_GET["error"]== "Wrongpass"){
                                            echo "<script> alert('Invalid Password');</script>";
                                            }
                            }
                                ?>
                    <label class ="text2">Type</label>            
                    <select name="type" class="text1" id="type">
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>
                                <option value="BHW">BHW</option>
                                <option value="Nurse">Nurse</option>
                                    </select>  

                    <label class ="text2">Full Name</label>            
                    <input type ="text" class = "text1" name= "Name" placeholder ="Fullname" required>

                    <label class ="text2">User Name</label>            
                    <input type ="text" class = "text1" id="User"name= "User" placeholder ="Username" required>

                    <label class ="text2">Password</label>            
                    <input type ="Password" class = "text1" name= "pass" placeholder ="Password" required>
                    
                    <label class ="text2">Retype Password</label>            
                    <input type ="Password" class = "text1" name= "Rpass" placeholder ="Password" required>
                   
                
            </div>

                </div>
                       

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit"name="ok" class="btn btn-primary"> Save</button>
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


    <!-- update script -->


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