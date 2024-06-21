<?php
session_start();
include_once("../Db_connect/connection.php");

$id = $_POST['id']?? null;
if(!$id){

    header('Location: ../Barangayclear.php');
    
    exit;
    
    }
    if(isset($_POST['submit'])){
    
        $remark="Done";
    $statement = $conn ->prepare("UPDATE certificate SET Remarks=:remark WHERE id =:id");

    $statement->bindValue(':remark',$remark);
    $statement->bindValue(':id',$id);
    $result = $statement ->execute(); 

    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["uid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Print Barangay Clearance";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 
  
  

}
   
$stmt = $conn->prepare("SELECT * from certificate INNER JOIN resident ON certificate.resident_ID  = resident.resident_ID INNER JOIN purok ON certificate.P_id = purok.P_id  WHERE  id = :id ");
$stmt->bindParam(':id',$id);
$stmt->execute();
$cert = $stmt->fetch(PDO::FETCH_ASSOC);
$fname= $cert["R_firstname"];
$lname= $cert["R_Lastname"];
$bdate= $cert["R_birthdate"];

$cert["R_status"];
$cert["R_gender"];
$cert["P_name"];

$today =date("Y-m-d");
$diff=date_diff(date_create($bdate),date_create($today));
$age=$diff->format('%y');

$day =date("d");
$month =date("m");
$year =date("Y");
 

 

?>






<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type ="text/css" href="../css/Style1.css">
<link rel="stylesheet" type ="text/css" href="../css/print.css" media="print" >
</head>
<body>
<div class="A2">
<div>
<div class="A3"> 
<img class="Pic" src="../Pic/ML.png"> 
</div>

<div class="A4"><center> <h1>____________________</h1></center>
<center><p> Republic of the Philippines</p></center>
<center><p> Province of Cebu</p></center>
<center><p> City of Naga</p></center>
<center><h4> Barangay Mayana</h4></center>
<center><p> OFFICE OF THE PUNONG BARANGAY</p></center>
<br>


</div>

<div class="A3">
<img class="dick" src="../Pic/NAGA-LT.png">
</div>
<br><br><br><br><br><br><br><br><br><br><br>
</div>
<center><h1><u> BARANGAY CLEARANCE</u></h1></center>
<div class="A1"<p><b>TO WHOM IT MAY CONCERN:</b></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is to certify that Mr./Ms.<u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fname .' '.$lname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>,<u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $age ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u> years old,</p>
<p><u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cert["R_status"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>(civil status)<u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cert["R_gender"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>(gender) is a bonafide resident of Purok<u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cert["P_name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u></p>
<p>Barangay Mayana, City of Naga, Cebu has applied for Barangay Clearance.</p>
<!-- <br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___1. Business permit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___7. Electrical Permit</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___2. Driver's License&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___8. Travel</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___3. Professional    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___9. Employment</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___4. Money/Package   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___10. Abroad</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___5. Student         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___11. Loan:</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___6. Building permit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___12. Others:_________</p> -->
<div class="i">
<div class="A5">
<p>_____1. Business permit</p>
<p>_____2. Driver's License</p>
<p>_____3. Professional</p>
<p>_____4. Money/Package</p>
<p>_____5. Student</p>
<p>_____6. Building permit</p>

</div>
<div class="A5">
<p>_____1. Business permit</p>
<p>_____2. Driver's License</p>
<p>_____3. Professional</p>
<p>_____4. Money/Package</p>
<p>_____5. Student</p>
<p>_____6. Building permit</p>

</div>

</div>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is being issued upon the requesr of the named person to attest his/her</p> 
<p>good moral standing in our community</p><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Issued this <u>&nbsp;&nbsp;&nbsp;<?php echo $day; ?>&nbsp;&nbsp;&nbsp;</u> day of ________, <strong><?php echo $year; ?></strong> at Barangay Mayana, City of Naga, Cebu.</p>
<br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<p> ____________________</p>
<p>&nbsp;&nbsp;&nbsp;Signiture of applicant </p>
<div class="op">
<h3>Hon.Rolando C. Oros</h3>
</div>
<div class="PB"><p>Punong Barangay</p>
</div>

</div>
<button onclick ="window.print();" class="side" name ="Submit"  id ="print" >Print</button>

  <input type="button" onclick="location.href='../Barangayclear.php'" style="color:white;background-color:DodgerBlue;padding:0.5%;width=100%;" value="Back"id ="print" />

</body>
</html>