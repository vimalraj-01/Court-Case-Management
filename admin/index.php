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
<script type="text/javascript" src="../javascript/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="../javascript/jquery-3.4.1.js"></script>

<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Court Cae Management System|Admin</title>

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
 <link rel="stylesheet" href="../css/w3.css">
  
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
  margin: 5px 0 10px 0;
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
  width: 40%;
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
	
	 .products-table
{
    
  width: 100%;
  height: 100%;
  overflow: scroll;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 2px;
  
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
      <a href="index.php" class="logo">Admin</a>
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
      <div id="sidebar" class="nav-collapse " style="background-color:#669999">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
		  <li class="active">
            <a class="" onclick="newemployee()">
                          <i class="fa fa-users"></i>
                          <span class="pointer">AddEmployees</span>
                      </a>
          </li>
		  <li class="active">
            <a class="" onclick="viewemployee()">
                         <i class="fa fa-eye" aria-hidden="true"></i>
                          <span class="pointer">ViewEmployees</span>
                      </a>
          </li>
		  
		  <li class="active">
            <a class="" onclick="upd()">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          <span class="pointer">Updates</span>
                      </a>
          </li>
		  
		  <?php 

require_once 'connect.php'; 

$qry = $conn->query("select * from register where name='$name'");
if($qry->num_rows > 0){
							  
							  while($row = $qry->fetch_assoc()){ 
							  
							  $adv=$row["code"];
 
$res = $conn->query("select count(send) as co from request where received='$adv' and  status='0'"); 
?>
          <li class="active">
            <a class="" onclick="notification()">
                         <i class="fa fa-bell" aria-hidden="true"></i> 
                          <span class="pointer"> Notification</span>&nbsp;&nbsp;<span class="badge"><?php if($res->num_rows > 0){
							  
							  while($row = $res->fetch_assoc()){ 
		
		$count=$row['co'];
		 
		 echo $count;
							  }
			}
			else{
				echo '0';
			}
							  }
}
							 ?></span>
						 
                      </a>
          </li>
		  <li class="active">
            <a class="" onclick="allocation()">
                          <i class="fa fa-tasks" aria-hidden="true"></i>
                          <span class="pointer">Case Allocated</span>
                      </a>
          </li>
		 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
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
        </div>

		
		<?php 

require_once 'connect.php'; 
 $name=$_SESSION["username"];
 
 

$re = $conn->query("select  *  from dailyupdates where code IN (select code from register where name='$name')"); 
$qy=$conn->query("select count(code) as employee from employees where code IN (select code from register where name='$name')  "); 
$sql = "SELECT * FROM register where name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
		$ad=$row["code"];		
	
?>

<input type="hidden" id="advoca" value="<?php echo $ad; ?>">
<?php
}
	
	
}

?>
<?php if($qy->num_rows > 0){ ?> 
   
        <?php while($row = $qy->fetch_assoc()){ 
		
		$em=$row['employee'];
		
		
		
		?> 


		
		
		
		
        <div class="row" id="home">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-users"></i>
              <div class="count"><?php echo $em ?></div>
              <div class="title">EMPLOYEES</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
		  
		  <?php
		
		
		}
		
}else{
	$em=0;
		
		?>
		
		<div class="row" id="home">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-users"></i>
              <div class="count"><?php echo $em ?></div>
              <div class="title">EMPLOYEES</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
		  
		  <?php
}
		  ?>
		  

		  <?php if($re->num_rows > 0){ ?> 
   
        <?php while($row = $re->fetch_assoc()){ 
		
		$tc=$row['totalcase'];
		$cd=$row['casedone'];
		$cb=$row['casebending'];
		
		
		?> 
		  
		  
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php echo $tc ?></div>
              <div class="title">CASES</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><?php echo $cd ?></div>
              <div class="title">DONE</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php echo $cb ?></div>
              <div class="title">BENDING</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->
		
		
		<?php
		
		
		}
		
}else{
	echo "Error: " . $re . "<br>" . $conn->error;
}
		
		?>
		
		
		
<!--  ADD EMPLOYEES-->
<div class="w3-card-4" id="add">
  <div class="w3-container w3-teal">
    <h2>Add Employees</h2>
  </div>

  <form class="w3-container" action="db.php" method="post">
    <p>      
    <label class="w3-text-teal" ><b>Name</b></label>
    <input class="w3-input w3-border w3-sand" name="name" type="text" required></p>
    <p>      
    <label class="w3-text-teal"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="pass" type="text" required></p>
	<p>      
    <label class="w3-text-teal"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="email" required></p>
    <p>
    <button class="w3-btn w3-teal" name="add">ADD</button></p>
  </form>
