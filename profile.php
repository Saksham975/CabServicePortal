<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$uname=$_SESSION["xyz"];
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname); 
    
    echo "<b>Profile Details</b>"."<br>"."<br>";
    $sql="Select * from login where username='".$uname."'";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"]."<br>". " Username: " . $row["username"]."<br>"." Email-id: " . $row["email"]."<br>"." Phone Number: " . $row["phonenum"]."<br>"." Your Password: " . $row["password"]."<br>"."<br>" ;
    }
}else{
    echo "Some Error Occured";
}
    
    
    
mysqli_close($conn);
?>
    </body></html>