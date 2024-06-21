<?php
include_once("Db_connect/connection.php");

$no=$_REQUEST['p'];

$con=mysqli_connect("localhost","root","","mayana");

if($no!==""){
  $query=mysqli_query($con,"SELECT * From 'houshold' WHERE householdNO='$no'");

  $row = mysqli_fetch_array($query);
  $member=$row["H_member"];
  $head=$row["H_headoffamily"];
}
$result =array("$member","$head");
$myJSON = json_encode($result);
echo $myJSON;


?>