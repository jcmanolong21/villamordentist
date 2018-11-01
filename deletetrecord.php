<?php
$connect = mysqli_connect("localhost", "root", "", "lmvillamor");
$select = "DELETE from t_records where t_id='".$_GET['del_id']."'";
$query = mysqli_query($connect, $select) or die($select);
header ("Location: treatmentrecords.php");
?>