<?php
include_once 'header.php';
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
            <h5>4'Ps Record</h5>
        </div> 
   
                <div class="card-body">
                            <div class="table-responsive">

                          <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0" >
                                <?php
                              
                                if(isset($_GET["error"])){
                                    if($_GET["error"]== "house"){
                                    echo "<script> alert('You cant delete this data,Please Delete first the connected data');</script>";
                                    }
                                    
                                
                                }
                                  
                               ?>
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >houshold</th>
                                <th >Purok</th>
                                <th >H_member</th>
                                <th >H_headoffamily</th>
                                <th >Beneficiary</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * ,purok.P_name from houshold INNER JOIN purok ON houshold.P_id = purok.P_id Where govBenefits='4Ps'");
                            $statement->execute();
                            while($Purok=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Purok['householdNO']   ?></td>
                                <td><?php echo $Purok['P_name']   ?></td>
                                <td><?php echo $Purok['H_member']   ?></td>
                                <td><?php echo $Purok['H_headoffamily']   ?></td>
                                <td><?php echo $Purok['govBenefits']   ?></td>
                          
                              
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
    <!-- update script -->
    <script>
    $(document).ready(function(){

        $('.search_select_box select').selectpicker();
    })
    </script>



</body>

</html>