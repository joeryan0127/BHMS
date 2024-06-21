<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['submit'])){

$Ci_id=$_POST['C_id'];
$resident =$_POST['R_id']; 

    $wt=$_POST['Weight'];
    $ht=$_POST['Height'];
    $vaccine=$_POST['Vaccine'];
    $Date=$_POST['date'];
    
    
    $statement = $conn ->prepare("INSERT INTO vaccine(C_id,resident_ID,weight,height,vaccine,vaccine_date)VALUES(:c_id,:rid,:wt,:ht,:vaccine,:date)");
    
    $statement->bindValue(':c_id',$Ci_id);
    $statement->bindValue(':rid',$resident);
   
    $statement->bindValue(':wt',$wt);
    $statement->bindValue(':ht',$ht);
    $statement->bindValue(':vaccine',$vaccine);
    $statement->bindValue(':date',$Date);
   
   
    
    $result = $statement ->execute(); 


    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["bhuid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Immunize Baby";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 


    header("location: ../bhwchild.php");



}
    ?>