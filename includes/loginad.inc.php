<?php


if(isset($_POST["submit"])){

    $Uname = $_POST["Uname"];
    $pass = $_POST["pass"];
   

   
    require_once("../Db_connect/connection.php");
    require_once 'function.inc.php';

   
    loginUser($conn, $Uname, $pass);

}else{
    header("Location:../login.php");
}