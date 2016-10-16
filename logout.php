<?php
session_start();
session_destroy();
header("Location: cdmain.php");
die();
//header('cdmain.php');
?>