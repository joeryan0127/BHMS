<?php



session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['submit'])){

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);
$date = date('Y-m-d');

$complainant =$_POST['R_id'];
$add =$_POST['Add'];
$respondent =$_POST['brwR'];

$datails =$_POST['Details'];
$status ="Report";


$statement = $conn ->prepare("INSERT INTO tblblotter ( complainant,adress,respondent, date, time,	details, status) 
VALUES (:name,:add ,:respondent, :date,:time,:details,:status)");

$statement->bindValue(':name',$complainant);
$statement->bindValue(':add',$add);
$statement->bindValue(':respondent',$respondent);
$statement->bindValue(':date',$date);
$statement->bindValue(':time',$time);
$statement->bindValue(':details',$datails);
$statement->bindValue(':status',$status);


$result = $statement ->execute(); 



$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["Suid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Added Blotter";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 


header("location: ../SecReportBlotter.php");

}

?>

