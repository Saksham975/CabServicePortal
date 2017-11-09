<?php
if(isset($_GET['emailerror'])){
    $emailerror="Please fill valid email id";
}
else{
    $emailerror="";
}

if(isset($_GET['nameerror'])){
    $nameerror="No special characters or digits allowed";
}
else{
    $nameerror="";
}


if(isset($_GET['phoneerror'])){
    $phoneerror="Please enter correct phone number";
}
else{
    $phoneerror="";
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
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link type="text/css" href="cabmain.css" rel="stylesheet">   
    
    <script src="jquery-3.1.0.min.js">
    </script>
    
    <script>
    $(document).ready(function() {
	$('a[rel="relativeanchor"]').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 1000);
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
    
</head>

<body>
        
<div class="nav navbar-fixed-top"  >

<a class="one" href="#nav1" rel="relativeanchor"><i class="fa fa-home" aria-hidden="true"></i>  Home  </a>
<a class="one" href="#location" rel="relativeanchor"><i class="fa fa-map-marker" aria-hidden="true"></i>  Location  </a>
<a class="one" href="#cartype" rel="relativeanchor"><i class="fa fa-taxi" aria-hidden="true"></i>  Car Type  </a>
<a class="one" href="#outstation" rel="relativeanchor"><i class="fa fa-location-arrow" aria-hidden="true"></i>  Outstation  </a>
<a class="one" href="#contact" rel="relativeanchor"><i class="fa fa-comment" aria-hidden="true"></i>  Feedback  </a>

<form action="login2.php" method="get">
<input type="text" placeholder="Username" name="username" id="username111">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Login" name="login" class="btn btn-success btn-sm">
</form>
        
</div>

    <div id="signupform">
    
    <section id="sign">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 id="signupheading">Signup</h2></br>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-2">
                <form id="signupForm" action="login1.php" method="get" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="nameforsign" name="nameforsign" required>
                                
                                <b><span style="color:red;"><?php echo "*".$nameerror; ?></span></b>
                            </div>
                        </div>
                    <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="usernameforsign" name="usernameforsign" required/>
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="emailforsign" name="emailforsign" required>
                                
                                <b><span style="color:red;"><?php echo "*".$emailerror; ?></span></b>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phoneforsign" name="phoneforsign" required>
                                
                                <b><span style="color:red;"><?php echo "*".$phoneerror; ?></span></b>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-weight:800;margin-left:0px;">Password</label>
                                <input type="password" class="form-control" placeholder="Password" style="margin-left:-1px;" id="passwordforsign" name="passwordforsign" required>
                                
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" id="signupsubmit">Join us!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    </div>
    

<header id="nav1">
<div class="container-fluid bg1">
<h2 id="ride">RIDE</h2>
<h6 style="font-size:30px">A car for every need</h6>
<a class="ghost-button" onclick="document.getElementById('username111').focus()">BOOK NOW</a>

</div>
    </header>
    
    <section class="primary" id="location">
        <div class="container">
            <div class="row">
                </br>
                <div class="col-lg-12 text-center">
                    <h2 class="about">Location</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <p id="first">User can choose the location he wants to visit according to his desired dates. He can also choose the various tourist attractions and historical places, he wishes to visit.
</p>
                    </br></br>
                </div>
            </div>
        </div>
    </section>

    <section class="primary" id="cartype">
        <div class="container">
            <div class="row">
                </br>
                <div class="col-lg-12 text-center">
                    <h2 class="about">Car-Type</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <p id="first">User can choose the outstation or local cab as per their requirement. He can also choose the different types of cabs available (A/C OR Non-A/C). Type of car includes: prime, micro, mini, etc. 
</p>
                    </br></br>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="primary" id="outstation">
        <div class="container">
            <div class="row">
                </br>
                <div class="col-lg-12 text-center">
                    <h2 class="about">Outstation</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <p id="first">User can choose the outstation or local cab as per their requirement. He can also choose the different types of cabs available (A/C OR Non-A/C). Type of car includes: prime, micro, mini, etc. </p>
                    </br></br>
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
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required>
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


<?php

if(isset($_GET['Message'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message'] . '")</script>';
}

if(isset($_GET['Message1'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message1'] . '")</script>';
}

if(isset($_GET['Message2'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message2'] . '")</script>';
}

if(isset($_GET['Message3'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message3'] . '")</script>';
}

if(isset($_GET['Message4'])){
   echo '<script type="text/javascript">alert("' . $_GET['Message4'] . '")</script>';
}

?>
