<?php

if(isset($_POST["submit"])){

    $fname= $_POST["FN"];
    $Uname= $_POST["UN"];
    $pass= $_POST["pass"];
    $rpass = $_POST["Rpass"];
    $type= $_POST["type"];
 

   
    require_once("../Db_connect/connection.php");
    require_once 'function.inc.php';


    if(passMatch($pass, $rpass)!==false){

        header("Location: ../register.php?error=Passmismatch");
        exit();
    }

    if(userExist($conn, $Uname)!==false){

        header("Location: ../register.php?error=Usernameistaken");
        exit();
    }

    // if(!preg_match ("/^[a-zA-Z\s]+$/", $pass)){

    //     header("Location: ../register.php?error=number");
    //     exit();
    // }

    if(Strlen($pass)>=8){

   if(!ctype_upper($pass)&& !ctype_lower($pass)){
    creatUser($conn, $fname, $Uname, $pass, $type);
    // header("Location: ../register.php?error=notuppercaase");
    exit();
   }else{
    header("Location: ../register.php?error=notlowercaase");
    exit();
   }

   }else{
    header("Location: ../register.php?error=not8");
    exit();


    }

}else{

    header("Location: ../register.php");
    exit();
}