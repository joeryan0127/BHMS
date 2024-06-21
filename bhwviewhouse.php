<?php
include_once("Db_connect/connection.php");

$id = $_GET['id']?? null;
if(!$id){

    header('Location: ../household.php');
    
    exit;
    
    }
    include_once 'bhwhead.php';
?>
                 <?php


$statement =$conn->prepare("SELECT * ,purok.P_name  FROM resident INNER JOIN purok on resident.P_id=purok.P_id WHERE householdNO=:id AND Remark !='Migrate'");
$statement->bindParam(':id', $id);
$statement->execute();
$lib = $statement->fetchAll(PDO ::FETCH_ASSOC);
?>


<div class="container-fluid">

 
    <!-- DataTales Example -->
    <div  class="card shadow mb-4 ">
  

<h3>Family Members</h3>
<table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">resident_ID</th>
      <th scope="col">Household_ID</th>
      <th scope="col">Purok</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">last Name</th>
      <th scope="col">Age</th>
      
      <th scope="col">Remark</th>
    </tr>
  </thead>
  <tbody>
 
  <?php foreach($lib as $i =>$lib ):?>
    <?php
 $today =date("Y-m-d");
 $bdate1=$lib['R_birthdate'];
 $diff=date_diff(date_create($bdate1),date_create($today));
 $age=$diff->format('%y');
?>
<tr>
  <th scope="row"><?php echo $i+1?> </th>
  <td><?php echo $lib['resident_ID']   ?></td>
  <td><?php echo $lib['householdNO']   ?></td>
  <td><?php echo $lib['P_name']   ?></td>
  <td><?php echo $lib['R_firstname']   ?></td>
  <td><?php echo $lib['R_Middilename']   ?></td>
  <td><?php echo $lib['R_Lastname']   ?></td>
  <td><?php echo $age  ?></td>
  <td><?php echo $lib['Remark']   ?></td>

</tr>

<?php endforeach;?>

  </tbody>
</table>

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


  

<!-- delete script -->




</body>

</html>