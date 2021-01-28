
<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="javascript/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="javascript/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
<title>Court Cae Management System|Client</title>
		 <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
 <!-- Custom styles -->
   <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
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



	.pointer {cursor: pointer;}
	
	#img{
        border:1px solid #333;
        height: 230px;
        width: 190px;
        margin-top: 2%;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        box-shadow: 1px 1px 3px #888;
    }
	
	.bs-example{
    	margin: 20px;
    }
	
   

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] ,.form-container input[type=email]{
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}   
	
	
	
	.accordion {
  background-color: #292828;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 80%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin-left:10%;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  width:80%;
  margin-left:10%;
}
	
	</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a><a href="index.php"><img src="../images/logo.png"></a><br><br>
  <div class="karur" style="background-color:#c2bdbd"><span ></span></div>
  
 
  <img class="mySlides w3-animate-fading" src="../images/HC_1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../images/HC_1_0.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../images/HC_1_1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../images/HC_1_3.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../images/district_court_banner.jpg" style="width:100%">
 </a>
 </div>

  
  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a href="index.php" style="color:yellow;font-size:20px;float:left;margin-top:10px;"><i class="fa fa-home"></i> Home</a>
		   <a class="pointer" onclick="advocate()" style="color:yellow;font-size:20px;float:left;margin-top:10px;margin-left:30px;" "><i class="fa fa-user-o"></i> Advocates</a>
		    <a class="pointer" onclick="cstat()" style="color:yellow;font-size:20px;float:left;margin-top:10px;margin-left:30px;" "> <i class="fa fa-eye"></i> Case Status</a>
		   
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
	<ul class="nav pull-right top-menu">      
          
          
          
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <?php 

require_once 'db.php'; 
 $name=$_SESSION["username"];

$result = $conn->query("select * from register where name='$name' and image!=''"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <span class="profile-ava">
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  height="30" width="40"/> 
        <?php } ?> 
    
<?php }else{ ?> 
<span class="profile-ava">
    <img src="../images/default.jpg" height="30" width="40" alt="default">
	</span>
<?php } ?>      
          
                            <span class="username"><?php

echo $_SESSION["username"];
?></span>
                            
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a onclick="profile()" class="pointer"><i class="icon_profile"></i> My Profile</a>
              </li>
             
              <li>
                <a onclick="logout()" class="pointer"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
             
            </ul>
          </li>
		  
          <!-- user login dropdown end -->
        </ul>
  </div>  
</nav>
<!-- Advacates List -->
<div id="image">


	

	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'mini');

	


	$query = " SELECT * FROM `register` where type='admin' ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12">
			
			<form>
				<div class="card">
					<h6 class="card-title bg-info text-white p-3 text-uppercase"> <span>Name:&nbsp;</span><?php echo
					 $product['name'];  ?>   </h6>

					<div class="card-body">
					<a href="viewemployee.php?code=<?php echo $product['code']; ?>" >
						 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" alt="phone" width="260px" height="150px">
					</a>
					 <h6> <b>Email:</b><b>&nbsp; <?php echo $product['email'];  ?></b><br><br><b>Phone Number:&nbsp;</b><b> <?php echo $product['phone'];  ?> </b> </h6> 

					 

					

					</div>
					


				</div>
			</form>

		</div>


	<?php		
		}
	}
	else{
		
		
	}
	?>

</div>
<!-- Advacates List End-->
<!-- CNR NO START -->

<div class="w3-container"id="cnrnosearch">
  

 <div class="card w3-yellow" style="margin-top:2%;margin-left:25%;width:50%;height:40%;"> 
    <div class="card-body" style="margin-top:5%;"><center><span style="font-size:20px;color:blue;"><b>Search By CNR Number</b></span></center><br>
	<form  method="post" action="" style="margin-left:28%;">
	
	<input class="w3-input w3-border w3-round-xxlarge"  type="text" name="cnrinput"  placeholder="Enter CNR Number" style="width:70%;" required><br>
	<input class="w3-button w3-black w3-round-xxlarge" type="submit"  value="search" style="margin-left:24%;width:25%;"   name="cnrsea" onclick="cnge()">
	</form>
	</div>
  </div>
  
</div><br><br>

<!-- CNR NO END -->
<!-- CNR Result Start-->
<div id="cnroutput">
<?php
if (isset($_POST["cnrsea"]))
{
	$cnrinput=$_POST["cnrinput"];
	
	$stat = $conn->query("select * from casedetails  where cnrno='$cnrinput'"); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){
		$client=$row["client"];
		$ctype=$row["ctype"];
		$filno=$row["filno"];
		$fildate=$row["fildate"];
		$regno=$row["regno"];
		$regdate=$row["regdate"];
		$cnrno=$row["cnrno"];
		$respondent=$row["respondent"];
		$advocate=$row["advocate"];
		$firsthearingdate=$row["firsthearingdate"];
		
		
		echo "<table border='1' style='width:50%;margin-left:25%;'>
  <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;Client</b></th><th>".$client."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;Case Type</b></th><th>".$ctype."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;FilNo</b></th><th>".$filno."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;FilDate</b></th><th>".$fildate."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;RegNo</b></th><th>".$regno."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;RegDate</b></th><th>".$regdate."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;CnrNo</b></th><th>".$cnrno."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;Respondent</b></th> <th>".$respondent."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;Advocate</b></th><th>".$advocate."</th></tr>
  <tr><th style='color:black;height:40px;'><b>&nbsp;&nbsp;FirstHearingDate</b></th><th>".$firsthearingdate."</th></tr>
  
     
  
  </table>";
 
	}
}
else
	echo "<h1 style='margin-left:40%;'><b>Record Not Found</b></h1>";
}

