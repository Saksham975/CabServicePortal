<?php  
session_start();  
unset($_SESSION["xyz"]);
session_destroy();
header("Location:cabmain.php");
?>

