<?php
Session_start();
include_once("../Db_connect/connection.php");



if(isset($_POST['Submit'])){

$id=$_POST['id'];


$complainant =$_POST['Complainant'];
$respondent =$_POST['Respondent'];
$Sdate =$_POST['date'];
$Stime =$_POST['Time'];
$datails =$_POST['Details'];





$statement = $conn->prepare("UPDATE tblblotter SET complainant=:name , respondent=:respondent,details=:details, Sdate=:Sdate,Stime=:Stime WHERE id=:id");

$statement->bindValue(':name',$complainant);
$statement->bindValue(':respondent',$respondent);

$statement->bindValue(':details',$datails);

$statement->bindValue(':Sdate',$Sdate);
$statement->bindValue(':Stime',$Stime);
$statement->bindValue(':id',$id);

$result = $statement ->execute(); 

$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["Suid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Updated Blotter";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 



header("location: ../Blotter.php");
}
?>