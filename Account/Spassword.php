<?php
session_start();
include_once("../Db_connect/connection.php");


$id = $_SESSION["Suid"];
$stmt = $conn->prepare("SELECT * FROM account WHERE A_id = :id");
$stmt->bindParam(':id',$id);
$stmt->execute();


$UserDetails = $stmt->fetch(PDO::FETCH_ASSOC);



if(isset($_POST['Submit'])){

    
$new =$_POST['new'];
$new1=$_POST['new1'];
$new2=$_POST['new2'];




$pass=$UserDetails["A_password"];
$checkpwd = password_verify($new, $pass );

if($checkpwd===false){
    header("location: ../secretarydash.php?error=WrongCurrentpass");
    echo $checkpwd;
}else if($new1!==$new2){

    header("location: ../secretarydash.php?error=Wrongpass");


}else if(Strlen($new1)>=8){

    if(!ctype_upper($new1)&& !ctype_lower($new1)){



    $statement = $conn ->prepare("UPDATE account SET A_password=:Pass WHERE A_id =:id");

    $hashedpwd = password_hash($new1, PASSWORD_DEFAULT);

    $statement->bindValue(':Pass',$hashedpwd);
   
    $statement->bindValue(':id',$id);
    
    
    $result = $statement ->execute(); 
    
    header("location: ../secretarydash.php?error=None");

}else{
    header("Location: ../secretarydash.php?error=notlowercaase");
    exit();
   }

   }else{
    header("Location: ../secretarydash.php?error=not8");
    exit();


    }

}

?>