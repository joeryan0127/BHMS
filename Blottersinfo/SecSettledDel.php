<?php
include_once("../Db_connect/connection.php");

if(isset($_POST['del'])){

    $id=$_POST['id1'];

$statement= $conn ->prepare("DELETE FROM tblblotter WHERE id=:id ");

$statement->bindValue(':id',$id);
$result = $statement ->execute(); 
            
header('Location:../SecSettledBlotter.php');
}
?>