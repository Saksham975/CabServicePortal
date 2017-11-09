<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$name=$_POST["nameforsign"];
$email=$_POST["emailforsign"];
$phone=$_POST["phoneforsign"];
$password=$_POST["passwordforsign"];

$sql = "INSERT INTO login values ('$name',' $email','$phone','$password')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
//header("Location:afterlogin.html");
?>