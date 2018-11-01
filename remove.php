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
 
     
       $sql = "UPDATE appointments SET status = 'read' where status = 'unread'";
if ($conn->query($sql) === TRUE) {
  //  echo "No Notification";
} else {
 //   echo "Error updating record: " . $conn->error;
}
         $sql1 = "SELECT * from appointments where status = 'unread'";
       $result1 = $conn->query($sql1);
       $row1 = $result1->fetch_assoc();
       $count1 = $result1->num_rows;
       echo $count1;
       $conn->close();
?>