?><br><br><br><br>
</div>
<!-- CNR  Result End -->
<!--Case Status   -->
<div id="st">

<?php
include('db.php');
  $sql = "SELECT * FROM caseallocation where client='$name'";
$result = $conn->query($sql);
$sno=0;
if ($result->num_rows > 0) {
    echo "<table id='customers' style='width:80%;margin-left:10%;' border='1'><tr><th style='color:black'><b>S.No</b></th><th style='color:black'><b>Advacate</b></th><th style='color:black'><b>Employee</b></th><th style='color:black'><b>Client</b></th><th style='color:black'><b>Case Type</b></th><th style='color:black'><b>Status</b></th><th style='color:black'><b>View</b></th></tr>";
    
    while($row = $result->fetch_assoc()) {
		$stat=$row["status"];
		$ad=$row["admin"];
		$em=$row["employee"];
		$cl=$row["client"];
		$ct=$row["casetype"];
        echo "<tr><td style='color:black'>".++$sno."</td><td style='color:black'>".$ad."</td><td style='color:black'> ".$em."</td><td style='color:black'> ".$cl."</td><td style='color:black'> ".$ct."</td>";
    if($stat==0)
	{
	echo "<td><a style='color:blue'><b>Wait</b></a></td>";	
	}
	else if($stat==1)
	{
		
	echo "<td><a style='color:blue'><b>Viewed</b></a></td>";		
	}
	else if($stat==2)
	{
		echo "<td><a style='color:blue'><b>Processed</b></a></td>";	
	}
	else if($stat==3)
	{
		echo "<td><a style='color:green'><b>Done</b></a></td>";	
	}
	
	echo "<td><a style='color:blue' class='pointer' onclick='vm(\"".$em."\",\"".$cl."\",\"".$ct."\")'><b><u>View More</u></b></a></td></tr>";
	}
    echo "</table>";
} else {
   echo "<h2 style='color:blue;margin-left:30%'>Not Allocated Cases</h2>";
}
?>
<br>
</div>

<div id="s">

<button class="accordion" >Case Details</button>

<div class="panel" id="cd">
  
</div>



<button class="accordion">Petitioner and Advocate</button>
<div class="panel" id="pa">
  
</div>
<button class="accordion" >Respondent and Advacate</button>
<div class="panel" id="ra">
  
</div>
<button class="accordion">History of Case Hearing</button>
<div class="panel" id="hc">
  
</div>

</div>




<!--Case Status End   -->

<!-- Profile -->
<div  id="profile"  style="background-color:white;padding: 20px;margin:5%;
  border: 1px solid #4CAF50;">
  <h1 style="color:black;font-size:19px;margin-left:40%;"><b> Profile</b> </h1>
<br>
 <?php 

require_once 'db.php'; 
 $name=$_SESSION["username"];

$result = $conn->query("select * from register where name='$name' and image!=''"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <span style='margin-left:5%;'>
        <?php while($row = $result->fetch_assoc()){ 
		
		$n=$row['name'];
		$e=$row['email'];
		$p=$row['pass'];
		$ph=$row['phone'];
		?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  height="30" width="40" alt="Profile Image" id="img"/> 
        <?php } ?> 
    </span>
<?php }else{ ?> 
<span style='margin-left:5%;'>
    <img src="../images/default.jpg" height="30" width="40" alt="default" id="img">
	</span>
<?php } ?>   

  
<div class="bs-example" style="float:right;width:48%;margin-right:25%;margin-top:1%;" >

<?php 

require_once 'db.php'; 
 $name=$_SESSION["username"];

$res = $conn->query("select * from register where name='$name'"); 
?><?php if($res->num_rows > 0){ ?> 
    <span style='margin-left:5%;'>
        <?php while($row = $res->fetch_assoc()){ 
		
		$n=$row['name'];
		$e=$row['email'];
		$p=$row['pass'];
		$ph=$row['phone'];
		?> 
    <table class="table table-striped" >
        
        <tbody>
            <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $n?></b></span></td>                
            </tr>
            <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $e?></b></span></td>                
            </tr>
             <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $p?></b></span></td>                
            </tr>
			 <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;Phone Number:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php  if($ph==''){ echo '<span style="color:black;font-size:25px;">-</span>'; }else echo $ph;?></b></span></td>                
            </tr>
            <tr>               
                <td style="color:black;font-size:17px;"><b>&nbsp;Edit Information:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="editinfo()" style="color:blue;" class="pointer">Edit</a></td>
            </tr>
			
        </tbody>
    </table>
	<div class="form-popup" id="myForm">
  <form  class="form-container" action="new.php" method="post">
    <h1>Update</h1>

    <label for="name"><b>Name</b></label>
    <input type="text"  name="name" value="<?php echo $n ?>" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email"  name="email" value="<?php echo $e ?>" id="email" required>
 
	<label for="psw"><b>Password</b></label>
    <input type="text"  name="password" value="<?php echo $p ?>" id="pass" required>
	
	<label for="number"><b>Phone Number</b></label>
    <input type="text"  name="phone" value="<?php echo $ph ?>" id="phone" required>
	<input type="hidden" name="status" value="1">
		<input type="hidden" name="user" value="<?php echo $name ?>">
    <button type="submit" class="btn" name="update" >Update</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
	 <?php } ?> 
	<?php }else{ ?> 
	<?php } ?>
	


