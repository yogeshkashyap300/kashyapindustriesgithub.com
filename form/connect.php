<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('db',$con)or die(mysql_error()); 
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];


$query="insert into signup(fname,mname,lname,dob,gender,email,mobile,username,password,rpassword) 
values('$fname','$mname','$lname','$dob','$gender','$email','$mobile','$username','$password','$rpassword')";

if(mysql_query($query))
{
	echo "<script>alert('You are Successfully Registered')</script>";

}
else
	echo (mysql_error);
}

?>

//
session_start();
$db=mysqli_connect("localhost","root","","db");

if (isset($_POST['Submit']));
{
	session_start();
	
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password1 = mysql_real_escape_string($_POST['password1']);
	$password2 = mysql_real_escape_string($_POST['password2']);
	
	if ($password1 == $password2)
	{
		$password1 = md5($password1)
		$db= "insert into user (username, email, password1) VALUES ('$username', '$email', '$password1')";
	   mysqli_query($db,$sql);
	 
		$_SESSION['message'] = "You are Successfully Logged in";
	}
	else
	{
		$_SESSION['message'] = "The Passwords are not Matched";
	}
}
//