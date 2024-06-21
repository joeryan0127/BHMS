<?php
include_once 'nursehead.php';
include_once("Db_connect/connection.php");

?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
               
<form action="" method="post" enctype="multipart/form-data" id="first">
<div class="margn">
<input class="dateD"  type="date" name ="word">
  <input class="dateD" type="date"  name ="keyword">
  <button name ="search" class="btn btn-outline-warning"><i class="fas fa-search"></i></button>
  </div>  
  </form>
  <div class="pos1" >
            <h5>Inventory Record</h5>
        </div> 
<?php
  if(isset($_POST['search'])){
    $Date1 =$_POST['word'];
    $Date2=$_POST['keyword'];

?>
<div class="sideReport1">
<button onclick ="window.print();" id ="print2" class="btn btn-info" ><i class="fas fa-print"></i></button>
</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Medicine id</th>
                                <th >Medicine Name</th>
                                <th >Medicine Dosage</th>
                                <th >Total</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                            <?php



                            $statement =$conn->prepare("SELECT DISTINCT okpatient.Med_id,medicine.Med_name,medicine.Med_dosage , sum(Quantity) as total FROM okpatient INNER JOIN medicine ON okpatient.Med_id = medicine.Med_id  WHERE DATE BETWEEN '$Date1' AND '$Date2' GROUP BY Med_id");
                            $statement->execute();
                            // $statement1 =$conn->prepare("SELECT DISTINCT COUNT(Patient_id) FROM patient WHERE DATE BETWEEN '$Date1' AND '$Date2'");
                            // $statement1->execute();
                            // $resident=$statement1->fetchColumn();
                            while($Patient=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Patient['Med_id']?></td>
                                <td><?php echo $Patient['Med_name']?></td>
                                <td><?php echo $Patient['Med_dosage']?></td>

                                <td><?php echo $Patient['total']?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                      
                            
                            <!-- <a href="#"class="btn btn-info"><i class="far fa-eye"></i></a> -->
                            </div>
                                </td>

                              
                            </tr>


                            <?php
                            // $statement =$conn->prepare("SELECT DISTINCT COUNT(Patient_id) as total FROM patient WHERE DATE BETWEEN '$Date1' AND '$Date2' GROUP BY Med_id");
                            // $statement->execute();
                            // $resident=$statement->fetchColumn();

                            }
                            
                          
                            ?>
                      
                            </tbody>

                            </table>
                         <?php 
                        }else{
                            ?>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0" >
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Patient ID</th>
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Consultation</th>
                                <th>Medicine</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            <?php



                            $statement =$conn->prepare("SELECT * from okpatient INNER JOIN patient ON okpatient.Patient_id = patient.Patient_id");
                            $statement->execute();
                            while($Patient=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Patient['Patient_id']?></td>
                                <td><?php echo $Patient['fname']?></td>
                                <td><?php echo $Patient['Lname']?></td>

                                <td><?php echo $Patient['Consultation']?></td>
                                <td><?php echo $Patient['Med_id']?></td>
                             
                              
                           

                              
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