</div>
<form action="" method="post" enctype="multipart/form-data" id="imageupdate"  style="margin-left:7%;">
    <input type="file" name="image" /><br>
    <input type="submit" name="imageupdate" value="ImageUpdate" >
</form>
</div>





<?php
if(isset($_POST['imageupdate']))
{
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','mini') or die('Unable To connect');
	
    $sql = "update register set image= ? where name='$name'" ;

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        echo "<script>alert('Image Successfullly UPloaded');window.location.href='index.php'</script>";
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
}
?>


<!-- Profile End-->

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
	
	var image=document.getElementById("image");
image.style.display="none";
var h=document.getElementById("profile");
h.style.display="none";

var st=document.getElementById("st");
st.style.display="none";

var s=document.getElementById("s");
s.style.display="none";

var cnrnosearch=document.getElementById("cnrnosearch");
cnrnosearch.style.display="block";


	function advocate(){
		
		
		var image=document.getElementById("image");
image.style.display="block";

var st=document.getElementById("st");
st.style.display="none";
		var s=document.getElementById("s");
s.style.display="none";
		var h=document.getElementById("profile");
h.style.display="none";
var cnrnosearch=document.getElementById("cnrnosearch");
cnrnosearch.style.display="none";

		}
		
		function profile()
{
	var image=document.getElementById("image");
image.style.display="none";

var st=document.getElementById("st");
st.style.display="none";
var s=document.getElementById("s");
s.style.display="none";
		var h=document.getElementById("profile");
h.style.display="block";
var cnrnosearch=document.getElementById("cnrnosearch");
cnrnosearch.style.display="none";

	
}
function editinfo()
{
	
  document.getElementById("myForm").style.display = "block";

}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
	function logout()
	{
		
		$.ajax({
			url:"new.php",
			type:"POST",
			data:{
				"status":2,
				

			},
			success:function(d)
			{
				alert(d);
				window.location.href='../index.php';
				
			}
		});
		
	}
	
	function cstat()
	{
		
		var image=document.getElementById("image");
image.style.display="none";

var st=document.getElementById("st");
st.style.display="block";	
var s=document.getElementById("s");
s.style.display="none";	
		var h=document.getElementById("profile");
h.style.display="none";
var cnrnosearch=document.getElementById("cnrnosearch");
cnrnosearch.style.display="none";

		
	}
	
	function vm(em,cl,ct)
	{
		var emp=em;
		var cli=cl;
		var cty=ct;
	
		var image=document.getElementById("image");
image.style.display="none";

var st=document.getElementById("st");
st.style.display="none";	

		var h=document.getElementById("profile");
h.style.display="none";
		var s=document.getElementById("s");
s.style.display="block";
var cnrnosearch=document.getElementById("cnrnosearch");
cnrnosearch.style.display="none";

$.ajax({
			url:"new.php",
			type:"POST",
			data:{
				"status":3,
				"emp":emp,
				"cli":cli,
				"cty":cty,

			},
			success:function(d)
			{
				 $("#cd").html(d);
				
			}
		});
		$.ajax({
			url:"new.php",
			type:"POST",
			data:{
				"status":4,
				"emp":emp,
				"cli":cli,
				"cty":cty,

			},
			success:function(d)
			{
				 $("#pa").html(d);
				
			}
		});
		$.ajax({
			url:"new.php",
			type:"POST",
			data:{
				"status":5,
				"emp":emp,
				"cli":cli,
				"cty":cty,

			},
			success:function(d)
			{
				 $("#ra").html(d);
				
			}
		});

		$.ajax({
			url:"new.php",
			type:"POST",
			data:{
				"status":6,
				"emp":emp,
				"cli":cli,
				"cty":cty,

			},
			success:function(d)
			{
				 $("#hc").html(d);
				
			}
		});
	}
	
	
	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

function cnge()
{
	
	var image=document.getElementById("image");
image.style.display="none";

var st=document.getElementById("st");
st.style.display="none";	

		var h=document.getElementById("profile");
h.style.display="none";
		var s=document.getElementById("s");
s.style.display="none";
var cnrnosearch=document.getElementById("cnrnosearch");
cnrnosearch.style.display="block";
var cnroutput=document.getElementById("cnroutput");
cnroutput.style.display="block";
}
	
</script>