<?php
$error ='';
include "connection.php";
if(isset($_POST['btnSubmit']))
{
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Enter both fields.";
}
else{
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
	$query1 = mysqli_query($connection, "SELECT * FROM adminform WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query1) == 0){
	    $error = 'Invalid username and password.';
		}
	else
	{
		$row1 = mysqli_fetch_assoc($query1);
		$_SESSION['username']=$row1['username'];
		$_SESSION['admin'] = $row1['level'];
		if($_SESSION['admin'] == $row1['level']){
			header("Location:profileadmin.php");}
		else{
			$error="Invalid username and password.";
		}
	}
	$query2 = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' AND password1='$password'");
	if(mysqli_num_rows($query2) == 0){
	       $error = 'Invalid username and password.';
		}
	else
	{
		$row2 = mysqli_fetch_assoc($query2);
		$_SESSION['username']=$row2['username'];
		$_SESSION['user'] = $row2['level'];
		if($_SESSION['user'] == $row2['level']){
			header("Location:profile.php");
		}
		else{
			$error="Invalid username and password.";
		}
	}
}
}
?>