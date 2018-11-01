 <?php 
include('cekuser.php'); 
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $fname = mysqli_real_escape_string($connect, $_POST["fname"]);  
      $lname = mysqli_real_escape_string($connect, $_POST["lname"]);
	  $contact = mysqli_real_escape_string($connect, $_POST["contact"]);
	  $password1 = mysqli_real_escape_string($connect, $_POST["password1"]);
  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE users   
           SET fname='$fname',   
           lname='$lname',
		   contact='$contact',
		   password1='$password1'
           WHERE user_id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';
			echo "</br>";
      }  
	  
      else  
      {  
           $query = "  
           INSERT INTO users(fname, lname, contact,password1)  
           VALUES('$fname', '$lname','$contact','$password1');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM users where username= '{$_SESSION['username']}'";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  

           ';  
           while($row = mysqli_fetch_array($result))  
           {  
			
                $output .= ' 
				<div align="right">
					<td><input type="button" name="edit" value="Edit" id="'.$row["user_id"] .'" class="btn btn-info btn-xs edit_data" /></td>
				</div>
				      <table class="table table-bordered">  
                     <tr>  
                          <th width="30%">First Name</th>
						  <td>' . $row["fname"] . '</td>
					</tr>
					<tr>
                          <th width="30%">Last Name</th>
						  <td>' . $row["lname"] . '</td> 
					</tr>
					<tr>
                          <th width="30%">Contact</th>
						  <td>' . $row["contact"] . '</td> 
					</tr>
						  <th width="30%">Date Created</th>
						  <td>' . $row["date"] . '</td> 
                     </tr> 
 
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>