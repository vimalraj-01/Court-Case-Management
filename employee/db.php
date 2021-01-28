<?php
session_start();
include('connect.php');
	
if (isset($_POST['update']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$user=$_POST['user'];
	$qry = "update employees set name='$name',email='$email',pass='$pass',phone='$phone'  where name='$user'";
	if ($conn->query($qry) === TRUE) {
		echo "<script>alert('Updated successfully');window.location.href='index.php';</script>";
		$_SESSION["username"] =$name;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	
}
 
if ($_POST["status"] == 2)
{
	session_unset();


session_destroy();

echo "logout successfully";

	
}


if ($_POST["status"] == 4)
{
		
		$tname=$_POST["tname"];
		$tcase=$_POST["tcase"];
		$bdate=$_POST["bdate"];
		$hdate=$_POST["hdate"];
		$hpurpose=$_POST["hpurpose"];		
		$emplo=$_POST["emplo"];
	
		$qry = "insert into casehistory(employee,client,ctype,businessondate,hearingdate,purposeofhearing) values('$emplo','$tname','$tcase','$bdate','$hdate','$hpurpose')";
	
	if ($conn->query($qry) === TRUE) {
		echo"Updated successfully";
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}
	
}



if ($_POST["status"] == 5)
{
		$em=$_POST["emp"];
		$cl=$_POST["cl"];
		$cty=$_POST["cty"];
		$qry = "update caseallocation set status='1'  where employee='$em' and client='$cl' and casetype='$cty'";
	if ($conn->query($qry) === TRUE) {
		echo"viewed successfully";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
if ($_POST["status"] == 6)
{
		
		$cn=$_POST["clname"];
		$stat = $conn->query("select * from caseallocation  where client='$cn' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){

	$ct=$row["casetype"];
	
	echo $ct;
	}
}
	
}

if ($_POST["status"] == 7)
{
		
		$tname=$_POST["tname"];
		$tcase=$_POST["tcase"];
		$filno=$_POST["filno"];
		$fildate=$_POST["fildate"];
		$regno=$_POST["regno"];
		$regdate=$_POST["regdate"];
		$cnrno=$_POST["cnrno"];
		$em=$_POST["em"];
		$qr = "insert into casedetails(employee,client,ctype,filno,fildate,regno,regdate,cnrno) values('$em','$tname','$tcase','$filno','$fildate','$regno','$regdate','$cnrno')";
	if ($conn->query($qr) === TRUE) {
		echo "Updated successfully";
		
} else {
    echo "Error: " . $qr . "<br>" . $conn->error;
}
	
}

if ($_POST["status"] == 8)
{
		
		$tname=$_POST["tname"];
		$tcase=$_POST["tcase"];
		$respname=$_POST["respname"];
		$advname=$_POST["advname"];
		$empl=$_POST["empl"];
		$fhd=$_POST["fhd"];
		
		$qry = "update casedetails set respondent='$respname',advocate='$advname',firsthearingdate='$fhd'  where employee='$empl' and client='$tname' and ctype='$tcase' ";
	if ($conn->query($qry) === TRUE) {
		echo"Updated successfully";
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}
	
}

if ($_POST["status"] == 9)
{
		$em=$_POST["emp"];
		$cl=$_POST["cl"];
		$cty=$_POST["cty"];
		$qry = "update caseallocation set status='2'  where employee='$em' and client='$cl' and casetype='$cty'";
	if ($conn->query($qry) === TRUE) {
		echo"Processed successfully";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}

if ($_POST["status"] == 10)
{
		$em=$_POST["emp"];
		$cl=$_POST["cl"];
		$cty=$_POST["cty"];
		$qry = "update caseallocation set status='3'  where employee='$em' and client='$cl' and casetype='$cty'";
	if ($conn->query($qry) === TRUE) {
		echo"Done successfully";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
?>