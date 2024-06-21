<?php

session_start();
unset($_SESSION["Nuid"]);
unset($_SESSION["Nfullname"]);
unset($_SESSION["Nuser1"]);
unset($_SESSION["Ntype1"]);



header("Location:../index.php");
exit();