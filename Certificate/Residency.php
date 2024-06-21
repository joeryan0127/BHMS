
<?php
session_start();

include_once("../Db_connect/connection.php");

$id = $_POST['id']?? null;
if(!$id){

    header('Location: ../BarangayResidency.php');
    
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
    
    $action="Print Barangay Residency";
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
<link rel="stylesheet" type ="text/css" href="../css/Style3.css">
<link rel="stylesheet" type ="text/css" href="../css/print.css" media="print" >
</head>
<body>
<div class="mother">
<div>
<div class="in"> 
<img class="Pic" src="../Pic/ML.png"> 
</div>

<div class="im"><center> <h1>____________________</h1></center>
<center><p> Republic of the Philippines</p></center>
<center><p> Province of Cebu</p></center>
<center><p> City of Naga</p></center>
<center><h4> Barangay Mayana</h4></center>
<center><h4> OFFICE OF THE PUNONG BARANGAY</h4></center><br><br><br>

</div>


<div class="in">
<img class="make" src="../Pic/NAGA-LT.png">
</div>

</div>
<hr>
<div class ="p"> <center><h2> CERTIFICATE OF RESIDENCY</h2></center>
</div>


<div class="pm" <h5>To Whom It May Concern: </h5><br><br><br><br><br><br><br><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is to certify that<u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fname .' '.$lname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>, <u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $age; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u> years old,</p>
<p> <u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cert["R_status"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>(civil status) <u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cert["R_gender"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>(gender) is a bonifide resident of <strong>Purok</strong><u><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cert["P_name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></u>, <strong></p>
<p>Barangay Mayana, City of Naga, Cebu</strong></p><br><br><br><br>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is issued upon the request of above name person for</p> _______________ and for whatever legal purpose it may serve best.<br><br><br><br><br><br><br><br><br><br>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issued this<u>&nbsp;&nbsp;&nbsp;<?php echo $day; ?>&nbsp;&nbsp;&nbsp;</u>day of__________________<strong><?php echo $year; ?></strong> at the office of the Punong Barangay <p>Mayana, City of Naga, Cebu.</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="op">
<h3>Hon.Rolando C. Oros</h3>

</div>
<div class="pb"><p>Punong Barangay</p>
</div>
</div>
<button onclick ="window.print();" class="side" name ="Submit"  id ="print" >Print</button>

  <input type="button" onclick="location.href='../BarangayResidency.php'" style="color:white;background-color:DodgerBlue;padding:0.5%;width=100%;" value="Back"id ="print" />

</body>
</html>