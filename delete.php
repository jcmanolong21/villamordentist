<?php
$connect = mysqli_connect("localhost", "root", "", "lmvillamor");
$select = "DELETE from users where user_id='".$_GET['del_id']."'";
$query = mysqli_query($connect, $select) or die($select);
header ("Location: users.php");
?>