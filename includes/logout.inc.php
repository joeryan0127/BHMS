<?php

session_start();
unset($_SESSION["uid"]);
unset($_SESSION["fullname"]);
unset($_SESSION["user1"]);
unset($_SESSION["type1"]);



header("Location:../index.php");
exit();