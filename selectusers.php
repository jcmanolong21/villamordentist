<?php  
//select.php  
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
            <td width="30%"><label>Username</label></td>  
            <td width="70%">'.$row["username"].'</td>  
        </tr>
     <tr>  
            <td width="30%"><label>First Name</label></td>  
            <td width="70%">'.$row["fname"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Last Name</label></td>  
            <td width="70%">'.$row["lname"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Contact No.</label></td>  
            <td width="70%">'.$row["contact"].'</td>  
        </tr>
		 <tr>  
            <td width="30%"><label>Date Created</label></td>  
            <td width="70%">'.$row["date"].'</td>  
        </tr>

     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>