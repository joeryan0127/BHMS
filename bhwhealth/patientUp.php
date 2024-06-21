<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['SubmitP'])){

$Purok =$_POST['P_id']; 
$id=$_POST['id'];
    $fname=$_POST['fname'];
    $Mname=$_POST['Mname'];
    $Lname=$_POST['Lname'];
  
    $Gender=$_POST['gender'];
    $age=$_POST['age'];
    $ht =$_POST['Height'];
    $Weight=$_POST['Weight'];
    $bp=$_POST['Bp'];
   
    $temp=$_POST['temp'];
    $pulse=$_POST['Pulse'];
    $consult=$_POST['Consult'];

    
  
    
    
    
    $statement = $conn ->prepare("UPDATE patient SET P_id=:Pid ,fname=:fname , Mname=:manme, Lname=:lname , gender=:gender, Age=:age,height=:ht,weight=:weight, BP=:bp, Temperature=:temp, pulserate=:pulse, Consultation=:consult WHERE Patient_id=:id");
    
    
    $statement->bindValue(':Pid',$Purok);
    $statement->bindValue(':fname',$fname);
    $statement->bindValue(':manme',$Mname);
    $statement->bindValue(':lname',$Lname);
 
    $statement->bindValue(':gender',$Gender);
    $statement->bindValue(':age',$age);
    $statement->bindValue(':ht',$ht);
    $statement->bindValue(':weight',$Weight);
    $statement->bindValue(':bp',$bp);
    $statement->bindValue(':temp',$temp);
    $statement->bindValue(':pulse',$pulse);
    $statement->bindValue(':consult',$consult);
;
    $statement->bindValue(':id',$id);
   
    
    $result = $statement ->execute(); 


    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["bhuid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Update Patient";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 


    header("location: ../bhwpatient.php");



}
    ?>