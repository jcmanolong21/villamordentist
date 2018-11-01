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
    <title>User Area | Dashboard</title>
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
					<a href="dentalhealth2.php">Dental Health</a>
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
               <a href="myprofile2.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile <span class="badge"><?php ?></span></a>
            
		   </div>
		   </div>
		<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title	">My Profile</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive"> 
                     <div id="employee_table"> 
						<?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>					 
                          <table class="table table-bordered">
								<div align="right">						  
                               <input type="button" name="edit" value="Edit" id="<?php echo $row["user_id"]; ?>" class="btn btn-info btn-xs edit_data" /></br>
							   </div>
							   <tr>
                                    <th width="30%">First Name</th>
									<td><?php echo $row["fname"]; ?></td>
								</tr>
								<tr>
									<th width="30%">Last Name</th>
									<td><?php echo $row["lname"]; ?></td>
								</tr>
								<tr>
									<th width="30%">Contact</th>
									<td><?php echo $row["contact"]; ?></td>
                               </tr> 
								<tr>
									<th width="30%">Date Created</th>
									<td><?php echo $row["date"]; ?></td>
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
                     <h4 class="modal-title">Employee Details</h4>  
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
                     <h4 class="modal-title">My Profile</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>First Name</label>  
                          <input type="text" name="fname" id="fname" class="form-control" />  
                          <br />  
                          <label>Last Name</label>  
                          <input type="text" name="lname" id="lname" class="form-control" /> 
                          <br />
						  <label>Contact</label>  
                          <input type="text" name="contact" id="contact" class="form-control" />
						  </br>
						  <label>Password</label> 
                          <input type="text" name="password1" id="password1" class="form-control" />						  
                          <br />						                       
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
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"modalfetch1.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#fname').val(data.fname);  
                     $('#lname').val(data.lname);
					 $('#contact').val(data.contact); 
                     $('#password1').val(data.password1);  
                     $('#employee_id').val(data.user_id);  
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
			else if($('#contact').val() == '')  
           {  
                alert("Contact No. is required!");  
           }

           else if($('#password1').val() == '')  
           {  
                alert("Passwordt is required!");  
           }  
           else  
           {  
                $.ajax({  
                     url:"modalinsert1.php",  
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
                     url:"modalselect1.php",  
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