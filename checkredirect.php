<?php 
session_start();
$uname=$_SESSION["xyz"];
header("Refresh: 5;url=afterlogin.php?uname=$uname");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.min.js">
<script src="https://use.fontawesome.com/0a1c78fd31.js"></script>
<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Jockey+One|Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

    <style>
        p{
            font-size: 30px;
            font-family: monospace;
        }
    </style>
</head>
    
    <body><center>
<span style="color:green;font-size:300px;">&#x2705;</span>
        <p>Your Booking is Confirmed. Booking Details have been sent to your registered email id.</p>
        <p>Redirecting in 5 seconds...</p>
            </center>
            </body>
        </html>