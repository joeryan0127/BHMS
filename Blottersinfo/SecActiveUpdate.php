<?php
include_once("../Db_connect/connection.php");



if(isset($_POST['Submit'])){

$id=$_POST['id'];
$complainant =$_POST['Complainant'];
$respondent =$_POST['Respondent'];
$date =$_POST['date'];
$time =$_POST['Time'];
$datails =$_POST['Details'];
$status =$_POST['Stat'];




$statement = $conn->prepare("UPDATE tblblotter SET complainant=:name , respondent=:respondent, date=:date, time=:time,details=:details, status=:status WHERE id=:id");

$statement->bindValue(':name',$complainant);
$statement->bindValue(':respondent',$respondent);
$statement->bindValue(':date',$date);
$statement->bindValue(':time',$time);
$statement->bindValue(':details',$datails);
$statement->bindValue(':status',$status);
$statement->bindValue(':id',$id);

$result = $statement ->execute(); 


header("location: ../SecactiveBotter.php");
}
?>