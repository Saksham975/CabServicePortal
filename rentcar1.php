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

if ($result = mysqli_query($conn,"SHOW TABLES LIKE rentcar")) {
    if($result->num_rows == 1) {
        echo "Table exists";
    }
}
else {
    $sql2="create table rentcar(username varchar(20),name varchar(30),address varchar(40),date varchar(21),days varchar(2),cartype varchar(20))";
    if(mysqli_query($conn, $sql2)){  
 echo "Table airport created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}
}

$name=$_POST["name"];
$address=$_POST["address"];
$date=$_POST["pickupdate"];
$days=$_POST["days"];
$cartype=$_POST["cartype"];
$message="Booking Successfull";


$sql = "INSERT INTO rentcar values('$uname','$name','$address','$date','$days','$cartype')";  
if(mysqli_query($conn, $sql)){  
    if(isset($_POST['rentcarbook'])){
        header("Location:afterlogin.php?uname=$uname & Message4=".urlencode($message));
    }
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
mysqli_close($conn);  



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
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
</body>
</html>