</div>
  <!--  ADD EMPLOYEES End-->
  
  
   <!--  VIEW EMPLOYEES -->
  <div class="w3-card-4" id="view">
  <div class="w3-container w3-teal">
    <h2>View Employees</h2>
  </div>
  <br>

<?php
include('connect.php');
  $sql = "SELECT * FROM employees where admin='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='customers' style='width:80%;margin-left:10%'><tr><th>Name</th><th>Password</th><th>Email</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["pass"]."</td><td> ".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
   echo "<h2 style='color:blue;margin-left:30%'>Not Added Employees</h2>";
}
?>

<br>
</div>

 <!--  VIEW EMPLOYEES END -->
 
 
 
 
  <!-- PROFILE -->
<div  id="profile"  style="background-color:white;padding: 10px;
  border: 1px solid #4CAF50;">
  
<br>
 <?php 

require_once 'connect.php'; 
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

require_once 'connect.php'; 
 $name=$_SESSION["username"];

$res = $conn->query("select * from register where name='$name'"); 

?><?php if($res->num_rows > 0){ ?> 
    <span style='margin-left:5%;'>
        <?php while($row = $res->fetch_assoc()){ 
		
		$n=$row['name'];
		$e=$row['email'];
		$p=$row['pass'];
		$ph=$row['phone'];
		$cod=$row['code'];
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
			<?php
			$fee=$conn->query("select * from dailyupdates where code='$cod'");
			 if($fee->num_rows > 0){
				while($ff = $fee->fetch_assoc()){ 
				$fees=$ff['fees'];
			
			?>
			 <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fees:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php  if($fees==''){ echo '<span style="color:black;font-size:25px;">-</span>'; }else echo $fees;?></b></span></td>                
            </tr>
			
			<?php
				}
			 }
			?>
            <tr>               
                <td style="color:black;font-size:17px;"><b>&nbsp;Edit Information:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="editinfo()" style="color:blue;" class="pointer">Edit</a></td>
            </tr>
			
        </tbody>
    </table>
	<div class="form-popup" id="myForm">
  <form id="upinfo" class="form-container">
    <h1>Update</h1>

    <label for="name"><b>Name</b></label>
    <input type="text"  name="name" value="<?php echo $n ?>" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email"  name="email" value="<?php echo $e ?>" id="email" required>
 
	<label for="psw"><b>Password</b></label>
    <input type="text"  name="password" value="<?php echo $p ?>" id="pass" required>
	
	<label for="number"><b>Phone Number</b></label>
    <input type="text"  name="phone" value="<?php echo $ph ?>" id="phone" required>
	<label for="number"><b>Fees</b></label>
    <input type="text"  name="fees" value="<?php echo $fees ?>" id="fees" required>
	<input type="hidden" name="status" value="1">
		<input type="hidden" name="user" value="<?php echo $name ?>">
    <button type="submit" class="btn" onclick="update()" style="float:left;">Update</button>
    <button type="button" class="btn cancel" onclick="closeForm()" style="float:right;">Close</button>
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


<!-- PROFILE END -->


<!-- UPDATES -->
   <div class="w3-card-4" id="up">
  <div class="w3-container w3-teal">
    <h2>Update</h2>
  </div>

  <form class="w3-container" action="db.php" method="post">
    <p>      
    <label class="w3-text-teal" ><b>Total Cases Obtained</b></label>
    <input class="w3-input w3-border w3-sand" name="totalcases" type="number" required></p>
    <p>      
    <label class="w3-text-teal"><b>Cases Done </b></label>
    <input class="w3-input w3-border w3-sand" name="casesdone" type="number" required></p>
	<p>      
    <label class="w3-text-teal"><b>Cases Bending</b></label>
    <input class="w3-input w3-border w3-sand" name="casesbending" type="number" required></p>
    <p>
    <button class="w3-btn w3-teal" name="dailyupdate">Daily Updates</button></p>
  </form>
</div>
          
<!-- UPDATES END -->


<!-- Notification -->

<div id="casenotification" class="products-table">
<div class="w3-card-4">
  <div class="w3-container w3-teal">
    <h2>Case Notification</h2>
  </div>
  
<table>
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Advocate Name</th>
      <th scope="col">Client Name</th>
      <th scope="col">Place</th>
	  <th scope="col">Court</th>
      <th scope="col">Case Type</th>
      <th scope="col">Advocate Action</th>
	  <th scope="col">Case Allocation</th>
	  
    </tr>
  </thead>
  <tbody>
  <?php 

require_once 'connect.php'; 
 
$sno=0;
$stat = $conn->query("select * from register  where name='$name' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){ 
	$ad=$row['code'];
	 $adv = $conn->query("select * from request where received='$ad' "); 
	if($adv->num_rows > 0){
	while($r = $adv->fetch_assoc()){ 
	   $p=$r['place'];
		$court=$r['court'];
		$case=$r['casetype'];
		$status=$r['status'];
		$send=$r['send'];
	$st = $conn->query("select * from register where code='$send'"); 
	if($st->num_rows > 0){
	while($ro = $st->fetch_assoc()){ 
		$cl=$ro['name'];
	  
?>

    <tr>
      <th scope="row"><?php echo ++$sno; ?></th>
      <td><?php echo $name; ?></td>
      <td><?php echo $cl; ?></td>
      <td><?php echo $p; ?></td>
	  <td><?php echo $court; ?></td>
      <td><?php echo $case; ?></td>
      <td><?php 

			if($status=='0')
			{
			echo "<input type='submit' value='Bending' class='btn btn-primary' style='background-color:blue;' onclick='bending(\"".$cl."\")'>&nbsp;&nbsp;";
			echo "<input type='submit' value='Accepted' class='btn btn-primary' style='background-color:green;' onclick='accepted(\"".$cl."\")'>&nbsp;&nbsp;";
			echo "<input type='submit' value='Rejected' class='btn btn-primary' style='background-color:red;' onclick='rejected(\"".$cl."\")'>&nbsp;&nbsp;";
			}
			else if($status=='1')
			{
				
			echo "<span style='color:blue;'>Bending</span>&nbsp;&nbsp;";
			echo "<input type='submit' value='Accepted' class='btn btn-primary' style='background-color:green;' onclick='accepted(\"".$cl."\")'>&nbsp;&nbsp;";
			echo "<input type='submit' value='Rejected' class='btn btn-primary' style='background-color:red;' onclick='rejected(\"".$cl."\")'>&nbsp;&nbsp;";	
				
			}
			else if($status=='2'){
				
				echo "<input type='submit' value='Accepted' class='btn btn-primary' style='background-color:green;cursor: text;'>&nbsp;&nbsp;";
				
			}
			else if($status=='3'){
				
				echo "<input type='submit' value='Rejected' class='btn btn-primary' style='background-color:red;cursor: text;'>&nbsp;&nbsp;";
				
			}
			


	  ?></td>
	  <td><?php 
	 
	  $em = $conn->query("select * from employees where code='$ad'"); 
	if($em->num_rows > 0){
	while($ro = $em->fetch_assoc()){ 
	$na=$ro["name"];
	  echo "<form id='alloc'><select class='btn btn-primary' style='font-size:20px;' id='sel'><option>---select---</option><option>".$na."</option></select>
	 
	  
	   <input type='submit' class='btn btn-primary' value='Go' onclick='allo(\"".$cl."\",\"".$case."\",\"".$name."\")' ></form>";
	 
	}
	}
	  
	  ?>
	  
	  </td>
    </tr>
	
    <?php
	}
	}
	else{
		
		echo '<tr><td style="color:green"><b>Request Not Available</b></td></tr>';
	}
	}
	
	}
	else{
		echo '<tr><td style="color:green"><b>Request Not Available</b></td></tr>';
		
	}
	}
}
	else{
		echo '<tr><td style="color:green"><b>Request Not Available</b></td></tr>';
		
	}
	?>
  </tbody>
</table>
  

</div>
</div>
<!--Notification End-->
<!--Case Allocation-->
<div id="allocate" class="w3-card-4">
<div class="w3-container w3-teal">
    <h2>Case Allocation</h2>
  </div><br>
<?php
include('connect.php');
  $sql = "SELECT * FROM caseallocation where admin='$name'";
$result = $conn->query($sql);
$sno=0;
if ($result->num_rows > 0) {
    echo "<table id='customers' style='width:80%;margin-left:10%'><tr><th>S.No</th><th>Advacate</th><th>Employee</th><th>Client</th><th>Case Type</th><th>Status</th></tr>";
    
    while($row = $result->fetch_assoc()) {
		$stat=$row["status"];
        echo "<tr><td>".++$sno."</td><td>".$row["admin"]."</td><td> ".$row["employee"]."</td><td> ".$row["client"]."</td><td> ".$row["casetype"]."</td>";
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
	
	echo "</tr>";
	}
    echo "</table>";
} else {
   echo "<h2 style='color:blue;margin-left:30%'>Not Allocated Cases</h2>";
}
?>
<br>
</div>


<!--Case Allocation End-->
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
    
</body>

</html>
<script>

var e=document.getElementById("add");
e.style.display="none";
var c=document.getElementById("view");
c.style.display="none";
	var h=document.getElementById("profile");
h.style.display="none";
var u=document.getElementById("up");
u.style.display="none";
var noti=document.getElementById("casenotification");
noti.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="none";
function newemployee(){

var e=document.getElementById("home");
e.style.display="none";
var c=document.getElementById("view");
c.style.display="none";
var e=document.getElementById("add");
e.style.display="block";
var h=document.getElementById("profile");
h.style.display="none";
var u=document.getElementById("up");
u.style.display="none";
var noti=document.getElementById("casenotification");
noti.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="none";
var click=document.getElementById("click");
click.innerHTML="AddEmployees";
}
function viewemployee(){
var c=document.getElementById("view");
c.style.display="block";
var e=document.getElementById("add");
e.style.display="none";
var e=document.getElementById("home");
e.style.display="none";
var h=document.getElementById("profile");
h.style.display="none";
var u=document.getElementById("up");
u.style.display="none";
var noti=document.getElementById("casenotification");
noti.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="none";
var click=document.getElementById("click");
click.innerHTML="ViewEmployees";

}
function profile()
{
	var e=document.getElementById("home");
e.style.display="none";
var c=document.getElementById("view");
c.style.display="none";
var e=document.getElementById("add");
e.style.display="none";
var u=document.getElementById("up");
u.style.display="none";
var noti=document.getElementById("casenotification");
noti.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="none";
var h=document.getElementById("profile");
h.style.display="block";
var click=document.getElementById("click");
click.innerHTML="MyProfile";
	
}
function editinfo()
{
	
  document.getElementById("myForm").style.display = "block";

}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
	
	function update()
	{
		var name=document.getElementById("name").value;
		var email=document.getElementById("email").value;
		var pass=document.getElementById("pass").value;
		var phone=document.getElementById("phone").value;
		var fees=document.getElementById("fees").value;
		if((name != '')&&(email != '')&&(pass != '')&&(phone != '') &&(fees != ''))
		{
			$.ajax({
			url:"db.php",
			type:"POST",
			data:$("#upinfo").serialize(),
			success:function(d)
			{
				alert(d);
				
				window.location.href='index.php';
				
				
			}
		});
			
		}
		else
			alert("One or More Field Is Empty ");
		
		
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
	
	function upd(){
		
		
		var e=document.getElementById("home");
e.style.display="none";
var c=document.getElementById("view");
c.style.display="none";
var e=document.getElementById("add");
e.style.display="none";
var h=document.getElementById("profile");
h.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="none";
var u=document.getElementById("up");
u.style.display="block";
var noti=document.getElementById("casenotification");
noti.style.display="none";
var click=document.getElementById("click");
click.innerHTML="Update";
		
		
		
	}
	
	function notification()
	{
		
		var e=document.getElementById("home");
e.style.display="none";
var c=document.getElementById("view");
c.style.display="none";
var e=document.getElementById("add");
e.style.display="none";
var h=document.getElementById("profile");
h.style.display="none";
var u=document.getElementById("up");
u.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="none";
var noti=document.getElementById("casenotification");
noti.style.display="block";
var click=document.getElementById("click");
click.innerHTML="Notification";
		
		
	}
	
	
	function bending(name)
	{
		var name=name;
		var advoca=document.getElementById("advoca").value;
		
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":8,
				"name":name,
				"advoca":advoca,
			},
			success:function(d)
			{
				alert(d);
				
				window.location.href='index.php';
			}
		});
		
		
	}
	
	function accepted(name)
	{
		var name=name;
		var advoca=document.getElementById("advoca").value;
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":9,
				"name":name,
				"advoca":advoca,
			},
			success:function(d)
			{
				alert(d);
				
				window.location.href='index.php';
			}
		});
		
	}
	
	function rejected(name)
	{
		var name=name;
		var advoca=document.getElementById("advoca").value;
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":10,
				"name":name,
				"advoca":advoca,
			},
			success:function(d)
			{
				alert(d);
				window.location.href='index.php';
			}
		});
		
		
	}
	
	function allocation()
	{
		
		var e=document.getElementById("home");
e.style.display="none";
var c=document.getElementById("view");
c.style.display="none";
var e=document.getElementById("add");
e.style.display="none";
var h=document.getElementById("profile");
h.style.display="none";
var u=document.getElementById("up");
u.style.display="none";
var noti=document.getElementById("casenotification");
noti.style.display="none";
var allocate=document.getElementById("allocate");
allocate.style.display="block";
var click=document.getElementById("click");
click.innerHTML="Case Allocation";
		
	}
	
	function allo(name,type,adv)
	{
		var sel=document.getElementById("sel");
		
		if(sel.value == '---select---')
		{
			
			alert("Employee Is Not Seleted")
		}
		else{
			
		var name=name;
		var tye=type;
		var emp=sel.value;
		var adv=adv;
		
		$.ajax({
			url:"db.php",
			type:"POST",
			data:{
				"status":12,
				"name":name,
				"type":type,
				"emp":emp,
				"adv":adv,
			},
			success:function(d)
			{
				alert(d);
				window.location.href='index.php';
				
			}
		});
		
		}
	}
</script>
