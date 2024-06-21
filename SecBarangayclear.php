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
                    <div class="tab">
                <form action="" method="post" enctype="multipart/form-data">
  <button class="tablinks" name="london">Request </button>
  <button class="tablinks" name="paris">Printed </button>
</form>
</div>    
   
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
                <?php
  if(isset($_POST['london'])){
  

?>     
                
                        <div id="London" class="card-body ">
                            <div class="table-responsive">
                            <h5>APPROVED</h5>
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Id</th>
                                <th >Name</th>
                                <th >Status</th>
                                <th >Purok</th>
                                <th >Purpose</th>
                                <th >Requested Date</th>
                                <th >Certificate</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare('SELECT * from certificate INNER JOIN resident ON certificate.resident_ID  = resident.resident_ID INNER JOIN purok ON certificate.P_id = purok.P_id WHERE Approve ="Approve" AND Certificate ="Barangay Clearance" AND Remarks =""');
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
                                <td><?php echo $certificate['Requesteddate']   ?></td>
                                <td><?php echo $certificate['Certificate']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           
      <form style ="display: inline-block"method ="POST" action="Certificate/SecBarangayclearance.php">

<input type="hidden" name = "id" value ="<?php echo  $certificate['id']?>" >

<button type="submit" class="btn btn-sm btn-info" name ="submit" >Print</button>
</form>
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
                <?php
                        }else    {?>
                <!-- Done -->
                <div class="card shadow mb-4">
                  

                <div id="Paris" class="card-body ">
                            <div class="table-responsive">
                            <h5>PRINTED</h5>
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>

                            <th >Id</th>
                                <th >Name</th>
                                <th >Status</th>
                                <th >Purok</th>
                                <th >Purpose</th>
                                <th >Requested Date</th>
                                <th >Certificate</th>
                                <th>Action</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare('SELECT * from certificate INNER JOIN resident ON certificate.resident_ID  = resident.resident_ID INNER JOIN purok ON certificate.P_id = purok.P_id  WHERE Approve ="Approve" AND Certificate ="Barangay Clearance" AND Remarks ="Done"');
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
                                <td><?php echo $certificate['Requesteddate']   ?></td>
                                <td><?php echo $certificate['Certificate']   ?></td>
                                <td>
                                <form style ="display: inline-block"method ="POST" action="Certificate/SecBarangayclearance.php">

<input type="hidden" name = "id" value ="<?php echo  $certificate['id']?>" >

<button type="submit" class="btn btn-sm btn-info" name ="submit" >Print</button>
</form>
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
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

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

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

</body>

</html>