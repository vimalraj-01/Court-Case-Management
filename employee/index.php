<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="../css/w3.css">
<script type="text/javascript" src="javascript/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="javascript/jquery-3.4.1.js"></script>
  <title>Court Cae Management System|Employees</title>

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
  
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<style>
.pointer       { cursor: pointer; }
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


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

	
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 7px;
  
}


</style>
<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Employees</a>
      <!--logo end-->

      

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

         
          
          
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <?php 

require_once 'connect.php'; 
 $name=$_SESSION["username"];

$result = $conn->query("select * from employees where name='$name' and image!=''"); 
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
                            <b class="caret"></b>
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
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " style="background-color:#7a7a52">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
		  <?php
		  $res = $conn->query("select count(employee) as co from caseallocation where employee='$name' and  status='0'"); 
		  ?>
		  <li class="active">
            <a class="pointer" onclick="mycases()" >
                         <i class="fa fa-tasks" aria-hidden="true"></i>
                          <span>My Cases</span>&nbsp;&nbsp;<span class="badge" id="bad"><?php if($res->num_rows > 0){
							  
							  while($row = $res->fetch_assoc()){ 
		
		$count=$row['co'];
		 
		 echo $count;
							  }
			}
			else{
				echo '0';
			}
							  

							 ?></span>
                      </a>
          </li>
		  
          <li class="active">
            <a class="pointer" onclick="upd()">
                          <i class="fa fa-check-circle"></i>
                          <span>Update Cases</span>
                      </a>
          </li>
		  <li class="active">
            <a class="pointer" onclick="respondent()">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          <span>Edit Respondent</span>
                      </a>
          </li>
		  <li class="active">
            <a class="pointer" onclick="stupdate()">
                          <i class="fa fa-eye"></i>
                          <span>Status Update</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			  
              <li><i class="fa fa-laptop" id="click">Dashboard</i></li>
            </ol>
          </div>
		  <div id="courtimage" style="margin-left:20%;margin-top:5%;">
		  <img src="img/Karur-District-Court-photo.jpg" alt="courtimage">
		  </div>
        </div>

		<!-- Profile -->
		<div  id="profile"  style="background-color:white;padding: 10px;
  border: 1px solid #4CAF50;">
  
<br>
 <?php 

require_once 'connect.php'; 
 $name=$_SESSION["username"];

$result = $conn->query("select * from employees where name='$name' and image!=''"); 
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

require_once 'connect.php'; 
 $name=$_SESSION["username"];

$res = $conn->query("select * from employees where name='$name'"); 
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
 <form  class="form-container" action="db.php" method="post">
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
	


</div><br><br>
<form action="" method="post" enctype="multipart/form-data" id="imageupdate"  style="margin-left:7%;">
    <input type="file" name="image" /><br>
    <input type="submit" name="imageupdate" value="ImageUpdate" >
</form>
</div>
<!-- Profile End-->
       
<!-- Cases -->
<div  id="mycases">
<div  class="w3-card-4">
 <div class="w3-container w3-teal">
    <h2>My Cases</h2>
  </div>

<table style="width:100%;" id="mca">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Advocate Name</th>
      <th scope="col">Client Name</th>
      <th scope="col">Case Type</th>
       <th scope="col">Status</th>
       
    </tr>
  </thead>
  <tbody>
  <?php 

require_once 'connect.php'; 


