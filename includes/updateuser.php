<?php

if(isset($_POST["Submit"])){

    $id =$_POST["id"];
    $fname= $_POST["Name"];
   
    $type1= $_POST["types"];

  
    require_once("../Db_connect/connection.php");
    require_once 'function.inc.php';


    // if(userExist1($conn, $Uname)!==false){

    //     header("Location: ../Account.php?error=Usernameistaken");
    //     exit();
    // }
    updateUser($conn,$id,$fname, $type1);
}else{
    header("Location: ../Account.php");
    exit();
}
