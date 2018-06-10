<!DOCTYPE html>
<html>
<head>
	<title>T2T/Redirect</title>
</head>
<body bgcolor="#5f81b7">
	<h3>If no link available then Username or Password might be Incorrect... Go Back and Retry! Else if link available then Continue..</h3>
    <br>

</body>
</html>
<?php

$server     = "localhost";
$user       = "root";
$pass       = "";
$dbname     = "T2T";
$conn = mysqli_connect($server,$user,$pass,$dbname);
 if(!$conn)
 {
 	die("No connection established".mysqli_error($connection));
 }
 else
 {
 	echo "<center>SUCCESS</center>";
}


    
  /* if(isset($_POST['submit']))
    {
    	$username=$_POST['user'];
    	$password=$_POST['password'];
    	$sql="SELECT * FROM CustDetails WHERE Username = '$username' AND Password = '$password'  ";
    	$show_data=mysqli_query($conn,$sql);
    	if(!$show_data)
    	{
              die("Connection is failed".mysqli_error($conn));
        }
        else
        {
        	while($row=mysqli_fetch_assoc($show_data))
        	{ 

        echo '<center>LOGGED IN SUCCESSFULLY <a href="Home.php">CLICK TO PROCEED</a></center>';			
        	}
        }
     
    }*/


?>