$res = $conn->query("select * from caseallocation where employee='$name'"); 
$clname = $conn->query("select * from caseallocation where employee='$name'"); 
$sno=0;
?>
<?php if($res->num_rows > 0){ 
    
         while($row = $res->fetch_assoc()){ 
		$admin=$row["admin"];
		$emp=$row["employee"];
		$client=$row["client"];
		$ct=$row["casetype"];
		$sta=$row["status"];
		?> 
		
		
		<tr>
      <th scope="row"><?php echo ++$sno; ?></th>
      <td><?php echo $admin; ?></td>
      <td><?php echo $client; ?></td>
      <td><?php echo $ct; ?></td>
		 <td><?php 
		 
		 if($sta==0)
		 {
			 echo "<a class='pointer' style='color:blue' onclick='viewed(\"".$emp."\",\"".$client."\",\"".$ct."\")'>Viewed</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='pointer' style='color:blue' onclick='proces(\"".$emp."\",\"".$client."\",\"".$ct."\")'><b>Processed</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='pointer' style='color:blue' onclick='done(\"".$emp."\",\"".$client."\",\"".$ct."\")'><b>Done</b></a>"; 
		 }
		 else if($sta==1){
			 
			echo "<a class='pointer' style='color:#006400' ><b>Viewed</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='pointer' style='color:blue' onclick='proces(\"".$emp."\",\"".$client."\",\"".$ct."\")'><b>Processed</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='pointer' style='color:blue' onclick='done(\"".$emp."\",\"".$client."\",\"".$ct."\")'><b>Done</b></a>"; 
		 }
		 else if($sta==2)
		 {
			echo "<a class='pointer' style='color:#006400' ><b>Viewed</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='pointer' style='color:#006400' ><b>Processed</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class='pointer' style='color:blue' onclick='done(\"".$emp."\",\"".$client."\",\"".$ct."\")'><b>Done</b></a>"; 
			 
		 }
		 else if($sta==3)
		 {
			 echo "<a class='pointer' style='color:#006400' ><b>Done</b></a>"; 
		 }
		 
		 
		 
		 ?></td>
	  </tr>
		<?php
		 }
}
else
{		?>
<tr>
<td colspan="5" style="color:blue;font-size:20px;">Cases Not Available</td>
</tr>
<?php

}
		?>
		
		</tbody>
</table>
</div>
</div>
<!-- Cases End -->	   
<!-- Case Update -->
<div id="upda"  >
<div  class="w3-card-4">
 <div class="w3-container w3-teal">
  <h2>Case Updates</h2>
  
 </div><br><div  style="margin-left:5%;float:left;" id="sele">
 <span style="color:black;font-size:20px;">SELECT THIS FIELD</span><br><br><br>

 <select name="type" id="typename" class="btn btn-primary dropdown-toggle" style="background-color:white;color:black;" onchange="myFunction()" required>
<option>---select---</option>
<?php if($clname->num_rows > 0){ 
    
         while($row = $clname->fetch_assoc()){ 
		
		$cliname=$row["client"];
		
		?> 
		<option><?php echo $cliname;?></option>
		<?php 
		 }
}
		?>
 </select><br><br><br><br>
 <select name="type" id="typecase" class="btn btn-primary dropdown-toggle" style="background-color:white;color:black;" required>
<option>---select---</option>
<option id="catype"></option>
 </select>
 </div><span style="color:black;font-size:20px;margin-right:30%;float:right;" id="det"></span><div style="margin-right:17%;float:right;" id="cadetails">
 
 <form id="detailsupdate" >
 <br>
 <table >
 <tr>
 <td>Filing Number</td>
 <td><input type="text" id="filno" style="width:100%;" required></td>
 </tr>
 <tr>
 <td>Filing Date</td>
 <td><input type="date" id="fildate" style="width:100%;"  required></td>
 </tr>
 <tr>
 <td>Registration Number</td>
 <td><input type="text" id="regno" style="width:100%;" required></td>
 </tr>
 <tr>
 <td>Registration Date</td>
 <td><input type="date" id="regdate" style="width:100%;"  required></td>
 </tr>
 <tr>
 <td>CNR Number</td>
 <td><input type="text" id="cnrno" style="width:100%;" required></td>
 </tr>
  </table><br><input type="hidden" id="em" value="<?php echo $name; ?>"> <input type="submit" value="update" class='btn btn-primary' style="margin-left:25%;" onclick="updatedetails()">
 </form></div>
 <!--Respondent and Advocate -->
 <div style="margin-right:26%;float:right;" id="respond">
 <form id="detailsupdate" >
 <br>
 <table >
 <tr>
 <td>Respondent Name</td>
 <td><input type="text" id="respname" style="width:100%;" required></td>
 </tr>
 
 <tr>
 <td>Advocate Name</td>
 <td><input type="text" id="advname" style="width:100%;" required></td>
 </tr>
 <tr>
 <td>First Hearing Date</td>
 <td><input type="date" id="fhd" style="width:100%;" required></td>
 </tr>
 
  </table><br><input type="hidden" id="empl" value="<?php echo $name; ?>"> <input type="submit" value="update" class='btn btn-primary' style="margin-left:25%;" onclick="updaterespond()">
 </form>
 </div> 
  <!-- Respondent and Advocate End -->
  <!-- Status Update -->
  
  <div style="margin-right:20%;float:right;" id="statusupdate">
 <form id="supdate" >
 <br>
 <table >
 <tr>
 <td>Business On Date</td>
 <td><input type="date" id="bdate" style="width:100%;" required></td>
 </tr>
 
 <tr>
 <td>Hearing Date</td>
 <td><input type="date" id="hdate" style="width:100%;" required></td>
 </tr>
 
 <tr>
 <td>Purpose Of Hearing</td>
 <td><input type="text" id="hpurpose" style="width:100%;" required></td>
 </tr>
  </table><br><input type="hidden" id="emplo" value="<?php echo $name; ?>"> <input type="submit" value="update" class='btn btn-primary' style="margin-left:25%;" onclick="updatehist()">
 </form>
 </div> 
  
  
  
  <!-- Status Update End  -->
 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </div>
