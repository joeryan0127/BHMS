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
include_once 'header.php';


// $statement = $conn->prepare("SELECT * from officials");
// $statement =
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <div class="pos1">
            <h5>Approve Account</h5>
        </div>
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
          
                <!-- <button type="button" class="btn btn-success sidebot" data-toggle="modal" data-target="#addofficialModal">Add Officials</button>
                       -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                               
                                
                            <thead class ="alert-info">
                            <tr>
                          
                            <th >Account Id</th>
                                <th >Full Name</th>
                             
                                <th >User Name</th>
                                <th >Type</th>
                          
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $statement =$conn->prepare('SELECT * from Account WHERE Remark =" "');
                            $statement->execute();
                            while($certificate=$statement->fetch()){

                                ?>
                            
                            
                            <tr>
                               <td><?php echo $certificate['A_id']   ?></td>
                                <td><?php echo $certificate['A_Completename']   ?></td>
                          
                                <td><?php echo $certificate['A_username']   ?></td>
                                <td><?php echo $certificate['A_type']   ?></td>
                             
                                <td>
                                 
                                <div style ="display:inline-block">
                               
                            <!-- <a href="#edit_" class="btn btn-sm btn-primary " ><i class="fa fa-edit"></i> </<a>
                           -->
                           <a href="#edit2_<?php echo $certificate['A_id'] ; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="far fa-thumbs-up"></span></a>

                        <?php include('Barangay/AccountAppfunct.php'); ?>
                       
                        <a href="#edit3_<?php echo $certificate['A_id'] ; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fas fa-times"></span></a>

                        <?php include('Barangay/AccountDelM.php'); ?>

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