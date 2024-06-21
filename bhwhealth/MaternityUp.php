<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['Submit'])){

$id=$_POST['id'];
 
    $temp=$_POST['temp'];
    $age=$_POST['age'];
    $wt =$_POST['wt'];
    $ht=$_POST['ht'];
    $bp=$_POST['Bp'];
   
    
    $pulse=$_POST['Pr'];
    $edc=$_POST['Edc'];
    $Aog=$_POST['Aog'];
  
    
    
    
    $statement = $conn ->prepare("UPDATE maternity SET 	temp=:temp, age=:age,Wt=:Wt,Ht=:Ht, Bp=:bp, Pr=:pr, Edc=:edc, Aog=:Aog WHERE Maternity_id=:id");
    
    $statement->bindValue(':temp',$temp);
    $statement->bindValue(':age',$age);
    $statement->bindValue(':Wt',$wt);
    $statement->bindValue(':Ht',$ht);
    $statement->bindValue(':bp',$bp);
    $statement->bindValue(':pr',$pulse);
    $statement->bindValue(':edc',$edc);
    $statement->bindValue(':Aog',$Aog);
    $statement->bindValue(':id',$id);
   
    
    $result = $statement ->execute(); 


    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["bhuid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Update Mother";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 


    header("location: ../bhwmaternity.php");



}
    ?>