   <?php  
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $fname = mysqli_real_escape_string($connect, $_POST["fname"]);  
      $lname = mysqli_real_escape_string($connect, $_POST["lname"]);  
      $mname = mysqli_real_escape_string($connect, $_POST["mname"]); 
	  $bday = mysqli_real_escape_string($connect, $_POST["bday"]);
	  $age = mysqli_real_escape_string($connect, $_POST["age"]);
	  $sex = mysqli_real_escape_string($connect, $_POST["sex"]);
	  $religion = mysqli_real_escape_string($connect, $_POST["religion"]);
	  $nationality = mysqli_real_escape_string($connect, $_POST["nationality"]);
	  $nickname = mysqli_real_escape_string($connect, $_POST["nickname"]);
	  $homeAddress = mysqli_real_escape_string($connect, $_POST["homeAddress"]);
	  $homeNo = mysqli_real_escape_string($connect, $_POST["homeNo"]);
	  $occupation1 = mysqli_real_escape_string($connect, $_POST["occupation1"]);
	  $officeNo = mysqli_real_escape_string($connect, $_POST["officeNo"]);
	  $faxNo = mysqli_real_escape_string($connect, $_POST["faxNo"]);
	  $dentInsurance = mysqli_real_escape_string($connect, $_POST["dentInsurance"]);
	  $mobileNo = mysqli_real_escape_string($connect, $_POST["mobileNo"]);
	  $effectiveDate = mysqli_real_escape_string($connect, $_POST["effectiveDate"]);
	  $email = mysqli_real_escape_string($connect, $_POST["email"]);
	  $parents = mysqli_real_escape_string($connect, $_POST["parents"]);
	  $occupation2 = mysqli_real_escape_string($connect, $_POST["occupation2"]);
	  $prevDr = mysqli_real_escape_string($connect, $_POST["prevDr"]);
	  $lastVisit = mysqli_real_escape_string($connect, $_POST["lastVisit"]);
	  $physician = mysqli_real_escape_string($connect, $_POST["physician"]);
	  $specialty = mysqli_real_escape_string($connect, $_POST["specialty"]);
	  $officeAddress = mysqli_real_escape_string($connect, $_POST["officeAddress"]);
	  $officeNum = mysqli_real_escape_string($connect, $_POST["officeNum"]);
	  $goodHealth = mysqli_real_escape_string($connect, $_POST["goodHealth"]);
	  $medTreatment = mysqli_real_escape_string($connect, $_POST["medTreatment"]);
	  $medTreatment2 = mysqli_real_escape_string($connect, $_POST["medTreatment2"]);
	  $illness = mysqli_real_escape_string($connect, $_POST["illness"]);
	  $illness2 = mysqli_real_escape_string($connect, $_POST["illness2"]);
	  $hospitalized = mysqli_real_escape_string($connect, $_POST["hospitalized"]);
	  $hospitalized2 = mysqli_real_escape_string($connect, $_POST["hospitalized2"]);
	  $prescription = mysqli_real_escape_string($connect, $_POST["prescription"]);
	  $prescription2 = mysqli_real_escape_string($connect, $_POST["prescription2"]);
	  $tobacco = mysqli_real_escape_string($connect, $_POST["tobacco"]);
	  $alcohol = mysqli_real_escape_string($connect, $_POST["alcohol"]);
	  $allergic = mysqli_real_escape_string($connect, $_POST["allergic"]);
	  $opt2=isset($_POST['opt2']) ? $_POST['opt2'] : '';
	  
	  $bleedingTime2 = mysqli_real_escape_string($connect, $_POST["bleedingTime2"]);
	  $woman1 = mysqli_real_escape_string($connect, $_POST["woman1"]);
	  $woman2 = mysqli_real_escape_string($connect, $_POST["woman2"]);
	  $woman3 = mysqli_real_escape_string($connect, $_POST["woman3"]);
	  $bloodType = mysqli_real_escape_string($connect, $_POST["bloodType"]);
	  $bloodPressure = mysqli_real_escape_string($connect, $_POST["bloodPressure"]);
		$A55 = mysqli_real_escape_string($connect, $_POST["A55"]);
		$A54 = mysqli_real_escape_string($connect, $_POST["A54"]);
		$A53 = mysqli_real_escape_string($connect, $_POST["A53"]);
		$A52 = mysqli_real_escape_string($connect, $_POST["A52"]);
		$A51 = mysqli_real_escape_string($connect, $_POST["A51"]);
		$A61 = mysqli_real_escape_string($connect, $_POST["A61"]);
		$A62 = mysqli_real_escape_string($connect, $_POST["A62"]);
		$A63 = mysqli_real_escape_string($connect, $_POST["A63"]);
		$A64 = mysqli_real_escape_string($connect, $_POST["A64"]);
		$A65 = mysqli_real_escape_string($connect, $_POST["A65"]);
		$B55 = mysqli_real_escape_string($connect, $_POST["B55"]);
		$B54 = mysqli_real_escape_string($connect, $_POST["B54"]);
		$B53 = mysqli_real_escape_string($connect, $_POST["B53"]);
		$B52 = mysqli_real_escape_string($connect, $_POST["B52"]);
		$B51 = mysqli_real_escape_string($connect, $_POST["B51"]);
		$B61 = mysqli_real_escape_string($connect, $_POST["B61"]);
		$B62 = mysqli_real_escape_string($connect, $_POST["B62"]);
		$B63 = mysqli_real_escape_string($connect, $_POST["B63"]);
		$B64 = mysqli_real_escape_string($connect, $_POST["B64"]);
		$B65 = mysqli_real_escape_string($connect, $_POST["B65"]);
		$A18 = mysqli_real_escape_string($connect, $_POST["A18"]);
		$A17 = mysqli_real_escape_string($connect, $_POST["A17"]);
		$A16 = mysqli_real_escape_string($connect, $_POST["A16"]);
		$A15 = mysqli_real_escape_string($connect, $_POST["A15"]);
		$A14 = mysqli_real_escape_string($connect, $_POST["A14"]);
		$A13 = mysqli_real_escape_string($connect, $_POST["A13"]);
		$A12 = mysqli_real_escape_string($connect, $_POST["A12"]);
		$A11 = mysqli_real_escape_string($connect, $_POST["A11"]);
		$A21 = mysqli_real_escape_string($connect, $_POST["A21"]);
		$A22 = mysqli_real_escape_string($connect, $_POST["A22"]);
		$A23 = mysqli_real_escape_string($connect, $_POST["A23"]);
		$A24 = mysqli_real_escape_string($connect, $_POST["A24"]);
		$A25 = mysqli_real_escape_string($connect, $_POST["A25"]);
		$A26 = mysqli_real_escape_string($connect, $_POST["A26"]);
		$A27 = mysqli_real_escape_string($connect, $_POST["A27"]);
		$A28 = mysqli_real_escape_string($connect, $_POST["A28"]);
		$B18 = mysqli_real_escape_string($connect, $_POST["B18"]);
		$B17 = mysqli_real_escape_string($connect, $_POST["B17"]);
		$B16 = mysqli_real_escape_string($connect, $_POST["B16"]);
		$B15 = mysqli_real_escape_string($connect, $_POST["B15"]);
		$B14 = mysqli_real_escape_string($connect, $_POST["B14"]);
		$B13 = mysqli_real_escape_string($connect, $_POST["B13"]);
		$B12 = mysqli_real_escape_string($connect, $_POST["B12"]);
		$B11 = mysqli_real_escape_string($connect, $_POST["B11"]);	
		$B21 = mysqli_real_escape_string($connect, $_POST["B21"]);
		$B22 = mysqli_real_escape_string($connect, $_POST["B22"]);
		$B23 = mysqli_real_escape_string($connect, $_POST["B23"]);
		$B24 = mysqli_real_escape_string($connect, $_POST["B24"]);
		$B25 = mysqli_real_escape_string($connect, $_POST["B25"]);
		$B26 = mysqli_real_escape_string($connect, $_POST["B26"]);
		$B27 = mysqli_real_escape_string($connect, $_POST["B27"]);
		$B28 = mysqli_real_escape_string($connect, $_POST["B28"]);
		$A48 = mysqli_real_escape_string($connect, $_POST["A48"]);
		$A47 = mysqli_real_escape_string($connect, $_POST["A47"]);
		$A46 = mysqli_real_escape_string($connect, $_POST["A46"]);
		$A45 = mysqli_real_escape_string($connect, $_POST["A45"]);
		$A44 = mysqli_real_escape_string($connect, $_POST["A44"]);
		$A43 = mysqli_real_escape_string($connect, $_POST["A43"]);
		$A42 = mysqli_real_escape_string($connect, $_POST["A42"]);
		$A41 = mysqli_real_escape_string($connect, $_POST["A41"]);
		$A31 = mysqli_real_escape_string($connect, $_POST["A31"]);
		$A32 = mysqli_real_escape_string($connect, $_POST["A32"]);
		$A33 = mysqli_real_escape_string($connect, $_POST["A33"]);
		$A34 = mysqli_real_escape_string($connect, $_POST["A34"]);
		$A35 = mysqli_real_escape_string($connect, $_POST["A35"]);
		$A36 = mysqli_real_escape_string($connect, $_POST["A36"]);
		$A37 = mysqli_real_escape_string($connect, $_POST["A37"]);
		$A38 = mysqli_real_escape_string($connect, $_POST["A38"]);
		$B48 = mysqli_real_escape_string($connect, $_POST["B48"]);
		$B47 = mysqli_real_escape_string($connect, $_POST["B47"]);
		$B46 = mysqli_real_escape_string($connect, $_POST["B46"]);
		$B45 = mysqli_real_escape_string($connect, $_POST["B45"]);
		$B44 = mysqli_real_escape_string($connect, $_POST["B44"]);
		$B43 = mysqli_real_escape_string($connect, $_POST["B43"]);
		$B42 = mysqli_real_escape_string($connect, $_POST["B42"]);
		$B41 = mysqli_real_escape_string($connect, $_POST["B41"]);
		$B31 = mysqli_real_escape_string($connect, $_POST["B31"]);
		$B32 = mysqli_real_escape_string($connect, $_POST["B32"]);
		$B33 = mysqli_real_escape_string($connect, $_POST["B33"]);
		$B34 = mysqli_real_escape_string($connect, $_POST["B34"]);
		$B35 = mysqli_real_escape_string($connect, $_POST["B35"]);
		$B36 = mysqli_real_escape_string($connect, $_POST["B36"]);
		$B37 = mysqli_real_escape_string($connect, $_POST["B37"]);
		$B38 = mysqli_real_escape_string($connect, $_POST["B38"]);
		$A85 = mysqli_real_escape_string($connect, $_POST["A85"]);
		$A84 = mysqli_real_escape_string($connect, $_POST["A84"]);
		$A83 = mysqli_real_escape_string($connect, $_POST["A83"]);
		$A82 = mysqli_real_escape_string($connect, $_POST["A82"]);
		$A81 = mysqli_real_escape_string($connect, $_POST["A81"]);
		$A71 = mysqli_real_escape_string($connect, $_POST["A71"]);
		$A72 = mysqli_real_escape_string($connect, $_POST["A72"]);
		$A73 = mysqli_real_escape_string($connect, $_POST["A73"]);
		$A74 = mysqli_real_escape_string($connect, $_POST["A74"]);
		$A75 = mysqli_real_escape_string($connect, $_POST["A75"]);
		$B85 = mysqli_real_escape_string($connect, $_POST["B85"]);
		$B84 = mysqli_real_escape_string($connect, $_POST["B84"]);
		$B83 = mysqli_real_escape_string($connect, $_POST["B83"]);
		$B82 = mysqli_real_escape_string($connect, $_POST["B82"]);
		$B81 = mysqli_real_escape_string($connect, $_POST["B81"]);
		$B71 = mysqli_real_escape_string($connect, $_POST["B71"]);
		$B72 = mysqli_real_escape_string($connect, $_POST["B72"]);
		$B73 = mysqli_real_escape_string($connect, $_POST["B73"]);
		$B74 = mysqli_real_escape_string($connect, $_POST["B74"]);
		$B75 = mysqli_real_escape_string($connect, $_POST["B75"]);
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE records   
           SET fname='$fname',   
           lname='$lname',   
           mname='$mname',
		   bday='$bday',
		   age='$age',
		   sex='$sex',
		   religion='$religion',
		   nationality='$nationality',
		   nickname='$nickname',
		   homeAddress='$homeAddress',
		   homeNo='$homeNo',
		   occupation1='$occupation1',
		   officeNo='$officeNo',
		   faxNo='$faxNo',
		   dentInsurance='$dentInsurance',
		   mobileNo='$mobileNo',
		   effectiveDate='$effectiveDate',
		   email='$email',
		   parents='$parents',
		   occupation2='$occupation2',
		   prevDr='$prevDr',
		   lastVisit='$lastVisit',
		   physician='$physician',
		   specialty='$specialty',
		   officeAddress='$officeAddress',
		   officeNum='$officeNum',
		   goodHealth='$goodHealth',
		   medTreatment='$medTreatment',
		   medTreatment2='$medTreatment2',
		   illness='$illness',
		   illness2='$illness2',
		   hospitalized='$hospitalized',
		   hospitalized2='$hospitalized2',
		   prescription='$prescription',
		   prescription2='$prescription2',
		   tobacco='$tobacco',
		   alcohol='$alcohol',
		   allergic='$allergic',
		   opt2='$opt2',
		   bleedingTime2='$bleedingTime2',
		   woman1='$woman1',
		   woman2='$woman2',
		   woman3='$woman3',
		   bloodType='$bloodType',
		   bloodPressure='$bloodPressure',
		   A55='$A55',
		   A54='$A54',
		   A53='$A53',
		   A52='$A52',
		   A51='$A51',
		   A61='$A61',
		   A62='$A62',
		   A63='$A63',
		   A64='$A64',
		   A65='$A65',
		   B55='$B55',
		   B54='$B54',
		   B53='$B53',
		   B52='$B52',
		   B51='$B51',
		   B61='$B61',
		   B62='$B62',
		   B63='$B63',
		   B64='$B64',
		   B65='$B65',
		   A18='$A18',
		   A17='$A17',
		   A16='$A16',
		   A15='$A15',
		   A14='$A14',
		   A13='$A13',
		   A12='$A12',
		   A11='$A11',
		   A21='$A21',
		   A22='$A22',
		   A23='$A23',
		   A24='$A24',
		   A25='$A25',
		   A26='$A26',
		   A27='$A27',
		   A28='$A28',
		   B18='$B18',
		   B17='$B17',
		   B16='$B16',
		   B15='$B15',
		   B14='$B14',
		   B13='$B13',
		   B12='$B12',
		   B11='$B11',
		   B21='$B21',
		   B22='$B22',
		   B23='$B23',
		   B24='$B24',
		   B25='$B25',
		   B26='$B26',
		   B27='$B27',
		   B28='$B28',
		   A48='$A48',
		   A47='$A47',
		   A46='$A46',
		   A45='$A45',
		   A44='$A44',
		   A43='$A43',
		   A42='$A42',
		   A41='$A41',
		   A31='$A31',
		   A32='$A32',
		   A33='$A33',
		   A34='$A34',
		   A35='$A35',
		   A36='$A36',
		   A37='$A37',
		   A38='$A38',
		   B48='$B48',
		   B47='$B47',
		   B46='$B46',
		   B45='$B45',
		   B44='$B44',
		   B43='$B43',
		   B42='$B42',
		   B41='$B41',
		   B31='$B31',
		   B32='$B32',
		   B33='$B33',
		   B34='$B34',
		   B35='$B35',
		   B36='$B36',
		   B37='$B37',
		   B38='$B38',	   
		   A85='$A85',
		   A84='$A84',
		   A83='$A83',
		   A82='$A82',
		   A81='$A81',
		   A71='$A71',
		   A72='$A72',
		   A73='$A73',
		   A74='$A74',
		   A75='$A75',
		   B85='$B85',
		   B84='$B84',
		   B83='$B83',
		   B82='$B82',
		   B81='$B81',
		   B71='$B71',
		   B72='$B72',
		   B73='$B73',
		   B74='$B74',
		   B75='$B75'
           WHERE id='".$_POST["employee_id"]."'";  
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
           $select_query = "SELECT * FROM records ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="20%">First Name</th>
						  <th width="20%">Last Name</th> 
						  <th width="20%">Middle Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>
							<th width="15%">Delete</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["fname"] . '</td>
						  <td>' . $row["lname"] . '</td>
						  <td>' . $row["mname"] . '</td> 
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>
						  <td><input class="btn btn-danger" type=button onClick=deleteme('.$row['id'].') name=Delete value=Delete></td>
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
 window.location.href='deleterecord.php?del_id=' +delid+'';
 return true;
 }
 } 
 </script>