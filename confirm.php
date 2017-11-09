<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php
$uname=$_SESSION["xyz"];
$table=$_SESSION['tablename'];
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
$msg="Username: ";
$conn = mysqli_connect($host, $user, $pass,$dbname); 
    
    
    
    
        
    
    if(isset($_GET['confirmbill'])){
        $sql="select * from $table order by id desc limit 1";
        $sqlmail="select email from login where username='$uname'";
        $result = mysqli_query($conn, $sql);
        $result1=mysqli_query($conn,$sqlmail);
        if($table=='airport'||$table=='station'){
      
            if($result1){
            if(mysqli_num_rows($result1)>0){
                while($row1=mysqli_fetch_assoc($result1)){
                    $email=$row1["email"];
                }
            }
        }
            
            
           if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $username=$row["username"];
            $name=$row["name"];
            $city=$row["city"];
            $date=$row["date"];
            $cartype=$row["cartype"];
            $car=$row["car"];
            $address=$row["address"];
            $bill=$row["bill"];
            $msg.=$uname."\nName: ".$name."\nCity: ".$city."\nTravel Date&Time: ".$date."\nBooked Cartype: ".$cartype."\nBooked Car: ".$car."\nPickup Address: ".$address."\nYour Billing Amount: ".$bill;
            }
            }
            mail($email,"Booking Details",$msg,"From: saksham.tulsyan2015@vit.ac.in");
            header("Location:checkredirect.php");
        }
        else if($table=='outstation'){
            if($result1){
            if(mysqli_num_rows($result1)>0){
                while($row1=mysqli_fetch_assoc($result1)){
                    $email=$row1["email"];
                }
            }
        }
            
            
           if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $username=$row["username"];
            $name=$row["name"];
            $city=$row["city"];
            $destination=$row["destination"];
            $date=$row["date"];
            $cartype=$row["cartype"];
            $car=$row["car"];
            $address=$row["address"];
            $bill=$row["bill"];
            $msg.=$uname."\nName: ".$name."\nCity: ".$city."\nDestination: ".$destination."\nTravel Date&Time: ".$date."\nBooked Cartype: ".$cartype."\nBooked Car: ".$car."\nPickup Address: ".$address."\nYour Billing Amount: ".$bill;
            }
            }
            mail($email,"Booking Details",$msg,"From: saksham.tulsyan2015@vit.ac.in");
            header("Location:checkredirect.php");
        }
        else if($table=='rentcar'){
            if($result1){
            if(mysqli_num_rows($result1)>0){
                while($row1=mysqli_fetch_assoc($result1)){
                    $email=$row1["email"];
                }
            }
        }
            
            
           if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $username=$row["username"];
            $name=$row["name"];
            $address=$row["address"];
            $date=$row["date"];
            $days=$row["days"];
            $cartype=$row["cartype"];
            $car=$row["car"];
            $bill=$row["bill"];
            $msg.=$uname."\nName: ".$name."\nAddress: ".$address."\nTravel Date&Time: ".$date."\nNumber of Days of Booking: ".$days."\nBooked Cartype: ".$cartype."\nBooked Car: ".$car."\nYour Billing Amount: ".$bill;
            }
            }
            mail($email,"Booking Details",$msg,"From: saksham.tulsyan2015@vit.ac.in");
            header("Location:checkredirect.php");
        }
        
    }
    else if(isset($_GET['cancelbill'])){
        $sql="delete from $table order by id desc limit 1";
        if(mysqli_query($conn,$sql)){
         header("Location:afterlogin.php?uname=$uname");
        }

    }
mysqli_close($conn);  
?>
</body>
</html>