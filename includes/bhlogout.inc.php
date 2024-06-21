<?php

session_start();
unset($_SESSION["bhuid"]);
unset($_SESSION["bhfullname"]);
unset($_SESSION["bhuser1"]);
unset($_SESSION["bhtype1"]);



header("Location:../index.php");
exit();