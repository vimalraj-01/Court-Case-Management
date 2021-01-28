<?php
session_start();

include('connect.php');
	
	if(isset($_POST['add']))
	{
		$user=$_SESSION["username"];
		
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	
	$sql3 = "SELECT * FROM register where name='$user'";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {
   
    
    while($row = $result->fetch_assoc()) {
		$code=$row["code"];
       $sql = "INSERT INTO employees(code,admin,name,pass,email) VALUES ('$code','$user','$name','$pass','$email')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Added Successfully');window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
   
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}


	
}


if($_POST["status"] == 1)
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$user=$_POST['user'];
	$fees=$_POST['fees'];
	
	$qry = "update register set name='$name',email='$email',pass='$pass',phone='$phone'  where name='$user'";
	if ($conn->query($qry) === TRUE) {
		
		
		$qry2 = "update employees set admin='$name'  where admin='$user'";
		if ($conn->query($qry2) === TRUE) {
			$sqlk = "SELECT * FROM register where name='$user'";
			$resu = $conn->query($sqlk);

if ($resu->num_rows > 0) {
   
    
    while($rowf = $resu->fetch_assoc()) {
		$cod=$rowf["code"];
		$qry0="update dailyupdates set fees='$fees' where code='$cod'";
		if ($conn->query($qry0) === TRUE) {
		
		echo "Updated Successfully";
		$_SESSION["username"] =$name;	
		}
		else{
			 echo "Error: " . $qry0 . "<br>" . $conn->error;
		}
	}
	
}else {
	 echo "Error: " . $resu . "<br>" . $conn->error;
}
			
		}
		else {
    echo "Error: " . $qry2 . "<br>" . $conn->error;
}
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}
}
 


if(isset($_POST["dailyupdate"]))
{
	$totalcase=$_POST["totalcases"];
	$casesdone=$_POST["casesdone"];
	$casesbending=$_POST["casesbending"];
	$name=$_SESSION["username"];
	$qry = "SELECT * FROM register where name='$name'";
		$res = $conn->query($qry);
	if ($res->num_rows > 0) {
    
    while($ro = $res->fetch_assoc()) {
		$code=$ro["code"];
		
		$qry7 = "update dailyupdates set totalcase='$totalcase', casedone='$casesdone', casebending='$casesbending'  where code='$code'";
		if ($conn->query($qry7) === TRUE) {
		echo "<script>alert('Updated Successfully');window.location.href='index.php';</script>";
			
		}
		else {
    echo "Error: " . $qry7 . "<br>" . $conn->error;
}
		
	}
	
	}	
	else{
	echo "Error: " . $qry . "<br>" . $conn->error;
	}
	
}
 
 
  if ($_POST["status"] == 2)
{
	session_unset();


session_destroy();

echo "logout successfully";

	
}

if($_POST["status"]==8)
{
	$name=$_POST['name'];
	$advoca=$_POST['advoca'];
	$stat = $conn->query("select * from register  where name='$name' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){

	$cli=$row["code"];
	
	$qry = "update request set status='1'  where send='$cli' and received='$advoca'";
	if ($conn->query($qry) === TRUE) {
		echo "Updated successfully";
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}
	}

}	
	
	
	
}
if($_POST["status"]==9)
{
	$name=$_POST['name'];
	$advoca=$_POST['advoca'];
	$stat = $conn->query("select * from register  where name='$name' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){

	$cli=$row["code"];
	
	$qry = "update request set status='2'  where send='$cli' and received='$advoca'";
	if ($conn->query($qry) === TRUE) {
		echo "Updated successfully";
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}
	}

}	
	
	
	
}
if($_POST["status"]==10)
{
	$name=$_POST['name'];
	$advoca=$_POST['advoca'];
	$stat = $conn->query("select * from register  where name='$name' "); 
if($stat->num_rows > 0){
	while($row = $stat->fetch_assoc()){

	$cli=$row["code"];
	
	$qry = "update request set status='3'  where send='$cli' and received='$advoca'";
	if ($conn->query($qry) === TRUE) {
		echo "Updated successfully";
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}
	}

}	
	
	
	
}

if($_POST["status"]==12)
{
	$name=$_POST['name'];
	$type=$_POST['type'];
	$emp=$_POST['emp'];
	$adv=$_POST['adv'];
	$em=$conn->query("select * from caseallocation where employee='$emp' and casetype='$type'");
	if($em->num_rows >= 1){
	  echo "This Case Is Already Allocated For This Employee";
	}
	else{
		$sql = "INSERT INTO caseallocation(admin,employee,client,casetype,status) VALUES ('$adv','$emp','$name','$type','0')";

if ($conn->query($sql) === TRUE) {
    echo "Allocated Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}

}	
	
	
	

?>