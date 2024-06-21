<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['submit'])){

$resident =$_POST['R_id']; 
$parent=$_POST['browres'];
    $wt=$_POST['Weight'];
    $ht=$_POST['Height'];
 
    
    
    
    $statement = $conn ->prepare("INSERT INTO newborn(resident_ID,C_Parent,C_wt,C_ht)VALUES(:rid,:parent,:wt,:ht)");
    
    
    $statement->bindValue(':rid',$resident);
    $statement->bindValue(':parent',$parent);
    $statement->bindValue(':wt',$wt);
    $statement->bindValue(':ht',$ht);
 
   
   
    
    $result = $statement ->execute(); 


    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["bhuid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Add Baby";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 


    header("location: ../bhwResident.php");



}
    ?>