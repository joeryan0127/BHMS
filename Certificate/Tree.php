<?php
session_start();
include_once("../Db_connect/connection.php");

$id = $_POST['id']?? null;
if(!$id){

    header('Location: ../Clearance.php');
    
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
    
    $action="Print Cut tree permit";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 



    }
    
    $stmt = $conn->prepare("SELECT *from certificate INNER JOIN resident ON certificate.resident_ID  = resident.resident_ID INNER JOIN purok ON certificate.P_id = purok.P_id  WHERE  id = :id ");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $cert = $stmt->fetch(PDO::FETCH_ASSOC);
    $fname= $cert["R_firstname"];
    $lname= $cert["R_Lastname"];
    $bdate= $cert["R_birthdate"];
  
    $cert["R_status"];
    $cert["P_name"];

    $today =date("Y-m-d");
    $diff=date_diff(date_create($bdate),date_create($today));
    $age=$diff->format('%y');

 

?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type ="text/css" href="../css/style.css" >
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
<center><h4><p> OFFICE OF THE PUNONG BARANGAY<p></h4></center><br><br><br>

</div>


<div class="in">
<img class="dick" src="../Pic/NAGA-LT.png">
</div>

</div>
<hr>
<div class ="p"> <center><h2> NO OBJECTION TO CUT TREE CERTIFICATE</h2></center>
</div>

<div class="ip">
<p><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $today ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
<p class="am">Date</p><br><br>
</div>
<div class="pm" <h5>THE ADMINISTRATOR</h5>
<p>CENRO</p>
<p>Carcar City, Cebu</p><br><br><br><br>
<p>Dear Sir/Madam,</p><br><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is to certify that <strong><?php echo $fname .' '.$lname ?></strong>          of legal age, and a resident of Purok <strong><?php echo $cert["P_name"]; ?></strong> Barangay Mayana,</p>
<p> City of Naga, Cebu appeared to my office. He is requesting a permit to cut__________________tree. </p>
<p></p><br><br><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reason:</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________</p><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Basing on the reason stated above, this officer of the Barangay Captain shall issue this certification of <strong>"NO</strong> </p>
<p><strong> OBJECTIVES TO CUT</strong> <strong>TREES"</strong> as one of the requirements for the issue once to <strong>CUTTING PERMIT</strong> of</p>
<p>the Department of Environment and Natural Resources.</p><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="op">
<h3>Hon.Rolando C. Oros</h3>

</div>
<div class="pb"><p>Punong Barangay</p>
</div>
</div>
<br>
</br>

<button onclick ="window.print();" class="side" name ="Submit1"  id ="print" >Print</button>

  
  <input type="button" onclick="location.href='../Clearance.php'" style="color:white;background-color:DodgerBlue;padding:0.5%;width=100%;" value="Back"id ="print" />

<?php

?>
</body>
</html> 