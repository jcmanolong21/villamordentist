 <?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM t_records WHERE t_id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>