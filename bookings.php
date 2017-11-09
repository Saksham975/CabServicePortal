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

    echo "<b>Airport Bookings</b>"."<br>"."<br>";
$sql="Select * from airport where username='".$uname."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "Name: " . $row["name"]."<br>". " City: " . $row["city"]."<br>"." Date: " . $row["date"]."<br>"." Car-Type: " . $row["cartype"]."<br>"." Address: " . $row["address"]."<br>"."<br>" ;
}
}else{
    echo "No Bookings";
}
    
    echo "<br>"."<br>"."<b>Station Bookings</b>"."<br>"."<br>";
$sql1="Select * from station where username='".$uname."'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "Name: " . $row["name"]."<br>". " City: " . $row["city"]."<br>"." Date: " . $row["date"]."<br>"." Car-Type: " . $row["cartype"]."<br>"." Address: " . $row["address"]."<br>"."<br>" ;
}
}else{
    echo "No Bookings";
}
    
    echo "<br>"."<br>"."<b>Outstation Bookings</b>"."<br>"."<br>";
$sql2="Select * from outstation where username='".$uname."'";
$result = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "Name: " . $row["name"]."<br>". " City: " . $row["city"]."<br>"." Destination: " . $row["destination"]."<br>"." Date: " . $row["date"]."<br>"." Car-Type: " . $row["cartype"]."<br>"." Address: " . $row["address"]."<br>"."<br>" ;
}
}else{
    echo "No Bookings";
}
    
    echo "<br>"."<br>"."<b>Rent Car Bookings</b>"."<br>"."<br>";
$sql3="Select * from rentcar where username='".$uname."'";
$result = mysqli_query($conn, $sql3);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "Name: " . $row["name"]."<br>". " Address: " . $row["address"]."<br>"." Date: " . $row["date"]."<br>"." Days: " . $row["days"]."<br>"." Car-Type: " . $row["cartype"]."<br>"."<br>" ;
}
}else{
    echo "No Bookings";
}
mysqli_close($conn);
?>
    </body></html>