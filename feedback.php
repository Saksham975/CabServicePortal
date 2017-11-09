<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  

$name=$_GET["name"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$message=$_GET["message"];

$sql = "INSERT INTO feedback values('$name','$email','$phone','$message')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
//header('Location: '.$_SERVER['PHP_SELF']);
$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
mysqli_close($conn);  
?>