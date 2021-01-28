<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3.css">
<link href="css/css.css" rel="stylesheet">
<link rel="stylesheet" href="css/icon.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"src="javascript/jquery-3.4.1.min.js"></script>
		<script type="text/javascript"src="javascript/jquery-3.4.1.js"></script>
<style>

.mySlides {display:none;}


.topnav {
  overflow: hidden;
  background-color: #c2bdbd;
  height:200px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-left:30px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.karur{
	background-color:black;
	float:right;
	margin-right:3px;
	font-size:20px;
	width:15%;
	color:white;
	text-align:center;
}
.navbar .form-inline {
        display: inline-block;
    }
	.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
		color: #fff;
		background: #33cabb;
		padding-top: 8px;
		padding-bottom: 6px;
		vertical-align: middle;
		border: none;
	}	
	.navbar .dropdown-menu.form-wrapper {
		width: 280px;
		padding: 20px;
		left: auto;
		right: 0;
        font-size: 14px;
		
	}
	.pointer {cursor: pointer;}
	
	* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

	</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a><a href="index.php"><img src="images/logo.png"></a><br><br>
  <div class="karur"><span>District Court Karur</span></div>
  <div class="w3-content w3-section" style="max-width:99.8%;">
 
  <img class="mySlides w3-animate-fading" src="images/HC_1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/HC_1_0.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/HC_1_1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/HC_1_3.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="images/district_court_banner.jpg" style="width:100%">
 
</div>

  </a>
  
</div>

<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		
		
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" style="color:black"><b>Login</b></a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="new.php" method="post">
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="name" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="pass" required="required">
							</div>
							
							<input type="submit" class="btn btn-primary btn-block" value="Login" name="login" >
							<div class="form-footer">
								<a href="#">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" style="color:black"><b>SignUp</b></a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="new.php" method="post">
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="name" required="required">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="EmailId" name="email" required="required">
							</div>
							<div class="form-group">
								
								<select name="type" class="form-control" required>
								<option value="default">---SELECT---</option>
								<option value="admin">ADMIN</option>
								<option value="client">CLIENT</option>
								
								</select>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="pass1" id="pass1" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="ConfirmPassword" name="pass2"  id="pass2" required="required">
							</div>
							
							<input type="submit" class="btn btn-primary btn-block" value="Register"  name="register">
							
						</form>
					</li>
				</ul>
			</li>
			
		</ul>
	</div>
</nav>


<div class="w3-panel w3-round-large w3-teal" style="width:22%;float:left;" id="panelone">
    <p style="color:black;font-size:20px;"><b>About Us</b></p><hr style="border: 1px solid black;"><p><a style="color:#07f51b" href="pdf/2018042495.pdf"><b><span style='font-size:20px;color:black'>&#9897;</span> &nbsp&nbspHistory of Karur</b></a><br><a style="color:#07f51b" onclick="officer()" class="pointer"><b><span style='font-size:20px;color:black'>&#9897;</span> &nbsp&nbspPresent Judicial Officers
</b></a></p>
  </div>
  <div class="w3-panel w3-round-large w3-teal" style="width:26%;margin-left:5%;float:right;" id="paneltwo">
    <p style="color:black;font-size:20px;"><b>Latest Announcements</b></p><hr style="border: 1px solid black;"><p><a style="color:#07f51b"href="pdf/DC - Karur_0.pdf" ><b><span style='font-size:20px;color:black'>&#9897;</span> &nbsp&nbspDistrict Court Karur - Notice</b></a><hr style="border: 1px solid brown;"><p><a style="color:#07f51b" href="pdf/Vigilance and Anti-Corruption.pdf"><b><span style='font-size:20px;color:black'>&#9897;</span> &nbsp&nbspBribe giving and receiving is an offence
</b></a></p>
  </div><a href="index.php"><img src="images/back.jpg" id="back" style="height:60px;margin-left:30px;"></a><br>
  <div  id="gall">
 <div class="row"> 
  <div class="column">
    <img src="images/img1.jpg" style="width:100%">
    <img src="images/img2.jpg" style="width:100%">
    <img src="images/img3.jpg" style="width:100%">
    <img src="images/img4.jpg" style="width:100%">
    
   <img src="images/img10.jpg" style="width:100%">
  </div>
  <div class="column">
     <img src="images/img6.jpg" style="width:100%">
    <img src="images/img7.jpg" style="width:100%">
     <img src="images/img8.jpg" style="width:100%">
    <img src="images/img9.jpg" style="width:100%">
	 <img src="images/img15.jpg" style="width:100%">
    
  </div>  
  <div class="column">
     <img src="images/img11.jpg" style="width:100%">
    <img src="images/img12.jpg" style="width:100%">
     <img src="images/img13.jpg" style="width:100%">
    <img src="images/img14.jpg" style="width:100%">
	 
    <img src="images/img5.jpg" style="width:100%">
  </div>
  <div class="column">
     <img src="images/img16.jpg" style="width:100%">
    <img src="images/img17.jpg" style="width:100%">
     <img src="images/img18.jpg" style="width:100%">
    <img src="images/img19.jpg" style="width:100%">
	 <img src="images/img20.jpg" style="width:100%">
    
  </div>
