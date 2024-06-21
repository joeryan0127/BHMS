<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['submit'])){

$resident =$_POST['R_id']; 
$maternity =$_POST['M_id']; 
$wt=$_POST['wt'];
    $Bp=$_POST['Bp'];
    $temp=$_POST['temp'];
    $week=$_POST['week'];
 $vaccine=$_POST['vaccine'];

 date_default_timezone_set('Asia/Manila');
 $date = date('Y-m-d');
    
    
    $statement = $conn ->prepare("INSERT INTO prenatal(resident_ID,	Maternity_id,Wt,Bp,temp,week,DOI,vaccine)VALUES(:rid,:M_id,:wt,:Bp,:temp,:week,:date,:vaccine)");
    
    
    $statement->bindValue(':rid',$resident);
    $statement->bindValue(':M_id',$maternity);
    $statement->bindValue(':wt',$wt);
    $statement->bindValue(':Bp',$Bp);
    $statement->bindValue(':temp',$temp);
    $statement->bindValue(':week',$week);
    $statement->bindValue(':date',$date);
    $statement->bindValue(':vaccine',$vaccine);
 
   
   
    
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


    header("location: ../bhwmaternity.php");



}
    ?>