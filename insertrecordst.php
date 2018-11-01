   <?php  
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
	  $age = mysqli_real_escape_string($connect, $_POST["age"]);
	  $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
	  $t_date = mysqli_real_escape_string($connect, $_POST["t_date"]);
	  $toothNo = mysqli_real_escape_string($connect, $_POST["toothNo"]);
	  $t_procedure = mysqli_real_escape_string($connect, $_POST["t_procedure"]);
	  $dentists = mysqli_real_escape_string($connect, $_POST["dentists"]);
	  $amountCharged = mysqli_real_escape_string($connect, $_POST["amountCharged"]);
	  $amountPaid = mysqli_real_escape_string($connect, $_POST["amountPaid"]);
	  $balance = mysqli_real_escape_string($connect, $_POST["balance"]);
	  $t_date2 = mysqli_real_escape_string($connect, $_POST["t_date2"]);
	  $toothNo2 = mysqli_real_escape_string($connect, $_POST["toothNo2"]);
	  $t_procedure2= mysqli_real_escape_string($connect, $_POST["t_procedure2"]);
	  $dentists2 = mysqli_real_escape_string($connect, $_POST["dentists2"]);
	  $amountCharged2 = mysqli_real_escape_string($connect, $_POST["amountCharged2"]);
	  $amountPaid2 = mysqli_real_escape_string($connect, $_POST["amountPaid2"]);
	  $balance2 = mysqli_real_escape_string($connect, $_POST["balance2"]);
	  $t_date3 = mysqli_real_escape_string($connect, $_POST["t_date3"]);
	  $toothNo3 = mysqli_real_escape_string($connect, $_POST["toothNo3"]);
	  $t_procedure3= mysqli_real_escape_string($connect, $_POST["t_procedure3"]);
	  $dentists3 = mysqli_real_escape_string($connect, $_POST["dentists3"]);
	  $amountCharged3 = mysqli_real_escape_string($connect, $_POST["amountCharged3"]);
	  $amountPaid3 = mysqli_real_escape_string($connect, $_POST["amountPaid3"]);
	  $balance3 = mysqli_real_escape_string($connect, $_POST["balance3"]);
	  $t_date4 = mysqli_real_escape_string($connect, $_POST["t_date4"]);
	  $toothNo4= mysqli_real_escape_string($connect, $_POST["toothNo4"]);
	  $t_procedure4= mysqli_real_escape_string($connect, $_POST["t_procedure4"]);
	  $dentists4 = mysqli_real_escape_string($connect, $_POST["dentists4"]);
	  $amountCharged4 = mysqli_real_escape_string($connect, $_POST["amountCharged4"]);
	  $amountPaid4 = mysqli_real_escape_string($connect, $_POST["amountPaid4"]);
	  $balance4 = mysqli_real_escape_string($connect, $_POST["balance4"]);
	  $t_date5 = mysqli_real_escape_string($connect, $_POST["t_date5"]);
	  $toothNo5 = mysqli_real_escape_string($connect, $_POST["toothNo5"]);
	  $t_procedure5 = mysqli_real_escape_string($connect, $_POST["t_procedure5"]);
	  $dentists5 = mysqli_real_escape_string($connect, $_POST["dentists5"]);
	  $amountCharged5 = mysqli_real_escape_string($connect, $_POST["amountCharged5"]);
	  $amountPaid5 = mysqli_real_escape_string($connect, $_POST["amountPaid5"]);
	  $balance5 = mysqli_real_escape_string($connect, $_POST["balance5"]);
	  $t_date6 = mysqli_real_escape_string($connect, $_POST["t_date6"]);
	  $toothNo6 = mysqli_real_escape_string($connect, $_POST["toothNo6"]);
	  $t_procedure6 = mysqli_real_escape_string($connect, $_POST["t_procedure6"]);
	  $dentists6 = mysqli_real_escape_string($connect, $_POST["dentists6"]);
	  $amountCharged6 = mysqli_real_escape_string($connect, $_POST["amountCharged6"]);
	  $amountPaid6 = mysqli_real_escape_string($connect, $_POST["amountPaid6"]);
	  $balance6 = mysqli_real_escape_string($connect, $_POST["balance6"]);
	  $t_date7 = mysqli_real_escape_string($connect, $_POST["t_date7"]);
	  $toothNo7 = mysqli_real_escape_string($connect, $_POST["toothNo7"]);
	  $t_procedure7 = mysqli_real_escape_string($connect, $_POST["t_procedure7"]);
	  $dentists7 = mysqli_real_escape_string($connect, $_POST["dentists7"]);
	  $amountCharged7 = mysqli_real_escape_string($connect, $_POST["amountCharged7"]);
	  $amountPaid7 = mysqli_real_escape_string($connect, $_POST["amountPaid7"]);
	  $balance7 = mysqli_real_escape_string($connect, $_POST["balance7"]);
	  $t_date8 = mysqli_real_escape_string($connect, $_POST["t_date8"]);
	  $toothNo8 = mysqli_real_escape_string($connect, $_POST["toothNo8"]);
	  $t_procedure8 = mysqli_real_escape_string($connect, $_POST["t_procedure8"]);
	  $dentists8 = mysqli_real_escape_string($connect, $_POST["dentists8"]);
	  $amountCharged8 = mysqli_real_escape_string($connect, $_POST["amountCharged8"]);
	  $amountPaid8 = mysqli_real_escape_string($connect, $_POST["amountPaid8"]);
	  $balance8 = mysqli_real_escape_string($connect, $_POST["balance8"]);
	  $t_date9 = mysqli_real_escape_string($connect, $_POST["t_date9"]);
	  $toothNo9 = mysqli_real_escape_string($connect, $_POST["toothNo9"]);
	  $t_procedure9 = mysqli_real_escape_string($connect, $_POST["t_procedure9"]);
	  $dentists9 = mysqli_real_escape_string($connect, $_POST["dentists9"]);
	  $amountCharged9 = mysqli_real_escape_string($connect, $_POST["amountCharged9"]);
	  $amountPaid9 = mysqli_real_escape_string($connect, $_POST["amountPaid9"]);
	  $balance9 = mysqli_real_escape_string($connect, $_POST["balance9"]);
	  $t_date10 = mysqli_real_escape_string($connect, $_POST["t_date10"]);
	  $toothNo10 = mysqli_real_escape_string($connect, $_POST["toothNo10"]);
	  $t_procedure10 = mysqli_real_escape_string($connect, $_POST["t_procedure10"]);
	  $dentists10 = mysqli_real_escape_string($connect, $_POST["dentists10"]);
	  $amountCharged10 = mysqli_real_escape_string($connect, $_POST["amountCharged10"]);
	  $amountPaid10 = mysqli_real_escape_string($connect, $_POST["amountPaid10"]);
	  $balance10 = mysqli_real_escape_string($connect, $_POST["balance10"]);
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE t_records   
           SET name='$name',   
		   age='$age',
		   gender='$gender',
		   t_date='$t_date',
		   toothNo='$toothNo',
		   t_procedure='$t_procedure',
		   dentists='$dentists',
		   amountCharged='$amountCharged',
		   amountPaid='$amountPaid',
		   balance='$balance',
		   t_date2='$t_date2',
		   toothNo2='$toothNo2',
		   t_procedure2='$t_procedure2',
		   dentists2='$dentists2',
		   amountCharged2='$amountCharged2',
		   amountPaid2='$amountPaid2',
		   balance2='$balance2',
		   t_date3='$t_date3',
		   toothNo3='$toothNo3',
		   t_procedure3='$t_procedure3',
		   dentists3='$dentists3',
		   amountCharged3='$amountCharged3',
		   amountPaid3='$amountPaid3',
		   balance3='$balance3',
		   t_date4='$t_date4',
		   toothNo4='$toothNo4',
		   t_procedure4='$t_procedure4',
		   dentists4='$dentists4',
		   amountCharged4='$amountCharged4',
		   amountPaid4='$amountPaid4',
		   balance4='$balance4',
		   t_date5='$t_date5',
		   toothNo5='$toothNo5',
		   t_procedure5='$t_procedure5',
		   dentists5='$dentists5',
		   amountCharged5='$amountCharged5',
		   amountPaid5='$amountPaid5',
		   balance5='$balance5',
		   t_date6='$t_date6',
		   toothNo6='$toothNo6',
		   t_procedure6='$t_procedure6',
		   dentists6='$dentists6',
		   amountCharged6='$amountCharged6',
		   amountPaid6='$amountPaid6',
		   balance6='$balance6',
		   t_date7='$t_date7',
		   toothNo7='$toothNo7',
		   t_procedure7='$t_procedure7',
		   dentists7='$dentists7',
		   amountCharged7='$amountCharged7',
		   amountPaid7='$amountPaid7',
		   balance7='$balance7',
		   t_date8='$t_date8',
		   toothNo8='$toothNo8',
		   t_procedure8='$t_procedure8',
		   dentists8='$dentists8',
		   amountCharged8='$amountCharged8',
		   amountPaid8='$amountPaid8',
		   balance8='$balance8',
		   t_date9='$t_date9',
		   toothNo9='$toothNo9',
		   t_procedure9='$t_procedure9',
		   dentists9='$dentists9',
		   amountCharged9='$amountCharged9',
		   amountPaid9='$amountPaid9',
		   balance9='$balance9',
		   t_date10='$t_date10',
		   toothNo10='$toothNo10',
		   t_procedure10='$t_procedure10',
		   dentists10='$dentists10',
		   amountCharged10='$amountCharged10',
		   amountPaid10='$amountPaid10',
		   balance10='$balance10'
           WHERE t_id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';
      }  
      else  
      {  
           $query = "  
           INSERT INTO records(fname, lname, mname,bday)  
           VALUES('$fname', '$lname', '$mname','$bday',);  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM t_records ORDER BY t_id DESC";
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                         <th width ="40%">Name</th>
					<th width ="10%">Age</th>
					<th width ="10%">Gender</th>
					<th width ="15%">Open</th>
					<th width ="15%">Delete</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>
						  <td>' . $row["age"] . '</td>
						  <td>' . $row["gender"] . '</td> 
                          <td><input type="button" name="edit" value="Open" id="'.$row["t_id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                           <td><input class="btn btn-danger" type=button onClick=deleteme('.$row['t_id'].') name=Delete value=Delete></td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 <script language="javascript">
 function deleteme(delid)
 {
 if(confirm("Delete Record?")){
 window.location.href='deletetrecord.php?del_id=' +delid+'';
 return true;
 }
 } 
 </script>