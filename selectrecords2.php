 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
      $query = "SELECT * FROM records WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>First Name</label></td>  
                     <td width="70%">'.$row["fname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Last Name</label></td>  
                     <td width="70%">'.$row["lname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Middle Name</label></td>  
                     <td width="70%">'.$row["mname"].'</td>  
                </tr> 
					<tr>  
                     <td width="30%"><label>Birthdate</label></td>  
                     <td width="70%">'.$row["bday"].'</td>  
                </tr> 	
				<tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["age"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Sex</label></td>  
                     <td width="70%">'.$row["sex"].'</td>  
                </tr>
				<tr>  
                     <td width="30%"><label>Home Address</label></td>  
                     <td width="70%">'.$row["homeAddress"].'</td> 					 
                </tr>
				<tr>  
                     <td width="30%"><label>Occupation</label></td>  
                     <td width="70%">'.$row["occupation1"].'</td> 					 
                </tr>
				<tr>  
                     <td width="30%"><label>Parents/Guardian</label></td>  
                     <td width="70%">'.$row["parents"].'</td> 					 
                </tr>
				<tr>  
                     <td width="30%"><label>Previous Doctor</label></td>  
                     <td width="70%">'.$row["prevDr"].'</td> 					 
                </tr>
				<tr>  
                     <td width="30%"><label>Last Visit</label></td>  
                     <td width="70%">'.$row["lastVisit"].'</td> 					 
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