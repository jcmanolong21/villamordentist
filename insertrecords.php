<?php
				$conn=mysqli_connect("localhost","root","","lmvillamor");
					$query1 = "SELECT COUNT(*) c FROM records";
					$resulted = mysqli_query($conn,$query1);
					$row1 = mysqli_fetch_assoc($resulted);	
					?> 
 <style>
div.ex1 {
    width: 100%;
    height: 500px;
    overflow: scroll;
}
table {
    table-layout:fixed;
    border-collapse: collapse;
 
 }

  #customers {
    font-family: "Trebuchet MS";
    border-collapse: collapse;
    width: 100%;
	
}

#customers td, #customers th {
    border: 1px solid #ddd;
	text-align:center;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: hsla(9, 100%, 64%, 1);
    color: white;
}

</style>
<style> 
input[type=search] {
    width: 230px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url(search.png);
	background-size:45px;
    background-position: 5px 5px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=search]:focus {
	height:45px;
    width: 50%;
}
</style> 
 <form action ="search_record.php" method ="post" />
		<input type="search"  placeholder = "First Name, Last Name, Middle Name" name ="search"/>
		<button class ="btn btn-success btn-xs">search</button></br>
		</form>
		<div align="right">
		<a href="addrecord.php"><button class="btn btn-warning btn-xs ">Add Records</button></a>
		</div>
		<center><?php echo "<b>Total number of records data:</b>" ,$row1['c']; ?></center>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $fname = mysqli_real_escape_string($connect, $_POST["fname"]);  
      $lname = mysqli_real_escape_string($connect, $_POST["lname"]);  
      $mname = mysqli_real_escape_string($connect, $_POST["mname"]);  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE records   
           SET fname='$fname',   
           lname='$lname',   
           mname='$mname'  
           WHERE id='".$_POST["employee_id"]."'";  
         echo " <script type='text/javascript'>alert('Data Updated!')</script>";
      }  
      else  
      {  
           $query = "  
           INSERT INTO records(fname, lname, mname)  
           VALUES('$fname', '$lname', '$mname');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM records ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered" id ="customers">  
                     <tr>  
                          <th width="20%">First Name</th>
									<th width="20%">Last Name</th> 
									<th width="20%">Middle Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
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
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>