</div>
<!-- Case Update End -->

  
       
          

      </section>
      
    </section>
    <!--main content end-->
	
	
  </section>
 
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    
	
	<?php
if(isset($_POST['imageupdate']))
{
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','mini') or die('Unable To connect');
	
    $sql = "update employees set image= ? where name='$name'" ;

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
    
</body>

</html>
<script>


var h=document.getElementById("profile");
h.style.display="none";
var ca=document.getElementById("mycases");
ca.style.display="none";
var upda=document.getElementById("upda");
upda.style.display="none";
var upda=document.getElementById("respond");
upda.style.display="none";
var upda=document.getElementById("cadetails");
upda.style.display="none";
var statusupdate=document.getElementById("statusupdate");
statusupdate.style.display="none";
var courtimage=document.getElementById("courtimage");
courtimage.style.display="block";
function profile()
{
	

		var h=document.getElementById("profile");
h.style.display="block";
var cases=document.getElementById("mycases");
cases.style.display="none";
var upda=document.getElementById("upda");
upda.style.display="none";
var upda=document.getElementById("respond");
upda.style.display="none";
var upda=document.getElementById("cadetails");
upda.style.display="none";
var statusupdate=document.getElementById("statusupdate");
statusupdate.style.display="none";
var click=document.getElementById("click");
click.innerHTML="MyProfile";
var courtimage=document.getElementById("courtimage");
courtimage.style.display="none";
	
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
			url:"db.php",
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
		
	function mycases()
	{
		var h=document.getElementById("profile");
h.style.display="none";
var upda=document.getElementById("upda");
upda.style.display="none";
var upda=document.getElementById("cadetails");
upda.style.display="none";
var upda=document.getElementById("respond");
upda.style.display="none";
var statusupdate=document.getElementById("statusupdate");
statusupdate.style.display="none";
var cases=document.getElementById("mycases");
cases.style.display="block";
		var click=document.getElementById("click");
click.innerHTML="My Cases";
var courtimage=document.getElementById("courtimage");
courtimage.style.display="none";
		
	}
	function viewed(em,cl,cty)
	{
		
		var em=em;
		var cl=cl;
		var cty=cty;
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":5,
				"emp":em,
				"cl":cl,
				"cty":cty,

			},
			success:function(d)
			{
				alert(d);
				$("#bad").load(" #bad");
				
			}
		});
		
	}

	
	function upd()
	{
		var h=document.getElementById("profile");
h.style.display="none";
var cases=document.getElementById("mycases");
cases.style.display="none";
var upda=document.getElementById("respond");
upda.style.display="none";
		var upda=document.getElementById("upda");
upda.style.display="block";
var upda=document.getElementById("cadetails");
upda.style.display="block";
var statusupdate=document.getElementById("statusupdate");
statusupdate.style.display="none";
		var click=document.getElementById("click");
click.innerHTML="Case Update";
var det=document.getElementById("det");
det.innerHTML="CASE DETAILS";
var courtimage=document.getElementById("courtimage");
courtimage.style.display="none";
		
	}
	function myFunction() {
  var x = document.getElementById("typename").value;
 $.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":6,
				"clname":x,

			},
			success:function(d)
			{
				var tc=document.getElementById("catype");
				tc.innerHTML=d;
				
				
				
			}
		});
}

