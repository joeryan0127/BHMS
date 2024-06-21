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

        header("Location: ../Account.php?error=Passmismatch");
        exit();
    }

    if(userExist1($conn, $Uname)!==false){

        header("Location: ../Account.php?error=Usernameistaken");
        exit();
    }

    // if(!preg_match ("/^[a-zA-Z\s]+$/", $pass)){

    //     header("Location: ../Account.php?error=number");
    //     exit();
    // }

    if(Strlen($pass)>=8){

        if(!ctype_upper($pass)&& !ctype_lower($pass)){
            creatUser1($conn, $fname, $Uname, $pass, $type);
         // header("Location: ../register.php?error=notuppercaase");
         exit();
        }else{
         header("Location: ../Account.php?error=notlowercaase");
         exit();
        }
     
        }else{
         header("Location: ../Account.php?error=not8");
         exit();
     
     
         }

    // creatUser1($conn, $fname, $Uname, $pass, $type);
}else{
    header("Location: ../Account.php");
    exit();
}
