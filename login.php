<!Doctype html>
<html>
<head>
<title>Log in</title>
<meta name="viewreport" content="user-scalable=no">
<meta name="viewreport" content="width=device-width,initial scale=0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="login.css" rel="stylesheet"></link>
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--For Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-keyboard="true" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
<a class="navbar-brand" href="#"></a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="index.html">Home</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Career <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Fresher</a></li>
<li><a href="#">Experienced</a></li>
<li><a href="#">Internships</a></li>
</ul>
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Mission</a></li>
<li><a href="#">Our Company</a></li>
<li><a href="#">Our Team</a></li>
<li><a href="#">Strengths</a></li>
</ul>
</li>
<form class="navbar-form navbar-left">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search">
<div class="input-group-btn">
<button class="btn btn-default" type="submit">
<i class="fa fa-search"></i>
</button>
</div>
</div>
</form>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
</div>
</div>
</nav>
<div class="containers">
<h2>Login Form</h2>
<form action="">
<div class="imgcontainer">
<img src="login.png" alt="login" class="login">
</div>
<div class="container">
<label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required>
<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
<button type="submit">Login</button>
<input type="checkbox" check="check"> Remember me>
</div>
<div class="container" style="background-color:none">
<button type="button" class="cancelbtn">Cancel</button>
<button type="submit">Forgot password <a href="#"></a></button>
</div>
</form>
</div>
<footer class="site-footer">
<div class="row">
<h1> About </h1>
<p>We Provide Full Security to Our Clients.Every People in our Team Working effiectively<br> and do work simulatneously.We Provide a Good Platform to Every Clients.</p>
</div>
<!--Footer-->
<div class="bottom-footer">
<div class="container">
<div class="col-md-5">
<h2>Our Team</h2>
<div id="photo">
<img src="yogesh photo.jpg">
<p><br> Yogesh kashyap(Web Designer)<br>Department of Computer Science and Informatics</p>
</div>
</div>
<br><br><br>
<h6>Submit Your Query</h6>
<br><br>
<div class="col-md-7">
<form action="/action_page.php">
<label for="fname">First Name</label>
<input type="text" id="fname" name="firstname" placeholder="Your name..">
<label for="lname">Last Name</label>
<input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br><br>
<label for="Mobile">Mobile</label>
<input type="tel" id="Mobile" name="Mobile" placeholder="Your Mobile..">
<br><br>
<label for="country">Country</label>
<select id="country" name="country">
<option value="India">Select</option>
<option value="India">India</option>
<option value="USA">Canada</option>
<option value="Germany">USA</option>
</select>
<label for="subject">Subject</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<input type="submit" value="Submit">
</form>
</div> 
<br><br><br><br>
<h7>Map</h7>
<br><br>
<!--Modal call in dialog box-->
<div class="modal fade" id="contact" role="dialog">
<div class="modal-dialog">
<button data-dismiss="modal" class="close"></button>
<div class="modal-content">
<div class="modal-header">
<h9> Contact</h9>
</div>
<div class="modal-body">
<p>For General Inquiry Please Email on <u>yogeshkashyap300@gmail.com</u></p>
<br><p> Contact No. +91-8988295621,+91-8351924363</p>
</div></div></div></div>
<!--Modal call in dialog box-->
<div class="map">
<!--Map Location-->
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(32.2825317,75.85091880000004),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(32.2825317,75.85091880000004)});infowindow = new google.maps.InfoWindow({content:'<strong>Map</strong><br>Kashyap Industries at Jassur,Near Pathankot,176051<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
</div>
<!--Map Location--><br><br>
<div clas="icons">
<h8>Important Links</h8><br><br>
<!--icons-->
<div class="row">
<ul class="social-network social-circle">
<li><a href="file:///C:/xampp/htdocs/mysite/index.php" class="envelope"><i class="fa fa fa-home"></i></a></li>
<li><a href="https://www.instagram.com/i_m_yogeshkashyap/" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
<li><a href="https://www.facebook.com/Honey.kashyap89" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://twitter.com/honeykashyap89" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://plus.google.com/u/0/110438015461563222761" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
<li><a href="https://www.linkedin.com/in/yogesh-kashyap-87b726134/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#contact" data-toggle="modal"><i class="fa fa-phone fa fa-contact"></i></a></li>
<li><a href="#contact" class="envelope" data-toggle="modal"><i class="fa fa fa-envelope"></i></a></li>
</ul>			
<!--icons-->
</div>
</div><br><br>
<div class="col-md-4">
<ul class="footer-nav">
<li> <a href="">Home</a></li>
<!--Contact reference in terms of Modal-->
<li> <a href="#contact" data-toggle="modal" data-keyboard="true">contact</a></li>
<li> <a href="">Links</a></li>
</ul>
</div>
<div class="copyright">
<p>&copy Copyright Web development 2017</p></div>
</div>
</div>
</footer>
<!--Footer-->
</body>
</html>
<?php
$con=mysql_connect("locelhost","root","") or die(mysql_error());
?>