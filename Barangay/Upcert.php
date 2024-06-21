<?php
include_once("../Db_connect/connection.php");


// $statement =$conn->prepare('SELECT Offcial_id FROM officials limit 1');
// $statement->execute();
// $official = $statement->fetch(PDO::FETCH_ASSOC);
// $lastid = $official['Offcial_id'];

// if($lastid == " "){

//     $official_id == "BMC1";
// }else {


//     $official_id = substr($lastid,3);
//     $official_id = intval($official_id);
//     $official_id = "BMC".($official_id +1);
// }

if(isset($_POST['Submit1'])){
$id1=$_POST['id'];
$end=$_POST['purpose'];
$request=$_POST['Request'];
$cert=$_POST['Cert'];

$statement = $conn ->prepare("UPDATE certificate SET  Porpose=:Porpose, Requesteddate=:Request , Certificate=:Cert WHERE id =:id");

$statement->bindValue(':Porpose',$end);


$statement->bindValue(':Request',$request);
$statement->bindValue(':Cert',$cert);

$statement->bindValue(':id',$id1);

$result = $statement ->execute(); 

header("location: ../Request.php");

}
?>