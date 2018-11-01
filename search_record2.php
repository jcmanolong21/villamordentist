 <?php  
include('cekadmin.php');
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 $query = "SELECT * FROM records ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
	
	
  </head>
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

  <body>

    <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
          <div class="nav_bg">
		<div class="wrap">
			<ul class="nav">
				<li>
					<a href="index1.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="staff.php">Staff</a>
				</li>
				<li>
					<a href="#">Dental Health</a>
				</li>

				<li class ="active">
					<a href="profileadmin.php">Dashboard</a>
				</li>
          <ul class="nav_bg navbar-right">
            <li><a href="profileadmin.php">Welcome,<span><?php echo $_SESSION['username']; ?></span></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
		  </ul>
		  <div class="clear"></div>
		  	</div>
	</div> 
</nav>
    
	</br>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>
	<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="profileadmin.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
				
              <a href="appointment2.php" class ="list-group-item"id="notificationLink" onclick = "removeNotification()"><span class="glyphicon glyphicon-list-alt"
			  aria-hidden="true"></span> Appointments <span class ="badge" id="notification_count"></span></a>
			  <a href="records.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Records <span class="badge"><?php ?></span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"><?php ?></span></a>
			  <a href="#.php" class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Account <span class="badge"></span></a>
           
		   </div>
		   </div>
		<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title	">Records</h3>
              </div>
              <div class="panel-body">
     
		<div class ="form">
		<a class ="btn btn-success"href ="records.php">Back</a></br>
		<form action ="search_record.php" method ="post" />
		<input type = "search" placeholder = "First Name, Last Name, Middle Name" name ="search"/>
		<button class ="btn btn-success btn-xs">search</button></br>
		</form>
            <thead>
     	<div class='ex1'>
      <table class='table table-bordered' id ='customers'>  
           <tr>  
               <th width ='20%'>First Name</th>
					<th width ='20%'>Last Name</th>
					<th width ='20%'>Middle Name</th>
					<th width ='15%'>Edit</th>
					<th width ='15%'>View</th>
           </tr>
            </thead>
            <tbody>
			
<?php
$conn=mysqli_connect("localhost","root","","lmvillamor");
if(isset($_POST['search'])){
$get = $_POST['search'];
if($get){
$show = "SELECT id, fname,lname,mname FROM records WHERE (fname LIKE '%$get%' OR lname LIKE '%$get%' OR mname LIKE '%$get%') ORDER BY id DESC";
$result=mysqli_query($conn,$show);

$query1 = "SELECT COUNT(*) c FROM records WHERE (fname LIKE '%$get%' OR lname LIKE '%$get%' OR mname LIKE '%$get%') ORDER BY id DESC";
$resulted = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($resulted);

echo "<center>";
echo "<b>Total number of search query: </b>" ,$row1['c'];
echo "</center>";

while($rows=mysqli_fetch_array($result)){
	echo "<tr>";


				echo '<td>'.$rows["fname"].'</td>';
				echo '<td>'.$rows["lname"].'</td>';
				echo '<td>'.$rows["mname"].'</td>';
				echo '<td><input type="button" name="edit" value="Edit" id="' .$rows["id"].'" class="btn btn-info btn-xs edit_data" /></td>';
				echo '<td><input type="button" name="view" value="View" id="' .$rows["id"].'" class="btn btn-info btn-xs view_data" /></td>'; 

		echo "</tr>";

}
}
}

?>
              
            </tbody>
        </table>
        
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PATIENT INFORMATION RECORD</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PATIENT INFORMATION RECORD</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>First Name</label>  
                          <input type="text" name="fname" id="fname" class="form-control" />  
                          <br />  
                          <label>Last Name</label>  
                          <input type ="text" name="lname" id="lname" class="form-control">
                          <br />  
                          <label>Middle Name</label>
						  <input type="text" name="mname" id="mname" class="form-control"> </br>
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetchrecords1.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#fname').val(data.fname);  
                     $('#lname').val(data.lname);  
                     $('#mname').val(data.mname);   
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#fname').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#lname').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#mname').val() == '')  
           {  
                alert("Designation is required");  
           }  
 
           else  
           {  
                $.ajax({  
                     url:"insertrecords1.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"selectrecords1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>
    <!-- Modals -->

  
  </body>
</html>