<?php
$connect = mysqli_connect("localhost", "root", "", "lmvillamor");
$select = "DELETE from appointments where id='".$_GET['del_id']."'";
$query = mysqli_query($connect, $select) or die($select);
header ("Location: myappointments2.php");
?>