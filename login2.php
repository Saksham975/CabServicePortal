<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
$username=$_GET["username"];
$password=$_GET["password"];
$sqlcheck="Select * from login where username='$username' and password='$password'";
$retval=mysqli_query($conn,$sqlcheck);

$message="Invalid Username or Password";


if(mysqli_num_rows($retval)==1){
    session_start();
    $_SESSION["xyz"] = $username;
    header("Location:afterlogin.php?uname=$username");
    
}else{
    header("Location:cabmain.php?Message=".urlencode($message));
}

mysqli_close($conn);  
?>