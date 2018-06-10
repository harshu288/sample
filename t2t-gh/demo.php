<?php
$server="localhost";
$user="root";
$pass="";
$dbname="T2T";
$conn=mysqli_connect($server,$user,$pass,$dbname);
 if(!$conn)
 {
   die("No connection established".mysqli_error($conn));
 }
 else
 {
   echo "SUCCESS";
 }
 //$query = "CREATE TABLE CustDetails(FirstName varchar(15) , LastName varchar(15) , Username varchar(10) , Password varchar(15) , ConfirmPassword varchar(15) , DateOfBirth varchar(10) , City varchar(10) , ContactNo varchar(10) , Email varchar(30) , Address varchar(40))";
}
/*
$first = $_POST['first'];
$last  = $_POST['last'];
$user  = $_POST['user'];
$pass  = $_POST['password'];
$cpass = $_POST['cpassword'];
$date  = $_POST['dt'];
$city  = $_POST['dropdown'];
$cont  = $_POST['contact'];
$email = $_POST['email'];
$add   = $_POST['address'];
$sql = "INSERT INTO CustDetails(FirstName , LastName , Username , Password , ConfirmPassword , DateOfBirth , City , ContactNo , Email , Address) values('$first' , '$last' , '$user' , '$pass' , '$cpass' , '$date' , '$city' , '$cont' , '$email' , '$add')";
 
if(mysqli_query($conn , $sql))
{
  echo '<center>You have successfully Registered<br><a href="Home.php">Click Here To Proceed</a></center>';
}
else
{
  echo "NOT INSERTED";
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>T2T/Link</title>
</head>
<body bgcolor="#5f81b7">

</body>
</html>