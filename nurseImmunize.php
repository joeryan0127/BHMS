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
                  
                    <div class="pos1" >
            <h5>Immunization Record</h5>
        </div> 

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                          
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Age</th>
                                <th >Weight</th>
                                <th>Height</th>
                                <th>Vaccine</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from vaccine INNER JOIN newborn ON vaccine.C_id = newborn.C_id INNER JOIN resident ON vaccine.resident_ID = resident.resident_ID WHERE Remarks=''");
                            $statement->execute();
                            while($Purok=$statement->fetch()){
                                $today =date("Y-m-d");
                                $bdate1=$Purok['R_birthdate'];
                                $diff=date_diff(date_create($bdate1),date_create($today));
                                $age=$diff->format('%m');
                                
                                ?>
                            <tr>
                                <td><?php echo $Purok['R_firstname']   ?></td>
                                <td><?php echo $Purok['R_Lastname']   ?></td>
                                <td><?php echo $age,"mos" ?></td>
                                <td><?php echo $Purok['weight']   ?></td>
                                <td><?php echo $Purok['height']   ?></td>
                                <td><?php echo $Purok['vaccine']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                           
                       
                            <a href="#edit2_<?php echo $Purok['Immunize_id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fas fa-check"></span></a>

                            <?php include('nurse/Immunize.php'); ?>
                            
                            <!-- <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fas fa-times"></i></a>
                            -->
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Medicine</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
                    <form  action="" method="post" enctype="multipart/form-data">

                         
                    <label class ="text2">Name</label>            
                    <input type ="text" class = "text1" name= "Mname" placeholder ="Name" required>

                    <label class ="text2">Discription</label>            
                    <input type ="text" class = "text1" name= "Discription" placeholder ="Discription" required>

                    <label class ="text2">Dosage</label>            
                    <input type ="text" class = "text1" name= "Dosage" placeholder ="Dosage" required>
                   
                    <label class ="text2">Expiry date</label>            
                    <input type ="date" class = "text1" name= "Edate" required>

                    <label class ="text2">Quantity</label>            
                    <input type ="text" class = "text1" name= "quant" placeholder ="Quantity" required>
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