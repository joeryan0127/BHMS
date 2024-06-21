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

if(isset($_POST['Submit'])){

    $id1=$_POST['id'];
    $position=$_POST['App'];

$statement = $conn ->prepare("UPDATE certificate SET Approve=:app WHERE id =:id");

$statement->bindValue(':app',$position);


$statement->bindValue(':id',$id1);

$result = $statement ->execute(); 

header("location: ../approve.php");

}
?>