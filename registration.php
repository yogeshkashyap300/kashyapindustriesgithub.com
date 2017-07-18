<?php
$connect=mysqli_connect("localhost","root","","db");
?>

<!Doctype html>
<html>
<head><title>Welcome to Signup form</title>
</head>
<body>
<h1> Form Submitted</h1>
<!-- For Storing data in Variables-->
<?php
if(isset($_POST['Submit']))
{
	$name=$_POST['username'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	
	$query="insert into user(name,dob,gender,email,mobile,username,password1,password2) values('$name','$dob','$gender','$email','$mobile','$username','$password1','$password2')";
    $run=mysqli_query($connect,$query);
	
	if($run)
	{
		echo "Data insert Successfully" ;
	}
	else
	{
		echo"error:".mysqli_error($connect);
	}
}
?>
<!-- For Displaying on Screen-->
<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
if(isset($username))
{
?>
<h1>Please Note down Details for Future Reference</h1
<p>
<strong>Username-</strong><?php echo $username; ?><br/>
<strong>Email-</strong><?php echo $email; ?><br/>
<strong>Password1-</strong><?php echo $password1; ?><br/>
<strong>Password2-</strong><?php echo $password2; ?><br
</p>
<?php 
}
?>

<!-- For Upload a Resume-->
<?php
if(isset($_POST['Submit']))
{
$f=$_FILES['file'];
move_uploaded_file($f["tmp_name"],"serverfile/".$f["name"]);
if($f)
{
	echo "File Upload also Successfully";
}
else
{
	echo"error:".mysqli_error($connect);
}
}
?>

</body>
</html>
	
