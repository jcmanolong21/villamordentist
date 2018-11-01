<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost","root","","research");  
      $query = "SELECT * FROM research WHERE dataID = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                       
                     <td width="70%">'.$row["addNote"].'</td>  
                </tr>  
                <tr>  
            
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>