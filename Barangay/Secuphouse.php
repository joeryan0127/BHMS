<?php

session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['Submit'])){

    $id =$_POST['id'];
$Purok =$_POST['Purok'];
$member=$_POST['member'];
$Family=$_POST['Family'];
$benefit=$_POST['benefit'];




$statement = $conn ->prepare("UPDATE houshold SET P_id=:Purok ,H_member=:member ,H_headoffamily=:Hof,govBenefits=:benefits WHERE householdNO =:id");

$statement->bindValue(':Purok',$Purok);
$statement->bindValue(':member',$member);
$statement->bindValue(':Hof',$Family);
$statement->bindValue(':benefits',$benefit);
$statement->bindValue(':id',$id);


$result = $statement ->execute(); 

$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["Suid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Updated Household";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

header("location: ../Sechousehold.php");
}
?>