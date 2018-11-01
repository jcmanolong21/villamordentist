<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "lmvillamor";
 
       // Create connection
 
       $conn = new mysqli($servername, $username, $password, $dbname);
 
       // Check connection
 
       if ($conn->connect_error) {
 
           die("Connection failed: " . $conn->connect_error);
 
       } 
 
       $sql1 = "SELECT * from appointments where status = 'unread'";
       $result = $conn->query($sql1);
       $row = $result->fetch_assoc();
       $count = $result->num_rows;
       echo $count;
       $conn->close();
?>