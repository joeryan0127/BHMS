<?php
session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['del'])){

    $id =$_POST['id1'];

$statement = $conn ->prepare("DELETE FROM purok WHERE P_id =:id ");

$statement->bindValue(':id',$id);

try {

$result = $statement ->execute();


$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["Suid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Deleted Purok";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 
            
header('Location:../SecPurok.php');

}catch(Exception $e) {
        
       
    header("Location:../SecPurok.php?error=purok");
}

}
?>