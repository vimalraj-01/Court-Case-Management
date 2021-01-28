<?php
session_start();
include("db.php");
if (isset($_POST["login"]))
{
	
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$n="";
	$p="";
	$t="";
$sql = "SELECT * FROM register where name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $n=$row["name"];
		$p=$row["pass"];
		$t=$row["type"];
		if(($name==$n)&&($pass==$p))
		{
			$_SESSION["username"] =$name;
			if($t=="admin")
			{
				echo "<script>alert('Login Successfully');window.location.href='admin/index.php';</script>";
				
			}
			
			 if($t=="client")
			{
				echo "<script>alert('Login Successfully');window.location.href='client/index.php';</script>";
			}
		}
		else 
		{
			
			echo "<script>alert('Invalid Account');window.location.href='index.php';</script>";
		}	

		
    }
	
} else {
	$qry = "SELECT * FROM employees where name='$name'";
	$res = $conn->query($qry);
	if ($res->num_rows > 0) {
    
    while($ro = $res->fetch_assoc()) {
        $na=$ro["name"];
		$pa=$ro["pass"];
		
		if(($name==$na)&&($pass==$pa))
		{
			$_SESSION["username"] =$name;
			
				echo "<script>alert('Login Successfully');window.location.href='employee/index.php';</script>";
			
		}
		else
			echo "<script>alert('Invalid Account');window.location.href='index.php';</script>";
	}
	}
   echo "<script>alert('User Not Registered');window.location.href='index.php';</script>";
}


	
}


if(isset($_POST["register"]))
{
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$pass1=$_POST["pass1"];
	$pass2=$_POST["pass2"];
	$type=$_POST["type"];
	
	if($pass1==$pass2)
	{
		if($type=='admin')
		{
		$qry = "SELECT * FROM register order by code desc limit 1";
		$res = $conn->query($qry);
	if ($res->num_rows > 0) {
    
    while($ro = $res->fetch_assoc()) {
		$id=$ro["code"];
		$newid=$id+1;
		
		$sql7 = "INSERT INTO dailyupdates(code,totalcase,casedone,casebending)  VALUES ('$newid','0','0','0')";

	if ($conn->query($sql7) === TRUE){
   $sql = "INSERT INTO register(name,email,pass,type) VALUES ('$name','$email','$pass1','$type')";

	if ($conn->query($sql) === TRUE){
    echo "<script>alert('Registered Successfully');window.location.href='index.php';</script>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	} else {
    echo "Error: " . $sql7 . "<br>" . $conn->error;
	}	
		
	}
	}
	else{
		
		$newid=1;
		
		$sql7 = "INSERT INTO dailyupdates(code,totalcase,casedone,casebending)  VALUES ('$newid','0','0','0')";

	if ($conn->query($sql7) === TRUE){
   $sql = "INSERT INTO register(name,email,pass,type) VALUES ('$name','$email','$pass1','$type')";

	if ($conn->query($sql) === TRUE){
    echo "<script>alert('Registered Successfully');window.location.href='index.php';</script>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	} else {
    echo "Error: " . $sql7 . "<br>" . $conn->error;
	}	 
	}
		}
		else{
			
	$sql9 = "INSERT INTO register(name,email,pass,type) VALUES ('$name','$email','$pass1','$type')";

	if ($conn->query($sql9) === TRUE){
    echo "<script>alert('Registered Successfully');window.location.href='index.php';</script>";
	} else {
    echo "Error: " . $sql9 . "<br>" . $conn->error;
	}		
			
		}
	}
	else
		echo "<script>alert('Password Not Matched');window.location.href='index.php';</script>";
	

	
	
}
?>