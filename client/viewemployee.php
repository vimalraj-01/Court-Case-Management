<?php


$code=$_GET["code"];
session_start();

?>

<html>
<head>
<title>Court Cae Management System|Client</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="javascript/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="javascript/jquery.min.js"></script>
  <script src="javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="javascript/jquery-3.4.1.js"></script>
  <style>
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
	label{
		font-size:23px;
	}
	
  </style>
  
  
</head>
<body class="w3-container">

<div class="w3-panel w3-card w3-light-grey">

  <h3 style="float:left">Advocate Details</h3>
  <input type="submit" value="Status" style="float:right;margin-top:20px;" class="btn btn-primary" onclick="stat()">
  <input type="submit" value="Request" style="float:right;margin-top:20px;margin-right:10px;" class="btn btn-primary" onclick="request()">
  <a href="index.php"><input type="submit" value="Home" style="float:right;margin-top:20px;margin-right:10px;" class="btn btn-primary"></a><br><br><br><br>

  <div class="w3-container w3-white">
  <div id="details">
    <p>
	<br><br>
   <?php 

require_once 'db.php'; 


$result = $conn->query("select * from register where code='$code'"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <span style='margin-left:5%;'>
        <?php while($row = $result->fetch_assoc()){ 
		
		$n=$row['name'];
		$e=$row['email'];		
		$ph=$row['phone'];
		
		?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  height="30" width="40" alt="Profile Image" id="img" style="float:left;"/> 
			<div style="float:left;margin-left:10%;margin-top:30px;">
			<span style="font-size:25px;"><b>Name:</b>&nbsp;&nbsp; <?php echo $n ?></span><br><br><br>
			<span style="font-size:25px;"><b>Email:</b> &nbsp;&nbsp;<?php echo $e ?></span><br><br><br>
			<span style="font-size:25px;"><b>Phone:</b> &nbsp;&nbsp;<?php echo $ph ?></span>
			</div>
			<?php
			$fee=$conn->query("select * from dailyupdates where code='$code'");
			 if($fee->num_rows > 0){
				while($ff = $fee->fetch_assoc()){ 
				$tc=$ff['totalcase'];
		$cd=$ff['casedone'];
		$cb=$ff['casebending'];
		$fees=$ff['fees'];
		
			
			?>
		
			<div style="float:right;margin-top:30px;margin-right:10%;">
			<span style="font-size:25px;"><b>Totalcases:</b>&nbsp;&nbsp; <?php echo $tc ?></span><br><br><br>
			<span style="font-size:25px;"><b>CasesDone:</b> &nbsp;&nbsp;<?php echo $cd ?></span><br><br><br>
			<span style="font-size:25px;"><b>CasesBending:</b> &nbsp;&nbsp;<?php echo $cb ?></span><br><br><br>
			
			</div>
			<?php
			if($fees=='')
			{
				
			?>
			<div style="float:right;margin-top:20px;margin-right:10%;">
			<span style="font-size:25px;"><b>Fees:</b> &nbsp;&nbsp;<?php echo "<span style='fnt-size:30px;'><b>-</b></span>" ?></span><br><br><br>	
			</div>
		<?php
			}
			else{
				
		?>
		<div style="float:right;margin-top:20px;margin-right:10%;">
			<span style="font-size:25px;"><b>Fees:</b> &nbsp;&nbsp;<?php echo $fees ?></span><br><br><br>	
			</div>
			<?php
			}
			?>
		
			<?php
				}
			 }
			?>
			
        <?php } ?> 
    </span>
<?php }?> 


    </p>
  </div>
  <div id="request" style="float:left;margin-left:25%;">
  <form action="new.php" method="post">
  <br><br>
	&nbsp;&nbsp;&nbsp;<label>Enter The Place:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="place" id="place"  class="btn btn-primary dropdown-toggle" style="background-color:white;color:black;width:72%;" required><br><br>
	&nbsp;&nbsp;&nbsp;<label>Enter The Court Name:</label>&nbsp;&nbsp;&nbsp;<input type="text" name="court" id="court" style="background-color:white;color:black;width:72%;" class="btn btn-primary dropdown-toggle" required><br><br>
	
	&nbsp;&nbsp;&nbsp;<label>Select The Case Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;<select name="type" id="type" class="btn btn-primary dropdown-toggle" style="background-color:white;color:black;width:72%;" required>
<option>select</option>
	<option>AP-Approval Petition</option>
