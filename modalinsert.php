 <?php  
 include('cekuser.php');
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $fname = mysqli_real_escape_string($connect, $_POST["fname"]);  
      $lname = mysqli_real_escape_string($connect, $_POST["lname"]);
	  $mname = mysqli_real_escape_string($connect, $_POST["mname"]);
	  $age = mysqli_real_escape_string($connect, $_POST["age"]);
      $gender = mysqli_real_escape_string($connect, $_POST["gender"]); 
      $type = mysqli_real_escape_string($connect, $_POST["type"]); 
	  $date = mysqli_real_escape_string($connect, $_POST["date"]);
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE appointments   
           SET fname='$fname',   
           lname='$lname',
		   mname='$mname',
		   age = '$age',
           gender='$gender',   
           type = '$type',
		   date = '$date'
           WHERE id='".$_POST["employee_id"]."'"; 
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO appointments(fname, lname, mname, age, gender, type)  
           VALUES('$fname', '$lname','$mname', '$age','$gender', '$type');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM appointments where username ='{$_SESSION['username']}'";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="30%"><center>Type of Appointment</th>  
                                    <th width="15%"><center>Edit</th>  
                                    <th width="15%"><center>View</th>
									<th width="15%"><center>Delete</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td><center>' . $row["type"] . '</td>  
                          <td><center><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><center><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>
						  <td><center><input class="btn btn-danger" type=button onClick=deleteme('.$row['id'].') name=Delete value=Delete></td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>