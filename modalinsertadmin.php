 <?php 
include('cekadmin.php'); 
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
	  $password = mysqli_real_escape_string($connect, $_POST["password"]);
  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE adminform   
		   password='$password'
           WHERE admin_id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';
			echo "</br>";
      }  
	  
      else  
      {  
           $query = "  
           INSERT INTO adminform(password)  
           VALUES('$password');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM adminform where username= '{$_SESSION['username']}'";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  

           ';  
           while($row = mysqli_fetch_array($result))  
           {  
			
                $output .= ' 
				<div align="right">
					<td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>
				</div>
				      <table class="table table-bordered">  
                     <tr>  
                          <th width="30%">password</th>
						  <td>' . $row["username"] . '</td>
                     </tr> 
 
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>