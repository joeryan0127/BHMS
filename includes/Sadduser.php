<?php

if(isset($_POST["ok"])){

    $fname= $_POST["Name"];
    $Uname= $_POST["User"];
    $pass= $_POST["pass"];
    $rpass = $_POST["Rpass"];
    $type= $_POST["type"];

   
    require_once("../Db_connect/connection.php");
    require_once 'function.inc.php';


    if(passMatch1($pass, $rpass)!==false){

        header("Location: ../SecAccount.php?error=Passmismatch");
        exit();
    }

    if(userExist1($conn, $Uname)!==false){

        header("Location: ../SecAccount.php?error=Usernameistaken");
        exit();
    }

    if(Strlen($pass)>=8){

        if(!ctype_upper($pass)&& !ctype_lower($pass)){
            creatUser2($conn, $fname, $Uname, $pass, $type);
         // header("Location: ../register.php?error=notuppercaase");
         exit();
        }else{
         header("Location: ../SecAccount.php?error=notlowercaase");
         exit();
        }
     
        }else{
         header("Location: ../SecAccount.php?error=not8");
         exit();
     
     
         }



  
}else{
    header("Location: ../SecAccount.php");
    exit();
}
