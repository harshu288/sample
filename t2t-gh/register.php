<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "user-reg";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/


if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
	
    //$con=mysql_connect('localhost','root','') or die(mysql_error());
	
    //mysql_select_db('user_reg') or die("cannot select DB"); 
		
  
    //$query=mysql_query("SELECT * FROM login WHERE username='".$user."'");  
    //$numrows=mysql_num_rows($query);  
    //if($numrows==0)  
    //{  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysql_query($sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    //}else {  
    //echo "That username already exists! Please try again with another.";  
    //}
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  