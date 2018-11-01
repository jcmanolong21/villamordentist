<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Notes</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("dataID");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>

    <!-- Modals -->

    <!-- Add Page -->

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "root", "", "research");  
 $record_per_page = 50;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT dataID, companyName,add1,add2,contactNo,indicator,alternative,email,industry,postCode,townCities,country,addNote,urlSource,
 conTitle,conForname,conSurname,conPosition,keyword,username,DATE_FORMAT(date, '%M %d,%Y %h:%i %p') AS date FROM research  ORDER BY dataID DESC  LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
 $output .= "
	<div class='ex1'>
      <table class='table table-bordered' id ='customers'>  
           <tr>  
               <th width ='200'>Company Name</th>
					<th width ='200'>Address1</th>
					<th width ='200'>Address2</th>
					<th width ='200'>Town</th>
					<th width ='150'>Country</th>
					<th width ='150'>Postcode</th>
					<th width ='120'>Phone</th>
					<th width ='200'>Indicator</th>
					<th width ='200'>Alternative_No</th>
					<th width ='150'>Email</th>
					<th width ='200'>Industry</th>
					<th width ='100'>Notes</th>
					<th width ='200'>Contact Title</th>
					<th width ='200'>Contact Forename</th>
					<th width ='200'>Contact Surname</th>
					<th width ='200'>Contact Position</th>
					<th width ='100'>Keyword</th>
					<th width ='160'>Date Worked</th>
					<th width ='120'>Lead Source</th>
					<th width ='100'>Researcher</th>
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["companyName"].'</td>
				<td>'.$row["add1"].'</td>
				<td>'.$row["add2"].'</td>
				<td>'.$row["townCities"].'</td>
				<td>'.$row["country"].'</td>				
                <td>'.$row["postCode"].'</td>
                <td>'.$row["contactNo"].'</td>
				<td>'.$row["indicator"].'</td>
				<td>'.$row["alternative"].'</td>
                <td>'.$row["email"].'</td>
				<td>'.$row["industry"].'</td>
				<td><input type="button" name="view" value="View" dataID="' .$row['dataID'].' "class="btn btn-info btn-xs view_data"></td>
				<td>'.$row["conTitle"].'</td>
				<td>'.$row["conForname"].'</td>
				<td>'.$row["conSurname"].'</td>
				<td>'.$row["conPosition"].'</td>
				<td>'.$row["keyword"].'</td>
				<td>'.$row["date"].'</td>
			    <td><a href="'.$row['urlSource']. '" target="_blank">https//:www..</a></td>
				<td>'.$row["username"].'</td>
           </tr>  
		   </div>
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM research ORDER BY dataID desc";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>
 </body>
</html>