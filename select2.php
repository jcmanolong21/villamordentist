<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");
 $query = "SELECT * FROM appointments WHERE app_id = '".$_POST["employee_id"]."'";
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
            <td width="30%"><label>Gender</label></td>  
            <td width="70%">'.$row["gender"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Age</label></td>  
            <td width="70%">'.$row["age"].'</td>  
        </tr>
		<tr>  
            <td width="30%"><label>Date Submitted</label></td>  
            <td width="70%">'.$row["date"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>