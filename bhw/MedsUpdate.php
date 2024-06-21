<?php
session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['Submit'])){

    $id=$_POST['id'];
    $name=$_POST['Mname'];
    $dis=$_POST['Discription'];
    $dos=$_POST['Dosage'];
    $expire=$_POST['Edate'];
    $quantity=$_POST['quant'];
    


$statement = $conn ->prepare("UPDATE medicine SET Med_name=:Mname ,Med_discription=:discription ,Med_dosage=:dosage, Expiry_date=:Expire, Med_quantity=:Quant WHERE Med_id=:id");

$statement->bindValue(':Mname',$name);
$statement->bindValue(':discription',$dis);
$statement->bindValue(':dosage',$dos);
$statement->bindValue(':Expire',$expire);
$statement->bindValue(':Quant',$quantity);
$statement->bindValue(':id',$id);

$result = $statement ->execute(); 

$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["bhuid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Updated Medicine";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

header("location: ../bhwmedicine.php");
}
?>