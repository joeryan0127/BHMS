<?php
session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['Submit'])){

    $id=$_POST['id'];
    $Remark="OK";

    


$statement = $conn ->prepare("UPDATE prenatal SET Remarks=:remark WHERE prenatal_id=:id");

$statement->bindValue(':remark',$Remark);

$statement->bindValue(':id',$id);

$result = $statement ->execute(); 

$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["Nuid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Prenatal";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

header("location: ../nurseprenatal.php");
}
?>