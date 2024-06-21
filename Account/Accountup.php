<?php
// include_once("../Db_connect/connection.php");

// if(isset($_POST['Submit'])){

    
//     $id=$_POST["id"];
//     $fname= $_POST["Name"];
//     $Uname= $_POST["User1"];
 
//     $type= $_POST["type"];

//     $stmt = $conn->prepare("SELECT A_username FROM account WHERE  A_id = :id");
//     $stmt->bindParam(':id', $id);
//     $stmt->execute();

//     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
//  if($Uname!==$data){
//      echo "iloveu";
//  }else{
//      echo "ihateu";
//  }
//     $stmt =$conn->prepare("UPDATE account SET A_Completename=:fullname, A_username=:uname , A_type=:types WHERE A_id=:id");

   

//     $stmt ->bindValue(':fullname', $fname);
//     $stmt ->bindValue(':uname', $Uname);
   
//     $stmt ->bindValue(':types', $type);
   
//     $stmt->bindValue(':id',$id);

//     $result = $stmt->execute();
   
//     header("location: ../Account.php?error=none");
//     exit;      
  
//     }else{
   
    
       
//     }
    
   

?>
