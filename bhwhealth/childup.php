<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['submit'])){

$id =$_POST['id']; 
$parent=$_POST['Parent'];
    $wt=$_POST['Weight'];
    $ht=$_POST['Height'];
 
    
    
    
    $statement = $conn ->prepare("UPDATE newborn SET C_Parent=:parent,C_wt=:wt,C_ht=:ht Where resident_ID = :id ");
    
    
   
    $statement->bindValue(':parent',$parent);
    $statement->bindValue(':wt',$wt);
    $statement->bindValue(':ht',$ht);
    $statement->bindValue(':id',$id);
   
   
    
    $result = $statement ->execute(); 

    $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


    $account=$_SESSION["bhuid"];
    
    date_default_timezone_set('Asia/Manila');
    $todays_date = date("y-m-d h:i:sa");
    $today = strtotime($todays_date);
    $time=date("h:i:sa", $today);
    
    $action="Update Baby";
    $date = date('Y-m-d');
    
    $statement->bindValue(':id',$account);
    $statement->bindValue(':Ldate', $date);
    $statement->bindValue(':ltime', $time);
    $statement->bindValue(':laction',$action);
    $result = $statement ->execute(); 


    header("location: ../bhwchild.php");
}