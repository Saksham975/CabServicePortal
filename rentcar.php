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

$name=$_POST["name"];
$address=$_POST["address"];
$date=$_POST["pickupdate"];
    $date1=substr($date,0,10);
$days=$_POST["days"];
$cartype=$_POST["cartype"];
$car=$_POST["car"];
$message="Booking Successfull";
$sqlcheck="Select * from rentcar where cartype='$cartype' and car='$car' and substring(date,1,10)='$date1'";
    $retval=mysqli_query($conn,$sqlcheck);


//$uploadok=0;
    
if(mysqli_num_rows($retval)==1){
    $uploadok=0;
}else{
    $uploadok=1; 
     $_SESSION['tablename']="rentcar";
    
        if($cartype=="Micro"){
            if($car=="Alto"){
                $amount=200+($days*1000);
            }
            else if($car=="EON"){
                $amount=180+($days*1000);
            }
            else{
                $amount=190+($days*1000);
            }
            
        }
        else if($cartype=="Micro A/c"){
            if($car=="Alto"){
                $amount=300+($days*1200);
            }
            else if($car=="EON"){
                $amount=280+($days*1200);
            }
            else{
                $amount=290+($days*1200);
            }
            
        }
        else if($cartype=="Mini"){
            if($car=="Baleno"){
                $amount=280+($days*1300);
            }
            else if($car=="Swift"){
                $amount=260+($days*1300);
            }
            else{
                $amount=250+($days*1300);
            }
            
        }
        else if($cartype=="Mini A/c"){
            if($car=="Baleno"){
                $amount=380+($days*1500);
            }
            else if($car=="Swift"){
                $amount=360+($days*1500);
            }
            else{
                $amount=350+($days*1500);
            }
            
        }
        else if($cartype=="Sedan"){
            if($car=="Honda City"){
                $amount=400+($days*1800);
            }
            else if($car=="Verna"){
                $amount=390+($days*1800);
            }
            else{
                $amount=380+($days*1800);
            }
            
        }
        else if($cartype=="Sedan A/c"){
            if($car=="Honda City"){
                $amount=500+($days*2000);
            }
            else if($car=="Verna"){
                $amount=490+($days*2000);
            }
            else{
                $amount=480+($days*2000);
            }
        }
      } 

 


if(!(file_exists("id/".$uname))){
    mkdir("id/".$uname,0777,true);
}
$target_dir = "id/".$uname."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 || $uploadok==0) {
    header("Location:afterlogin.php?uname=$uname & Message5=Booking Not Successful.Please Try Again.");
// if everything is ok, try to upload file
} else {
    $sql = "INSERT INTO rentcar values('$uname','$name','$address','$date','$days','$cartype','$car','$amount','$id')";  
    if(mysqli_query($conn, $sql)){  
    if(isset($_GET['rentcarbook'])){
        $xx=11;
    }
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if(isset($_POST['rentcarbook'])){
        header("Location:confirmbooking.php?bill=$amount");}
    } 
}
mysqli_close($conn); 
?>
</body>
</html>