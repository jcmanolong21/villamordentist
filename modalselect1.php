 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
      $query = "SELECT * FROM users WHERE user_id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <th width="30%">First Name</th>  
                     <td width="70%">'.$row["fname"].'</td>  
                </tr>  
                <tr>  
                     <th width="30%">Last Name</th>  
                     <td width="70%">'.$row["lname"].'</td>  
                </tr> 
				<tr>  
                     <td width="30%"><label>Contact</label></td>  
                     <td width="70%">'.$row["contact"].'</td>  
                </tr>
				
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>