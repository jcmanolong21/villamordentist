 <?php  
//index.php
include "cekuser.php";
$connect = mysqli_connect("localhost", "root", "", "lmvillamor");
$query = "SELECT * FROM appointments where username ='{$_SESSION['username']}'";
$result = mysqli_query($connect, $query);
 ?>
<style>
input[type=date]{
	width: 160px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
	
	
  </head>
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
					<a href="dentalhealth2.php">Dental Health</a>
				</li>

				<li class ="active">
					<a href="profile.php">Dashboard</a>
				</li>
          <ul class="nav_bg navbar-right">
            <li><a href="profile.php">Welcome,<span><?php echo $_SESSION['username']; ?></span></a></li>
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
           <li><a href="profile.php">Dashboard</a></li>
          <li class="active">My Appointments</li>
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
               <a href="myprofile2.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile <span class="badge"><?php ?></span></a>
            
		   </div>

            
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title	">My Appointments</h3>
              </div> 
           <div class="container" style="width:100%">  
                <br />  
                <div class="table-responsive">    
                     <br />  
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="30%"><center>Type of Appointment</th>  
                                    <th width="15%"><center>Edit</th>  
                                    <th width="15%"><center>View</th>
									<th width="15%"><center>Delete</th>
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><center><?php echo $row["type"]; ?></center></td>  
                                    <td><center><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></center></td>  
                                    <td><center><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></center></td>
									<td><?php echo '<input class="btn btn-danger" type=button onClick=deleteme('.$row['id'].') name=Delete value=DELETE>'?></td>									
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Appointment Details</h4>  
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
                     <h4 class="modal-title">Edit Appointment Information</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>First Name</label>  
                          <input type="text" name="fname" id="fname" class="form-control" />  
                          <br />  
                          <label>Last Name</label>  
                          <input type ="text" name="lname" id="lname" class="form-control"/>
                          <br />
						  <label>Middle Name</label>  
                          <input type ="text" name="mname" id="mname" class="form-control"/> 
                          <br />
							<label>Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br /> 						  
                          <label>Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />
						  <label>Type of Appointment</label>  
                          <select name="type" id="type" class="form-control">  
                               <option value="Dental Cleaning">Dental Cleaning</option>  
                               <option value="Tooth Extraction">Tooth Extraction</option>
							   <option value="Pasta">Pasta</option>
							   <option value="Dental Braces">Dental Braces</option>
							   <option value="Dental Retainers">Dental Retainers</option> 
                          </select>  
                          <br />
                         <label>Date of Appointment</label></br>
                          <input type="date" name="date" id="date"/>  
                          <br /> 
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
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
 if(confirm("Cancel Appointment?")){
 window.location.href='deleteapp.php?del_id=' +delid+'';
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
                url:"modalfetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#fname').val(data.fname);  
                     $('#lname').val(data.lname);
					 $('#mname').val(data.mname);
					 $('#age').val(data.age);
                     $('#gender').val(data.gender);  
                     $('#type').val(data.type);
					 $('#date').val(data.date);
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
                alert("First Name is required!");  
           }  
           else if($('#lname').val() == '')  
           {  
                alert("Last Name is required!");  
           }
			else if($('#mname').val() == '')  
           {  
                alert("Middle Name is required!");  
           }
			else if($('#age').val() == '')  
           {  
                alert("Age is required!");  
           } 		   
           else if($('#gender').val() == '')  
           {  
                alert("Gender is required!");  
           }  
           else if($('#type').val() == '')  
           {  
                alert("Type of Appointment is required!");  
           }  
		   else if($('#date').val() == '')  
           {  
                alert("Type of Appointment is required!");  
           }
           else  
           {  
                $.ajax({  
                     url:"modalinsert.php",  
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
                     url:"modalselect.php",  
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