<option>ARBOP-Arbitration Original Petition</option>
<option>AS-Appeal Suit</option>
<option>C-Complaint Petition</option>
<option>CC-Calendar Case</option>
<option>CMA-Civil Miscellaneous Appeal</option>
<option>COS-Commerical Original Suit</option>
<option>CP-Claim Petition</option>
<option>CRLA-Criminal Appeal</option>
<option>CRLMP-Criminal Miscellaneous Petition</option>
<option>CRLR-Criminal Revision Petition</option>
<option>CRP-Civil Revision Petition</option>
<option>Dist.Application-Distress Application</option>
<option>DOP-Indian Divorce Original Petition</option>
<option>DVC-Domestic Voilence Case</option>
<option>EOCC-Economic Offense Case</option>
<option>EP-Exceution Petition</option>
<option>GWOP-Guardian and Wards Original Petition</option>
<option>HMOP-Hindu Marriage Original Petition</option>
<option>IP-Insolvency Petition</option>
<option>JC-Juvenile Case</option>
<option>MC-Maintenance Case</option>
<option>MCOP-Mototr Accidents Claim Original Petition</option>
<option>MTA-Munuicipal Taxation Appeal</option>
<option>NT Application-New Trial Application</option>
<option>OA-Original Application</option>
<option>OP-Original Petition</option>
<option>OS-Original Suit</option>
<option>PRC-Preliminary Register Case</option>
<option>PWA-Payment Wages Appeal</option>
<option>RC-Reference Case</option>
<option>RCA-Rent Control Appeal</option>
<option>RCOP-Rent Control Original Petition</option>
<option>RLTOP-Regulation Of Landloard and Tenant Original Petition</option>
<option>RLTRA-Regulation Of Landloard and Tenant Rent Authority Appeal</option>
<option>RP-Review Petition</option>
<option>SC-Sessions Case</option>
<option>SCC-Small Cause Suit</option>
<option>SFCOP-State Financial Corporation Orginal Petition</option>
<option>SOA-Standing Order Appeal</option>
<option>SPLCC-Special Calendar Case</option>
<option>SPL.SC-Special Sessions Case</option>
<option>STC-Small Cause Calendar Case/Summary Trial Case</option>
<option>Tr.OP-Transferr Original Petition</option>
</select><br><br>
		<input type="hidden" name="status" value="4">
		<input type="hidden" name="advocate" value="<?php echo $code ?>">
		<?php 

require_once 'db.php'; 

$name=$_SESSION["username"];
$res = $conn->query("select * from register where name='$name'"); 
?>
<?php if($res->num_rows > 0){ ?> 
<?php while($row = $res->fetch_assoc()){ 
		
		$n=$row['code'];
		
		
		?> 
			<input type="hidden" name="client" value="<?php echo $n ?>">
			
			
			<?php 
			}
			}

			?>
	<input type="submit" name="request" value="Request" class="btn btn-primary" style="margin-left:30%;" >
   </form>
  </div>
  
  <div id="status">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Advocate Name</th>
      <th scope="col">Place</th>
	  <th scope="col">Court</th>
      <th scope="col">Case Type</th>
      <th scope="col">Advocate Status</th>
    </tr>
  </thead>
  <tbody>
  <?php 

require_once 'db.php'; 
 $name=$_SESSION["username"];
$sno=0;
$stat = $conn->query("select * from register  where name='$name' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){ 
	$cl=$row['code'];
	 $ad = $conn->query("select * from register where code='$code' "); 
	if($ad->num_rows > 0){
	while($r = $ad->fetch_assoc()){ 
	    $a=$r['name'];
	$st = $conn->query("select * from request where send='$cl' and received='$code'"); 
	if($st->num_rows > 0){
	while($ro = $st->fetch_assoc()){ 
		$p=$ro['place'];
		$court=$ro['court'];
		$case=$ro['casetype'];
		$status=$ro['status'];
	  
?>

    <tr>
      <th scope="row"><?php echo ++$sno; ?></th>
      <td><?php echo $name; ?></td>
      <td><?php echo $a; ?></td>
      <td><?php echo $p; ?></td>
	  <td><?php echo $court; ?></td>
      <td><?php echo $case ?></td>
      <td><?php 

			if($status=='0')
			{
			echo "<input type='submit' value='Wait' class='btn btn-primary' style='background-color:yellow;cursor: text;'>";
			}
			else if($status=='1'){
				
				echo "<input type='submit' value='Bending' class='btn btn-primary' style='background-color:blue;cursor: text;'>";
			}
			else if($status=='2')
			{
				echo "<input type='submit' value='Accepted' class='btn btn-primary' style='background-color:green;cursor: text;'>";
			}
			else if($status=='3')
			{
				echo "<input type='submit' value='Rejected' class='btn btn-primary' style='background-color:red;cursor: text;'>";
			}


	  ?></td>
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
		echo "Error: " . $ad . "<br>" . $conn->error;
		
	}
	}
}
	else{
		echo "Error: " . $stat . "<br>" . $conn->error;
		
	}
	?>
  </tbody>
</table>
  
  </div>
  </div>
  <br><br>
  <p>Court Case Management System</p>
</div>

</body>
</html>


<script>

var details=document.getElementById("details");
details.style.display="block";
var req=document.getElementById("request");
req.style.display="none";
var sta=document.getElementById("status");
sta.style.display="none";
function request()
{
	
	var details=document.getElementById("details");
details.style.display="none";

var status=document.getElementById("status");
status.style.display="none";

var req=document.getElementById("request");
req.style.display="block";

	
}

function stat()
{
	
	var details=document.getElementById("details");
details.style.display="none";

var req=document.getElementById("request");
req.style.display="none";

	var status=document.getElementById("status");
status.style.display="block";
	
}



</script>