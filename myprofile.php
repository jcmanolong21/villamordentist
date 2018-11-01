 <?php  
include('cekuser.php');
 $connect = mysqli_connect("localhost", "root", "", "lmvillamor");  
 $query = "SELECT * FROM users where username= '{$_SESSION['username']}'"; 
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

  #employee_table {
    font-family: "Trebuchet MS";
    border-collapse: collapse;
    width: 100%;
	
}

#employee_table td, #employee_table th {
    border: 1px solid #ddd;
	text-align:center;
    padding: 8px;
}

#employee_table tr:nth-child(even){background-color: #f2f2f2;}

#employee_table tr:hover {background-color: #ddd;}

#employee_table th {
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
					<a href="index2.php">Home</a>
				</li>
				<li>
					<a href="about2.php">About</a>
				</li>
				<li>
					<a href="staff2.php">Staff</a>
				</li>
				<li>
					<a href="#">Dental Health</a>
				</li>

				<li class ="active">
					<a href="profile.php">Dashboard</a>
				</li>
          <ul class="nav_bg navbar-right">
            <li><a href="profile.php">Welcome, <span><?php echo $_SESSION['username']; ?></span></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
		  </ul>
		  <div class="clear"></div>
        </div><!--/.nav-collapse -->
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
              <a href="profile.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
			  
             <a href="setappointment.php" class ="list-group-item"><span class="glyphicon glyphicon-list-alt"
			  aria-hidden="true"></span> Set Appointment </a>
				<a href="myappointments2.php" class ="list-group-item"><span class="glyphicon glyphicon-list-alt"
			  aria-hidden="true"></span> My Appointment </a>
               <a href="myprofile.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile <span class="badge"><?php ?></span></a>
            
		   </div>
		   </div>
		<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title	">Records</h3>
              </div>
              <div class="panel-body">
     <?php
				$conn=mysqli_connect("localhost","root","","lmvillamor");
					$query1 = "SELECT COUNT(*) c FROM records";
					$resulted = mysqli_query($conn,$query1);
					$row1 = mysqli_fetch_assoc($resulted);	
					?>
		<div class ="form">
		<form action ="search_record.php" method ="post" />
		<input type = "search" placeholder = "First Name, Last Name, Middle Name" name ="search"/>
		<button class ="btn btn-success btn-xs">search</button></br>
		</form>
		<div align="right">
							<a href="addrecord2.php"><button class="btn btn-warning btn-xs ">Add Records</button></a>
							</div>
							<center><?php echo "<b>Total number of records data:</b>" ,$row1['c']; ?></center>
            <thead>
     	<div class='ex1'>
      <table class='table table-bordered' id ='employee_table'>  
	  
           <tr>  
               <th width ='20%'>First Name</th>
					<th width ='20%'>Last Name</th>
					<th width ='20%'>Middle Name</th>
					<th width ='15%'>Edit</th>
					<th width ='15%'>View</th>
					<th width ='15%'>Delete</th>
           </tr>
		   <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               
                               	echo "<tr>";
								echo '<td>'.$row["fname"].'</td>';
								echo '<td>'.$row["lname"].'</td>';
								echo '<td>'.$row["mname"].'</td>';
								echo '<td><input type="button" name="edit" value="Edit" id="' .$row["user_id"].'" class="btn btn-info btn-xs edit_data" /></td>';
								
								echo "</tr>"; 
                             
                               }  
                               ?> 
            </thead>
        </table>
        
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">BASIC INFORMATION RECORD</h4>  
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
                          <label><b>First Name</label></br>						  
                          <input type="text" name="fname" id="fname" class="form-control" />  
						  <input type ="text" name="lname" id="lname" size ="20">&emsp;
						  <input type ="text" name="mname" id="mname" size="20"></br></br>
						  
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
 <script language="javascript">
 function deleteme(delid)
 {
 if(confirm("Delete Record?")){
 window.location.href='deleterecord.php?del_id=' +delid+'';
 return true;
 }
 } 
 </script> 
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetchrecords2.php",  
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
                alert("First Name is required");  
           }  
           else if($('#lname').val() == '')  
           {  
                alert("Last Name is required");  
           }  
           else if($('#mname').val() == '')  
           {  
                alert("Middle Name is required");  
           }  
		   else if($('#bday').val() == '')  
           {  
                alert("Birthdate is required");  
           }
 
           else  
           {  
                $.ajax({  
                     url:"insertrecords2.php",  
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
                     url:"selectrecords2.php",  
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