function updatedetails()
{
	var tname=document.getElementById("typename").value;
	var tcase=document.getElementById("typecase").value;
	var filno=document.getElementById("filno").value;
	var fildate=document.getElementById("fildate").value;
	var regno=document.getElementById("regno").value;
	var regdate=document.getElementById("regdate").value;
	var cnrno=document.getElementById("cnrno").value;
	var em=document.getElementById("em").value;
	$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":7,
				"tname":tname,
				"tcase":tcase,
				"filno":filno,
				"fildate":fildate,
				"regno":regno,
				"regdate":regdate,
				"cnrno":cnrno,
				"em":em,

			},
			success:function(d)
			{
				
				alert(d);
				
			}
		});
	
}

function respondent()
{
	var h=document.getElementById("profile");
h.style.display="none";
var cases=document.getElementById("mycases");
cases.style.display="none";
		var upda=document.getElementById("upda");
upda.style.display="block";
var upda=document.getElementById("cadetails");
upda.style.display="none";
var statusupdate=document.getElementById("statusupdate");
statusupdate.style.display="none";
var upda=document.getElementById("respond");
upda.style.display="block";
		var click=document.getElementById("click");
click.innerHTML="Update Respondent And Advocate";
var detail=document.getElementById("det");
	detail.style.display="block";
	var detail=document.getElementById("det");
	detail.innerHTML="RESPONDENT AND ADVOCATE";
	var courtimage=document.getElementById("courtimage");
courtimage.style.display="none";
	
	}
	
		
	function updaterespond()
	{

var tname=document.getElementById("typename").value;
	var tcase=document.getElementById("typecase").value;
	var respname=document.getElementById("respname").value;
	var advname=document.getElementById("advname").value;
	var empl=document.getElementById("empl").value;
	var fhd=document.getElementById("fhd").value;
	$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":8,
				"tname":tname,
				"tcase":tcase,
				"respname":respname,
				"advname":advname,
				"empl":empl,
				"fhd":fhd,
			},
			success:function(d)
			{
				
				alert(d);
				
			}
		});


	}	
	
	function stupdate()
	{
		
		var h=document.getElementById("profile");
h.style.display="none";
var cases=document.getElementById("mycases");
cases.style.display="none";
		var upda=document.getElementById("upda");
upda.style.display="block";
var upda=document.getElementById("cadetails");
upda.style.display="none";
var statusupdate=document.getElementById("statusupdate");
statusupdate.style.display="block";
var upda=document.getElementById("respond");
upda.style.display="none";
		var click=document.getElementById("click");
click.innerHTML="Status Update";
var detail=document.getElementById("det");
	detail.style.display="block";
	var detail=document.getElementById("det");
	detail.innerHTML="DAILY UPDATES";
	var courtimage=document.getElementById("courtimage");
courtimage.style.display="none";
		
		
	}
	
	
	function updatehist()
	{
		
		var tname=document.getElementById("typename").value;
	var tcase=document.getElementById("typecase").value;
	var bdate=document.getElementById("bdate").value;
	var hdate=document.getElementById("hdate").value;
	var hpurpose=document.getElementById("hpurpose").value;
	var emplo=document.getElementById("emplo").value;
		
$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":4,
				"tname":tname,
				"tcase":tcase,
				"bdate":bdate,
				"hdate":hdate,
				"hpurpose":hpurpose,
				"emplo":emplo,

			},
			success:function(d)
			{
				
				alert(d);
				
			}
		});
		
		
		
		
	}
	
	function proces(em,cl,cty)
	{
		
		var em=em;
		var cl=cl;
		var cty=cty;
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":9,
				"emp":em,
				"cl":cl,
				"cty":cty,

			},
			success:function(d)
			{
				alert(d);
				$("#bad").load(" #bad");
				$("#mca").load(" #mca");
			}
		});
		
	}
	
	function done(em,cl,cty)
	{
		
		var em=em;
		var cl=cl;
		var cty=cty;
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":10,
				"emp":em,
				"cl":cl,
				"cty":cty,

			},
			success:function(d)
			{
				alert(d);
				$("#bad").load(" #bad");
				$("#mca").load(" #mca");
				
			}
		});
		
	}

	</script>