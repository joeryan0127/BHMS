<?php
include_once 'bhwhead.php';
include_once("Db_connect/connection.php");


$id = $_GET['id']?? null;
if(!$id){

    header('Location: ../bhwdash.php');
    
    exit;
    
    }

   
?>


<?php
 $statement =$conn->prepare("SELECT * from patient WHERE Patient_id ='$id'");
 $statement->execute();
 $lib = $statement->fetch(PDO ::FETCH_ASSOC);
 $P_id=$lib['P_id'];
 $fname=$lib['fname'];
 $lname=$lib['Lname'];
 $age=$lib['Age'];
 $HT=$lib['height'];
 $WT=$lib['weight'];
 $BP=$lib['BP'];
 $temp=$lib['Temperature'];
 $PR=$lib['pulserate'];
 $Consult=$lib['Consultation'];

if($_SERVER['REQUEST_METHOD']==='POST'){
    
date_default_timezone_set('Asia/Manila');
    $meds=$_POST['Medicine'];
    $quantity=$_POST['quantity'];
    
    $date = date('Y-m-d');

    $P_id=$id;
   $remark="ok";

foreach($meds as $row2 =>$value){


   
    $statement =$conn->prepare("SELECT * FROM medicine WHERE Med_id=:Mid");
    $statement->bindParam(':Mid',$value);
    $statement->execute();
    $meds1 = $statement->fetch(PDO ::FETCH_ASSOC);
    $quant=$meds1['Med_quantity'];
    $love1= $meds1['Med_name'];
   

    if($quant >= $quantity[$row2]){

   
$ret = array();

$ret[$row2] = $quant - $quantity[$row2];
// echo $ret[$row2];

$statement = $conn ->prepare("UPDATE medicine SET Med_quantity=:Quant WHERE Med_id=:id");

$statement->bindValue(':Quant',$ret[$row2]);
$statement->bindValue(':id',$value);

$result = $statement ->execute(); 

    $statement = $conn ->prepare("INSERT INTO okpatient (Patient_id,Med_id,quantity,Date)
     VALUES (:p_id,:meds,:quant,:date)");


    $statement->bindValue(':p_id',$P_id); 
    $statement->bindValue(':meds',$value);
    $statement->bindValue(':quant',$quantity[$row2]);
    $statement->bindValue(':meds',$value);
    $statement->bindValue(':date',$date);
    
    $result = $statement ->execute(); 

    $statement = $conn ->prepare("UPDATE patient SET Remarks=:remark Where 	Patient_id = :id ");
    
    
   
    $statement->bindValue(':remark',$remark);
 
    $statement->bindValue(':id',$id);

    $result = $statement ->execute(); 


// echo "success";

echo "<script> alert('Success, $love1 is provide');</script>";
 

    }else {

       



    // foreach ($quantity as $a) {
            // if ($a > $quant) {

            // $statement =$conn->prepare("SELECT * FROM medicine WHERE Med_id=:Mid AND Med_quantity < $a");
            // $statement->bindParam(':Mid',$value);
            // $statement->execute();
            // $meds2 = $statement->fetch(PDO ::FETCH_ASSOC);
            
            $love= $meds1['Med_name'];
            // echo $love;
            // }
          echo "<script> alert('Not Enough Quantity of $love ');</script>";
        // }

      
    
        
   

    }
   

    }

}
?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                  
                    

                <!-- <button type="button" class="btn btn-info sidebot">Add Officials</button> -->
                <form  action="" method="post" enctype="multipart/form-data">

          <div class="card-body">
                            <div class="table-responsive">

                            <div class="row align-items-start">

                            <div class="col">
<label class ="text2" >Firstname</label> 
<input type ="text" class = "text1" name ="fname" placeholder ="FIrst Name" value="<?php echo $fname; ?>" required>


    </div>
    <div class="col">

<label class ="text2">Last Name</label> 
<input type ="text" class = "text1" name ="Lname" placeholder ="Last Name" value="<?php echo $lname; ?>"  required>

    </div>
    <div class="col">
<label class ="text2">Age</label> 
<input type ="text" class = "text1" name ="age"  placeholder ="Age" value="<?php echo $age; ?>" required>

    </div>

    </div>

 

<div class="row align-items-start">

  
    <div class="col">
<label class ="text2">Height</label> 
<input type ="Text" class = "text1" name ="Height"  value="<?php echo $HT; ?>" required>
    </div>
   

    <div class="col">
<label class ="text2">Weight</label> 
<input type ="Text" class = "text1" name ="Weight"  placeholder ="weight" value="<?php echo $WT; ?>" required>
    </div>

    <div class="col">

<label class ="text2">BP</label> 
<input type ="text" class = "text1" name ="Bp" placeholder ="BP" value="<?php echo $BP; ?>" required>
    </div>

  



  
<div class="col">
<label class ="text2">Temperature</label>
<input type ="text" class = "text1" name ="temp" placeholder ="Temparature"value="<?php echo $temp; ?>"  required>

    </div>

    <div class="col">
<label class ="text2">Pulserate</label> 
<input type ="text" class = "text1" name ="Pulse"  placeholder ="Pulse rate" value="<?php echo $PR; ?>" required>
    </div>


</div>

<div class="col">
<label class ="text2">Consultation</label> 
<textarea type ="text" class = "text1" name ="Consult" placeholder ="Consultation"  required><?php echo $Consult; ?></textarea>

</div>
           




                                <table class="table table-bordered" id="table_field">
                               
                           
                            <tr>

                            <th >Medicine</th>
                                <th >Quantity</th>
                        
                                <th>Action</th>
                            </tr>
                        
                        

                            <tr>
                            
                                <td>
                              
<?php


                    $statement =$conn->prepare("SELECT * from medicine WHERE Expiry_date >= :today AND remark=''");
                    $statement->bindValue(':today',$date);
                    $statement->execute();
                    $meds=$statement->fetchAll()?>

                    <!-- <select  name ="Medicine[]" class="form-control selectpicker"  data-live-search="true"   > -->
                    <input type = "text" name="Medicine[]" list="browM_id" class="form-control" placeholder ="Select Medicine"  required >
            <datalist id="browM_id">
                    <!-- <option >Select Medicine</option> -->
                    <?php foreach ($meds as $row1): ?>
                    <option value=<?= $row1['Med_id'] ?> > <?= $row1['Med_name'] ?> <?= $row1['Med_dosage'] ?>  <?= $row1['Med_quantity'] ?> </option>

                    <?php endforeach ?>
                  
                    </datalist> 
                 
                        </td>
                                <td><input type ="number" class = "form-control" name ="quantity[]" placeholder ="Quantity"  ></td>
                                <td><input type ="button" class = "btn btn-outline-success" name ="Add" value="+" id="add" ></td>
                             


                              
                            </tr>





                            </table>
                         <center>
                         <input type ="Submit" class = "btn btn-success" name ="save" value="Save date" id="save" >
                         </center>
                       
                            </div>
                        </div>
</from>
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



<script type ="text/javascript">
$(document).ready(function(){
    var html=' <tr><td><?php $statement =$conn->prepare("SELECT * from medicine WHERE Expiry_date >= :today AND remark=''"); $statement->bindValue(':today',$date); $statement->execute(); $meds=$statement->fetchAll()?>  <input type = "text" name="Medicine[]" list="browM_id" class="form-control" placeholder ="Select Medicine"  required > <datalist id="browM_id"><?php foreach ($meds as $row1): ?>
                <option value=<?= $row1['Med_id'] ?> ><?= $row1['Med_name'] ?> <?= $row1['Med_dosage'] ?> <?= $row1['Med_quantity'] ?> </option> <?php endforeach ?> </datalist> </td> <td><input type ="number" class = "form-control" name ="quantity[]" placeholder ="Quantity"  required></td><td><input type ="button" class = "btn btn-outline-danger" name ="Remove" value="x" id="Del"></td></tr>';
var x=1;

$("#add").click(function(){
   $("#table_field").append(html);
   $('.selectpicker').selectpicker('refresh');


});
$("#table_field").on('click','#Del',function(){
   $(this).closest('tr').remove();


});

});
</script>

<script>
    $(document).ready(function(){

        $('.search_select_box select').selectpicker();
    })
    </script>
</body>

</html>