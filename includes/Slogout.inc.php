<?php

session_start();
unset($_SESSION["Suid"]);
unset($_SESSION["Sfullname"]);
unset($_SESSION["Suser1"]);
unset($_SESSION["Stype1"]);



header("Location:../index.php");
exit();