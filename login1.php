<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$conn = mysqli_connect($host, $user, $pass,"test");
 
   
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$name=$_GET["nameforsign"];
$username=$_GET["usernameforsign"];
$email=$_GET["emailforsign"];
$phone=$_GET["phoneforsign"];
$password=$_GET["passwordforsign"];

$message="Username already exists";
$message1="Please fill all the details";
$message3="Thankyou for registering. Please enjoy our services.";

if($name=="" || $username=="" || $email=="" || $phone=="" || $password=="" ){
    header("Location:cabmain.php?Message2=".urlencode($message1));
}

else{
    
    
if((!preg_match("/^[a-zA-Z0-9]+\.[a-zA-Z0-9]+\@vit\.ac\.in$/",$email))&&(!preg_match("/^[A-Z][a-z]*\s[A-Z][a-z]+$/",$name))&&(!preg_match("/^[1-9][0-9]{9}$/",$phone))){
    header("Location:cabmain.php?emailerror=Please fill valid email id & phoneerror=Please fill valid phone & nameerror=Please fill valid name");
}
    else if((!preg_match("/^[A-Z][a-z]*\s[A-Z][a-z]+$/",$name))&&(!preg_match("/^[1-9][0-9]{9}$/",$phone))){
    header("Location:cabmain.php?phoneerror=Please fill valid phone & nameerror=Please fill valid name");
}
    else if((!preg_match("/^[a-zA-Z0-9]+\.[a-zA-Z0-9]+\@vit\.ac\.in$/",$email))&&(!preg_match("/^[1-9][0-9]{9}$/",$phone))){
    header("Location:cabmain.php?emailerror=Please fill valid email id & phoneerror=Please fill valid phone");
}
    else if((!preg_match("/^[a-zA-Z0-9]+\.[a-zA-Z0-9]+\@vit\.ac\.in$/",$email))&&(!preg_match("/^[A-Z][a-z]*\s[A-Z][a-z]+$/",$name))){
    header("Location:cabmain.php?emailerror=Please fill valid email id & nameerror=Please fill valid name");
}
    else if((!preg_match("/^[a-zA-Z0-9]+\.[a-zA-Z0-9]+\@vit\.ac\.in$/",$email))){
    header("Location:cabmain.php?emailerror=Please fill valid email id");
}
    else if((!preg_match("/^[A-Z][a-z]*\s[A-Z][a-z]+$/",$name))){
    header("Location:cabmain.php?nameerror=Please fill valid name");
}
    else if((!preg_match("/^[1-9][0-9]{9}$/",$phone))){
    header("Location:cabmain.php?phoneerror=Please fill valid phone");
}
    
    else{
$sqlcheck="Select * from login where username='$username'";
$retval=mysqli_query($conn,$sqlcheck);

if(mysqli_num_rows($retval)>0){
    header("Location:cabmain.php?Message1=".urlencode($message));
}
else{
$sql = "INSERT INTO login values('$name','$username', '$email','$phone','$password')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
header("Location:cabmain.php?Message3=".urlencode($message3));
}
}
}
mysqli_close($conn);  
?>