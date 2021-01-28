<?php
session_start();
include('db.php');
if (isset($_POST['update']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$user=$_POST['user'];
	$qry = "update register set name='$name',email='$email',pass='$pass',phone='$phone'  where name='$user'";
	if ($conn->query($qry) === TRUE) {
		echo "<script>alert('Updated successfully');window.location.href='index.php';</script>";
		$_SESSION["username"] =$name;
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}

	
}




if ($_POST["status"] == 2)
{
	session_unset();


session_destroy();

echo "logout successfully";

	
}


if ($_POST["status"] == 3)
{
	$emp=$_POST["emp"];
	$cli=$_POST["cli"];
	$cty=$_POST["cty"];
	$stat = $conn->query("select * from casedetails  where employee='$emp' and client='$cli' and ctype='$cty' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){
		$ctype=$row["ctype"];
		$filno=$row["filno"];
		$fildate=$row["fildate"];
		$regno=$row["regno"];
		$regdate=$row["regdate"];
		$cnrno=$row["cnrno"];
		echo "<table border='1' style='width:100%;'>
  <tr style='height:40px;'><th style='color:black;width:50%;'><b>&nbsp;&nbsp;Case Type</b></th><th>".$ctype."</th></tr>
   <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;Filing Number</b></th><th>".$filno."</th></tr>
   <tr style='height:40px;'><th style='color:black;width:50%;'><b>&nbsp;&nbsp;Filing Date</b></th><th>".$fildate."</th></tr>
   <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;Registration Number</b></th><th>".$regno."</th></tr>
   <tr style='height:40px;'><th style='color:black;width:50%;'><b>&nbsp;&nbsp;Registration Date</b></th><th>".$regdate."</th></tr>
   <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;CNR Number</b></th><th>".$cnrno."</th></tr>
  </table>";
 
	}
}
	
}

if ($_POST["status"] == 4)
{
	$emp=$_POST["emp"];
	$cli=$_POST["cli"];
	$cty=$_POST["cty"];
	$stat = $conn->query("select * from caseallocation  where employee='$emp' and client='$cli' and casetype='$cty' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){
		$cli=$row["client"];
		$ad=$row["admin"];
		
		
		
		echo "<table border='1' style='width:100%;'>
  <tr style='height:40px;'><th style='color:black;width:50%;'><b>&nbsp;&nbsp;Petitioner</b></th><th>".$cli."</th></tr>
   <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;Advocate</b></th><th>".$ad."</th></tr>
  
  
  </table>";
 
	}
}
	
}

if ($_POST["status"] == 5)
{
	$emp=$_POST["emp"];
	$cli=$_POST["cli"];
	$cty=$_POST["cty"];
	$stat = $conn->query("select * from casedetails  where employee='$emp' and client='$cli' and ctype='$cty' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){
		$res=$row["respondent"];
		$ad=$row["advocate"];
		
		
		
		echo "<table border='1' style='width:100%;'>
  <tr style='height:40px;'><th style='color:black;width:50%;'><b>&nbsp;&nbsp;Respondent</b></th><th>".$res."</th></tr>
   <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;Advocate</b></th><th>".$ad."</th></tr>
  
  
  </table>";
 
	}
}
	
}
if ($_POST["status"] == 6)
{
	$emp=$_POST["emp"];
	$cli=$_POST["cli"];
	$cty=$_POST["cty"];
	$stat = $conn->query("select * from casehistory  where employee='$emp' and client='$cli' and ctype='$cty' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){
		$bod=$row["businessondate"];
		$hd=$row["hearingdate"];
		$ph=$row["purposeofhearing"];
		
		
		echo "<table border='1' style='width:100%;'>
  <tr style='height:40px;'><th style='color:black;'><b>&nbsp;&nbsp;Business On Date</b></th>
  <th style='color:black;'><b>&nbsp;&nbsp;Next Hearing Date</b></th>
  <th style='color:black;'><b>&nbsp;&nbsp;Purpose Of Hearing</b></th></tr>
  <tr style='color:rgb(100, 139, 113);'> <td>".$bod."</td> <td>".$hd."</td><td>".$ph."</td></tr>
     
  
  </table>";
 
	}
}
	
}

if (isset($_POST["request"]))
{
	
	$place=$_POST["place"];
	$court=$_POST["court"];
	$type=$_POST["type"];
	$advocate=$_POST["advocate"];
	$client=$_POST["client"];
	$qry4 = "insert into request values('$client','$advocate','$place','$court','$type','0')";
	if ($conn->query($qry4) === TRUE) {
		echo "<script>alert('Requested successfully');window.location.href='index.php'</script>";
		
} else {
    echo "Error: " . $qry4 . "<br>" . $conn->error;
}
	
}

?>