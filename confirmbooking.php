<?php
session_start();
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
<link type="text/css" href="confirmbooking1.css" rel="stylesheet">   
    
    </head>
    
    <body>
    <header id="nav1">
<div class="container-fluid bg1">
    <h1 id="bookingamt"><br><span data-shadow-text="Text-Shadow">Total Booking<br> Amount</span><br></h1>
<i class="fa fa-inr" style="font-size:200px"></i><input type="submit" value="<?php echo $_GET['bill']; ?>" class="btn btn-warning" style="cursor:default" id="billamount" noaction>
    <form method="get" action="confirm.php">
    <input type="submit" value="Confirm" class="btn btn-success" style="cursor:default" name="confirmbill" id="confirmbill">
    <input type="submit" value="Cancel" class="btn btn-danger" style="cursor:default" name="cancelbill" id="cancelbill">
    </form>
        
</div>
    </header>
    </body>
</html>