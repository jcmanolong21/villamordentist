<?php
session_start();

//checking if user already login
if(!isset($_SESSION['username'])){
    header('Location: index.html');
}

//checking user's level
if($_SESSION['admin']!="admin"){
    header('Location: index.html');
	
}
?>