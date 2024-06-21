<?php
include_once 'header1.php';
include_once("Db_connect/connection.php");
?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
      

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
                <div class="pos1">
            <h5>Unsettled Blotter</h5>
        </div>

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

                            $statement =$conn->prepare("SELECT * from tblblotter INNER JOIN resident On tblblotter.respondent = resident.resident_ID WHERE status='Unsettled'");
                            $statement->execute();
                            while($Blotter=$statement->fetch()){
                                $first=$Blotter['R_firstname'];
                                $Last=$Blotter['R_Lastname'];
                                $P_id=$Blotter['P_id']; 
                                ?>

                    <?php
                                $statement1 =$conn->prepare("SELECT * from purok  WHERE P_id LIKE $P_id");
                                $statement1->execute();
                                while($P=$statement1->fetch()){
                                    $Purok= $P['P_name'];
                                   
                               
                              ?>

                            <tr>
                               
                                <td> <?php echo $Blotter['id']; ?></td>
                                <td><?php echo $Blotter['complainant']?></td>
                                <td><?php echo $first.' '.$Last?></td>
                                <td><?php echo $Blotter['date']?></td>
                                <td><?php echo $Blotter['time']?></td>
                              
                                <td><?php echo $Blotter['status']?></td>
                             
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit2_<?php echo $Blotter['id']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

            <?php include('Views/Activeblotterview.php'); ?>
                          
                            <a href="#edit_<?php echo $Blotter['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span></a>

                            <?php include('Blottersinfo/SecUnsettledmodal.php'); ?>

                            <!-- <a href="#"class="btn btn-sm btn-danger delbtn"><i class="fa fa-trash"></i></a> -->
                          </div>
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

                <form  action="Blottersinfo/SecUnsettledDel.php" method="post" enctype="multipart/form-data">

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