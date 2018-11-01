<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "lmvillamor");
if(!empty($_POST))
{

    if(mysqli_query($connect, $query))
    {
     $select_query = "SELECT * FROM appointments ORDER BY app_id DESC";
     $result = mysqli_query($connect, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="70%">Employee Name</th>  
                         <th width="30%">View</th>  
                    </tr>

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["fname"] . '</td>  
                         <td><input type="button" name="view" value="view" app_id="' . $row["app_id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                    </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}
?>