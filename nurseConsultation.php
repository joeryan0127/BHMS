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
            <h5>Consultation Record</h5>
        </div> 
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Patient Id</th>
                                <th >First Name</th>
                                <th >Last name</th>
                                <th >Consultation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from patient WHERE Remarks=' ' ");
                            $statement->execute();
                            while($Patient=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Patient['Patient_id']?></td>
                                <td><?php echo $Patient['fname']?></td>
                                <td><?php echo $Patient['Lname']?></td>

                                <td><?php echo $Patient['Consultation']?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit3_<?php echo $Patient['Patient_id']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                            <?php include('Views/Patientview.php'); ?>

                            <a href="nursePmedicine.php?id=<?php echo $Patient['Patient_id']?>"class="btn btn-outline-warning"><i class="fas fa-stethoscope"></i></a>
                

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

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
//     $(".multipleselect1").select2({

// });
</script>
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