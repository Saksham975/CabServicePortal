<?php
session_start();
if(!isset($_SESSION["xyz"])){
       // echo '<script type="text/javascript">alert("Session Expired. Login Again!!!")</script>';
    //echo '<script type="text/javascript">alert("You have already logged out. Please login again.")</script>';
    $message="Session Expired. Login Again!!!";
        header("Location:cabmain.php?Message4=".urlencode($message));
    }
    
    if(isset($_GET['Message'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message'] . '")</script>';
}
    if(isset($_GET['Message4'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message4'] . '")</script>';
}

if(isset($_GET['Message5'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message5'] . '")</script>';
}


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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link type="text/css" href="afterlogin1.css" rel="stylesheet">   
    
    
    <script src="jquery-3.1.0.min.js">
    </script>
    
    <script>
    $(document).ready(function() {
	$('a[rel="relativeanchor"]').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	}); 
});
    
    </script>
  
    <script>
    $(document).ready(function(){

    function updateCount ()
    {
        var qText = jQuery("#message").val();

       if(qText.length < 128) {
           jQuery("#noOfChar").html(128 - qText.length);
       } else {
           jQuery("#noOfChar").html(0);
           jQuery("#message").val(qText.substring(0,128));
       }
    }

    $("#message").keyup(function () {
        updateCount();
    });
    $("#message").keypress(function () {
        updateCount();
    });
    $("#message").keydown(function () {
        updateCount();
    });
});
    
    </script>
    
    <script>
        $(function(){
    $("#cartypelist").change(function(){
        var x=$("#cartypelist").val();
        if(x=="Micro"||x=="Micro A/c"){
            $("#carlist").html("");
             $("#carlist").append("<option>Alto</option>");
            $("#carlist").append("<option>EON</option>");
            $("#carlist").append("<option>WagonR</option>");
        }
        else if(x=="Mini"||x=="Mini A/c"){
             $("#carlist").html("");
            $("#carlist").append("<option>Baleno</option>");
            $("#carlist").append("<option>Swift</option>");
            $("#carlist").append("<option>Indigo</option>");
        }
        else {
             $("#carlist").html("");
            $("#carlist").append("<option>Honda City</option>");
            $("#carlist").append("<option>Verna</option>");
            $("#carlist").append("<option>Ciaz</option>");
        }
    });
        });
    </script>
    
        <script>
        $(function(){
    $("#cartypelist1").change(function(){
        var x=$("#cartypelist1").val();
        if(x=="Micro"||x=="Micro A/c"){
            $("#carlist1").html("");
             $("#carlist1").append("<option>Alto</option>");
            $("#carlist1").append("<option>EON</option>");
            $("#carlist1").append("<option>WagonR</option>");
        }
        else if(x=="Mini"||x=="Mini A/c"){
             $("#carlist1").html("");
            $("#carlist1").append("<option>Baleno</option>");
            $("#carlist1").append("<option>Swift</option>");
            $("#carlist1").append("<option>Indigo</option>");
        }
        else {
             $("#carlist1").html("");
            $("#carlist1").append("<option>Honda City</option>");
            $("#carlist1").append("<option>Verna</option>");
            $("#carlist1").append("<option>Ciaz</option>");
        }
    });
        });
    </script>
    
        <script>
        $(function(){
    $("#cartypelist2").change(function(){
        var x=$("#cartypelist2").val();
        if(x=="Micro"||x=="Micro A/c"){
            $("#carlist2").html("");
             $("#carlist2").append("<option>Alto</option>");
            $("#carlist2").append("<option>EON</option>");
            $("#carlist2").append("<option>WagonR</option>");
        }
        else if(x=="Mini"||x=="Mini A/c"){
             $("#carlist2").html("");
            $("#carlist2").append("<option>Baleno</option>");
            $("#carlist2").append("<option>Swift</option>");
            $("#carlist2").append("<option>Indigo</option>");
        }
        else {
             $("#carlist2").html("");
            $("#carlist2").append("<option>Honda City</option>");
            $("#carlist2").append("<option>Verna</option>");
            $("#carlist2").append("<option>Ciaz</option>");
        }
    });
        });
    </script>
    
        <script>
        $(function(){
    $("#cartypelist3").change(function(){
        var x=$("#cartypelist3").val();
        if(x=="Micro"||x=="Micro A/c"){
            $("#carlist3").html("");
             $("#carlist3").append("<option>Alto</option>");
            $("#carlist3").append("<option>EON</option>");
            $("#carlist3").append("<option>WagonR</option>");
        }
        else if(x=="Mini"||x=="Mini A/c"){
             $("#carlist3").html("");
            $("#carlist3").append("<option>Baleno</option>");
            $("#carlist3").append("<option>Swift</option>");
            $("#carlist3").append("<option>Indigo</option>");
        }
        else {
             $("#carlist3").html("");
            $("#carlist3").append("<option>Honda City</option>");
            $("#carlist3").append("<option>Verna</option>");
            $("#carlist3").append("<option>Ciaz</option>");
        }
    });
        });
    </script>
    
    
</head>

<body>
        
<div class="nav navbar-fixed-top">

<a class="one" href="#nav1" rel="relativeanchor"><i class="fa fa-home" aria-hidden="true"></i>  Home  </a>
<a class="one" href="#location" rel="relativeanchor"><i class="fa fa-plane" aria-hidden="true"></i>  Airport  </a>
<a class="one" href="#location" rel="relativeanchor"><i class="fa fa-train" aria-hidden="true"></i>  Railway Station   </a>
<a class="one" href="#location" rel="relativeanchor"><i class="fa fa-taxi" aria-hidden="true"></i>  Outstation  </a>
    <a class="one" href="#location" rel="relativeanchor"><i class="fa fa-location-arrow" aria-hidden="true"></i>  Rental Car  </a>
<a class="one" href="#contact" rel="relativeanchor"><i class="fa fa-comment" aria-hidden="true"></i>  Feedback  </a>
    
<section id="userlogo">
    <button type="button" class="btn btn-link" style="color:white;font-weight:600" id="bookings" name="bookings" onClick="document.location.href='bookings.php'">Bookings</button>
    <button type="button" class="btn btn-link" style="color:white;font-weight:600;border:none" onClick="document.location.href='profile.php'">Profile</button>
    <button type="button" class="btn btn-link" style="color:white;font-weight:600;border:none" onClick="document.location.href='logout.php'">Logout</button>    
    <input type="submit" value="<?php echo $_GET['uname']; ?>" id="displayuser" class="btn btn-sm" style="cursor:default" noaction>
</section>

</div>


<header id="nav1">    
<div class="container-fluid bg1">
<div id="headdiv">  
<h2 id="ride">RIDE</h2>
<h6 style="font-size:30px">A car for every need</h6>
<a class="ghost-button" href="#location" rel="relativeanchor">BOOK NOW</a>
</div>
</div>
</header>
  
    
    
<div id="id01" class="modal">
  <form class="modal-content animate" action="airport.php" method="get">
      <center><h2>Airport Drop</h2></center>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
    <div class="container">
      <label><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" id="email123" name="name" required>
<br><br>
        <label>Select your City:</label>&nbsp;&nbsp;
        <select id="citylist" style="width:20%;" name="city">
  <option value="Chennai" selected>Chennai</option>
  <option value="Delhi">Delhi</option>
  <option value="Bengaluru">Bengaluru</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Calcutta">Calcutta</option>
  <option value="Hyderabad">Hyderabad</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <label>Pickup Date:</label>
      <input type="datetime-local" min="2017-11-06T00:00:00" max="2017-11-10T00:00:00" name="pickupdate" required>
  
     
&nbsp;
      <label>Type of Car:</label>&nbsp;&nbsp;
        <select id="cartypelist" style="width:15%;" name="cartype">
  <option value="Micro" selected>Micro</option>
  <option value="Micro A/c">Micro A/c</option>
  <option value="Mini">Mini</option>
  <option value="Mini A/c">Mini A/c</option>
  <option value="Sedan">Sedan</option>
  <option value="Sedan A/c">Sedan A/c</option>
        </select>
        <label>Car:</label>&nbsp;&nbsp;
        <select id="carlist" style="width:15%;" name="car">
            <option value="Alto" selected>Alto</option>
            <option value="EON">EON</option>
            <option value="WagonR">WagonR</option>
        </select>
        <br><br>    
       <label><b>Pickup Address:</b></label>
      <input type="text" placeholder="Enter Address" id="psw123" name="address" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="airportbook">Book Now</button>
      </div>
    </div>
  </form>
</div>
    
    <div id="id02" class="modal">
  <form class="modal-content animate" action="outstation.php" method="get">
       <center><h2>Outstation</h2></center>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
    <div class="container">
      <label><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" id="email123" name="name" required>
<br><br>
        <label>Select your City:</label>&nbsp;&nbsp;
        <select id="citylist" style="width:20%;" name="city">
  <option value="Chennai" selected>Chennai</option>

  <option value="Bengaluru">Bengaluru</option>
  <option value="Mumbai">Mumbai</option>
  
  <option value="Hyderabad">Hyderabad</option>
        </select>
        &nbsp;&nbsp;
      <label>Select your Destination:</label>&nbsp;&nbsp;
        <select id="citylist" style="width:20%;" name="destination">
  <option value="Chennai">Chennai</option>
  
  <option value="Bengaluru" selected>Bengaluru</option>
  <option value="Mumbai">Mumbai</option>
  
  <option value="Hyderabad">Hyderabad</option>
        </select>
            <br><br>
        
        <label>Journey Date:</label>
      &nbsp;&nbsp;<input type="datetime-local" min="2017-11-06T00:00:00" max="2017-11-10T00:00:00" name="pickupdate" required>
    
        &nbsp;&nbsp;
        <label>Type of Car:</label>&nbsp;&nbsp;
        <select id="cartypelist1" style="width:15%;" name="cartype">
  <option value="Micro" selected>Micro</option>
  <option value="Micro A/c">Micro A/c</option>
  <option value="Mini">Mini</option>
  <option value="Mini A/c">Mini A/c</option>
  <option value="Sedan">Sedan</option>
  <option value="Sedan A/c">Sedan A/c</option>
        </select>
        <label>Car:</label>&nbsp;&nbsp;
        <select id="carlist1" style="width:15%;" name="car">
            <option value="Alto" selected>Alto</option>
            <option value="EON">EON</option>
            <option value="WagonR">WagonR</option>
        </select>
        <br><br>    
      <label><b>Pickup Address:</b></label>
      <input type="text" placeholder="Source Address" id="psw123" name="address" required>

      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="outstationbook">Book Now</button>
      </div>
    </div>
  </form>
</div>
    
    <div id="id03" class="modal">
  <form class="modal-content animate" action="station.php" method="get">
       <center><h2>Station Drop</h2></center>
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
    <div class="container">
       <label><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" id="email123" name="name" required>
<br><br>
        <label>Select your City:</label>&nbsp;&nbsp;
        <select id="citylist" style="width:20%;" name="city">
  <option value="Chennai" selected>Chennai</option>
  <option value="Delhi">Delhi</option>
  <option value="Bengaluru">Bengaluru</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Calcutta">Calcutta</option>
  <option value="Hyderabad">Hyderabad</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <label>Pickup Date:</label>
      <input type="datetime-local" min="2017-11-06T00:00:00" max="2017-11-10T00:00:00" name="pickupdate" required>
  
     
&nbsp;
      <label>Type of Car:</label>&nbsp;&nbsp;
        <select id="cartypelist2" style="width:15%;" name="cartype">
  <option value="Micro" selected>Micro</option>
  <option value="Micro A/c">Micro A/c</option>
  <option value="Mini">Mini</option>
  <option value="Mini A/c">Mini A/c</option>
  <option value="Sedan">Sedan</option>
  <option value="Sedan A/c">Sedan A/c</option>
        </select>
        <label>Car:</label>&nbsp;&nbsp;
        <select id="carlist2" style="width:15%;" name="car">
            <option value="Alto" selected>Alto</option>
            <option value="EON">EON</option>
            <option value="WagonR">WagonR</option>
        </select>
        <br><br>    
       <label><b>Pickup Address:</b></label>
      <input type="text" placeholder="Enter Address" id="psw123" name="address" required>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="stationbook">Book Now</button>
      </div>
    </div>
  </form>
</div>
    
    <div id="id04" class="modal">
  <form class="modal-content animate" action="rentcar.php" method="post" enctype="multipart/form-data">
       <center><h2>Rent Car</h2></center>
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
    <div class="container">
      <label><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" id="email123" name="name" required>
<br><br>
        <label><b>Your Address:</b></label>
      <input type="text" placeholder="Enter Address" id="psw123" name="address" required>
      <br><br>
        <label>Journey Start Date:</label>
     <input type="datetime-local" min="2017-11-06T00:00:00" max="2017-11-10T00:00:00" name="pickupdate" required>
        &nbsp;&nbsp;
        
        <label>Number of Days:</label>
      <input type="number" min=1 max=5 name="days" required>
        
&nbsp;
<label>Type of Car:</label>&nbsp;&nbsp;
        <select id="cartypelist3" style="width:15%;" name="cartype">
  <option value="Micro" selected>Micro</option>
  <option value="Micro A/c">Micro A/c</option>
  <option value="Mini">Mini</option>
  <option value="Mini A/c">Mini A/c</option>
  <option value="Sedan">Sedan</option>
  <option value="Sedan A/c">Sedan A/c</option>
        </select>
        <label>Car:</label>&nbsp;&nbsp;
        <select id="carlist3" style="width:15%;" name="car">
            <option value="Alto" selected>Alto</option>
            <option value="EON">EON</option>
            <option value="WagonR">WagonR</option>
        </select>
        <br><br>    
       *Please Upload your Vaid ID: <input type="file" name="fileToUpload" id="fileToUpload" required><br>
        <p id="redspan"> <i>*You will be required to submit the following id for security purposes.</i></p>  
        
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="rentcarbook">Book Now</button>
      </div>
    </div>
  </form>
</div>
    
    
    <section class="primary" id="location">
        <div class="container">
            <div class="column">
                <div class="col-lg-6">
                   <center> <i class="material-icons" id="airplane" onclick="document.getElementById('id01').style.display='block';">airplanemode_active</i> </center>
                    <p style="font-size:20px">Airport</p>
                </div>
            </div>
            <div class="column">
                <div class="col-lg-6">
                <center> <i class="fa fa-cab" id="outstatioin" onclick="document.getElementById('id02').style.display='block';"></i></center>
                    <p style="font-size:20px">Outstation</p>
                </div>
            </div>
        </div>
    </section>
    
     <section class="primary" id="location">
        <div class="container">
            <div class="column">
                <div class="col-lg-6">
                   <center> <i class="material-icons" id="railway" onclick="document.getElementById('id03').style.display='block';">directions_railway</i> </center>
                    <p style="font-size:20px">Railway Station</p>
                </div>
            </div>
            <div class="column">
                <div class="col-lg-6">
                <center> <i class="material-icons" id="rental" onclick="document.getElementById('id04').style.display='block';">airport_shuttle</i></center>
                    <p style="font-size:20px">Rental Car</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Feedback</h2>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <form id="contactForm" action="feedback.php" method="get" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>    
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required></textarea><span id="noOfChar">128</span> characters remaining
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section id="logos">
        <i class="fa fa-twitter-square" style="color:white;font-size:24px"></i>&nbsp;&nbsp;&nbsp;    
    <i class="fa fa-facebook-square" style="color:white;font-size:23px"></i>&nbsp;&nbsp;&nbsp; 
    <i class="fa fa-instagram" style="color:white;font-size:23px"></i>&nbsp;&nbsp;&nbsp; 
    <i class="fa fa-google-plus" style="color:white;font-size:23px"></i>&nbsp;&nbsp;&nbsp; 
        </section>
</footer>


    
</body>
</html>