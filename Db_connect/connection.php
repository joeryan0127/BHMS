<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mayana";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php
// $statement =$conn->prepare('SELECT * FROM officials order by Offcial_id desc limit 1');
// $statement->execute();
// $official = $statement->fetch(PDO::FETCH_ASSOC);
// $lastid = $official['Offcial_id'];

// if($lastid == " "){

//     $official_id == "BMC001";
// }else {

//     $official_id = substr($lastid,3);
//     $official_id = intval($official_id);
//     $official_id = "BMC". ($official_id + 001);
// }

?>

