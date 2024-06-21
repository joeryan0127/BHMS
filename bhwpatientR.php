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
          
             
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Patient Id</th>
                                <th >First Name</th>
                                <th >Last name</th>
                                <th >Consultation</th>
                                <th >Remarks</th>
                                <th >Medicine</th>
                                <th >Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare("SELECT * from okpatient INNER JOIN patient On okpatient.Patient_id=patient.Patient_id INNER JOIN medicine ON okpatient.Med_id = medicine.Med_id");
                            $statement->execute();
                            while($Patient=$statement->fetch()){?>
                            <tr>
                                <td><?php echo $Patient['Patient_id']?></td>
                                <td><?php echo $Patient['fname']?></td>
                                <td><?php echo $Patient['Lname']?></td>

                                <td><?php echo $Patient['Consultation']?></td>
                                <td><?php echo $Patient['Remarks']?></td>
                                <td><?php echo $Patient['Med_name']?></td>
                                
                                <td><?php echo $Patient['quantity']?></td>
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit3_<?php echo $Patient['Patient_id']; ?>" class="btn btn-light" data-toggle="modal"><span class="fas fa-eye"></span></a>

                            <?php include('Views/patientRview.php'); ?>

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
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Patient</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
            <div class="group32">
            <form  action="" method="post" enctype="multipart/form-data">

                         
<div class="row align-items-start">
<div class="search_select_box">
    
<label class ="text2">Purok ID</label>            
<!-- <input type ="text" class = "text1" name= "P_id" placeholder ="Purok ID" required> -->
<?php

$statement =$conn->prepare("SELECT * from purok");
$statement->execute();
$purok=$statement->fetchAll()?>

<select  name ="P_id" data-live-search="true"  required>
<option >Selec Purok</option>
<?php foreach ($purok as $row): ?>
<option value=<?= $row['P_id'] ?> > <?= $row['P_id'] ?> <?= $row['P_name'] ?> </option>

<?php endforeach ?>

</select>
</div>



    <div class="col">
<label class ="text2" >Firstname</label> 
<input type ="text" class = "text1" name ="fname" placeholder ="FIrst Name"  required>


    </div>

    <div class="col">
<label class ="text2">Middle Name</label> 
<input class = "text1" name ="Mname" placeholder ="Middle Name"  required>
    </div>

    </div>

    <div class="row align-items-start">
<div class="col">

<label class ="text2">Last Name</label> 
<input type ="text" class = "text1" name ="Lname" placeholder ="Last Name"  required>

    </div>
<!--   
    <div class="col">
<label class ="text2">Birth date</label> 
<input type ="date" class = "text1" name="Bdate" placeholder ="Birth Date"  required>
    </div> -->
    <div class="col">

<label class ="text2">Gender</label> 
<!-- <input type ="text" class = "text1" name ="add" placeholder ="Gender"  required> -->

<select  class = "text1" name ="gender" placeholder ="Gender"  required>
   <option value="Male">Male</option>
   <option value="Female">Female</option>

  </select>
    </div>
    
    <div class="col">
<label class ="text2">Age</label> 
<input type ="text" class = "text1" name ="age"  placeholder ="Age" required>

    </div>

</div>

<div class="row align-items-start">

<div class="col">
<label class ="text2">Height</label> 
<input type ="Text" class = "text1" name ="height"  placeholder ="height" required>
    </div>

    <div class="col">
<label class ="text2">Weight</label> 
<input type ="Text" class = "text1" name ="Weight"  placeholder ="weight" required>
    </div>

    <div class="col">

<label class ="text2">BP</label> 
<input type ="text" class = "text1" name ="Bp" placeholder ="BP"  required>
    </div>

 
  
<div class="col">
<label class ="text2">Temperature</label>
<input type ="text" class = "text1" name ="temp" placeholder ="Temparature"  required>

    </div>

    <div class="col">
<label class ="text2">Pulserate</label> 
<input type ="text" class = "text1" name ="Pulse"  placeholder ="Pulse rate" required>
    </div>


</div>

<div class="col">
<label class ="text2">Consultation</label> 
<textarea type ="text" class = "text1" name ="Consult" placeholder ="Consultation"  required></textarea>

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