</div>


  </div>
  <p style="margin-left:30%;" id="district"><strong><u>KARUR DISTRICT MAP</u></strong></p>
  <p style="margin-left:30%;" id="map"><img alt="" height="310" src="images/map2.jpg" width="447" /></p>
  <p style="margin-left:40%;" id="visit" ><strong><a href="https://linkingsky.com/government-exams/psu-jobs/karur-district-court-recruitment.html" style="color:#fc036b;font-size:25px;"><b>Please Visit This Link....</b></a></strong></p>
  <p style="margin-left:30%;font-size:15px;" id="present"><strong><b style="font-size:25px;">Present Judicial Officers</b></strong></p>
  <img src="images/officer.PNG" style="margin-left:30%;" id="table">
  

  <div style="margin-left:20%;" id="one">
<h1 style="margin-left:70px;"><b>Karur</b></h1>
<p style="margin-left:70px;text-align:justify">         One of the ancient cities in Tamil Nadu, Karur was ruled by the Cheras, Cholas, the Naickers, and the British successively. There is proof that Karur may have been the centre for old jewellery - making and gem setting (with the gold imported mainly from Rome), as seen from various excavations. According to the Hindu mythology, Brahma began the work of creation here, which is referred to as the "place of the sacred cow."</p>
<br><p style="margin-left:70px;"><strong><u>KARUR DISTRICT MAP</u></strong></p>
<p style="margin-left:10%;" ><img alt="" height="310" src="images/map2.jpg" width="447" /></p>

</div>
 
     <div class="w3-panel w3-round-large w3-teal" style="width:26%;margin-left:5%;float:right;" id="panelthree" >
    <p style="color:black;font-size:20px;"><b>Others</b></p><hr><p><b><span style='font-size:20px;color:black'>&#9897;</span> &nbsp&nbsp</b><a class="pointer" onclick="recruitments()"><img src="images/recruitments.png" ></a><hr><p><b><span style='font-size:20px;color:black'>&#9897;</span> &nbsp&nbsp</b><a class="pointer" onclick="gallery()"><img src="images/gallery.png" ></a></p>
  </div>
  <img src="images/officer2.PNG" style="margin-left:30%;" id="table1">
  <div style="margin-left:20%;" id="two" >
  <p style="margin-left:70px;text-align:justify">        Karur has a very long history and has been sung by various sangam poets. In history, it has been the battleground of various Tamil Kings like Chera, Chola, Pandya and Pallavas because of strategic location.</p>
<br>
<p style="margin-left:70px;text-align:justify"> The district has a very rich and varied cultural heritage. Karuvoor Thevar born in Karur is one among the nine devotees who sung the divine Music Thiruvichaippa, which is the ninth Thirumurai. He is the single largest composer among the nine authors of Thiruvichaippa. He lived during the reign of the great Raja Raja Chola-I. In addition to the famous Siva temple, there is a Vishnu temple at Thiruvithuvakkodu, a suburb of Karur, sung by famous Kulasekara Alwar [7-8th century AD] who was the ruler of Kongu nadu.</p>

       
  </div>
  
</body>
</html>
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 3000); 
}

$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
	var map=document.getElementById("map");
	map.style.display="none";
	var district=document.getElementById("district");
	district.style.display="none";
		var district=document.getElementById("visit");
	visit.style.display="none";
	var gall=document.getElementById("gall");
	gall.style.display="none";
	var back=document.getElementById("back");
	back.style.display="none";
	var present=document.getElementById("present");
	present.style.display="none";
	var table=document.getElementById("table");
	table.style.display="none";
	var table1=document.getElementById("table1");
	table1.style.display="none";
	function recruitments(){
		
		var one=document.getElementById("one");
		var two=document.getElementById("two");
		var map=document.getElementById("map");
		one.style.display="none";
		two.style.display="none";
		map.style.display="block";
		var district=document.getElementById("district");
		district.style.display="block";
		var district=document.getElementById("visit");
		visit.style.display="block";
		var gall=document.getElementById("gall");
		gall.style.display="none";
		var back=document.getElementById("back");
	back.style.display="none";
		
	}
	function gallery(){
		
		var one=document.getElementById("one");
		var two=document.getElementById("two");
		var map=document.getElementById("map");
		var panelone=document.getElementById("panelone");
		var paneltwo=document.getElementById("paneltwo");
		var panelthree=document.getElementById("panelthree");
		one.style.display="none";
		two.style.display="none";
		map.style.display="none";
		panelone.style.display="none";
		paneltwo.style.display="none";
		panelthree.style.display="none";
		var district=document.getElementById("district");
		district.style.display="none";
		var district=document.getElementById("visit");
		visit.style.display="none";
		var gall=document.getElementById("gall");
		gall.style.display="block";
		var back=document.getElementById("back");
	back.style.display="block";
		
	}
	
	function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

	
	
	function officer(){
		
		var one=document.getElementById("one");
		var two=document.getElementById("two");
		var map=document.getElementById("map");
		one.style.display="none";
		two.style.display="none";
		map.style.display="none";
		var district=document.getElementById("district");
		district.style.display="none";
		var district=document.getElementById("visit");
		visit.style.display="none";
		var gall=document.getElementById("gall");
		gall.style.display="none";
		var back=document.getElementById("back");
	back.style.display="none";
	var present=document.getElementById("present");
	present.style.display="block";
	var table=document.getElementById("table");
	table.style.display="block";	
	var table1=document.getElementById("table1");
	table1.style.display="block";
		
	}
</script>
