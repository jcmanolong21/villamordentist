<?php
include('cekadmin.php');
$conn=mysqli_connect("localhost","root","","lmvillamor");

  $query = "SELECT * FROM users";
  $result = mysqli_query($conn, $query);
  	$query1 = "SELECT COUNT(*) c FROM users";
$resulted = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($resulted);

  $query1 = "SELECT * FROM appointments";
  $result = mysqli_query($conn, $query);
  	$query2 = "SELECT COUNT(*) c FROM appointments";
$resulted1 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($resulted1);

  $query3 = "SELECT * FROM records";
  $result = mysqli_query($conn, $query);
  	$query4 = "SELECT COUNT(*) c FROM records";
$resulted2 = mysqli_query($conn,$query4);
$row3 = mysqli_fetch_assoc($resulted2);

  $query4 = "SELECT * FROM t_records";
  $result = mysqli_query($conn, $query);
  	$query5 = "SELECT COUNT(*) c FROM t_records";
$resulted3 = mysqli_query($conn,$query5);
$row4 = mysqli_fetch_assoc($resulted3);


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
					<a href="dentalhealth.php">Dental Health</a>
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
              <a href="records.php" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Records <span class="badge"><?php ?></span></a>
			  <a href="treatmentrecords.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Treatment Records <span class="badge"><?php ?></span></a>
			  <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"><?php ?></span></a>
			  <a href="calendar.php" class="list-group-item"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendar <span class="badge"></span></a>
			  <a href="account.php" class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Account <span class="badge"></span></a>
           
		   </div>

            
          </div>
         <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title	">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="text-danger"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $row1['c'];?></h2>
                    <h4 class="text-danger">Users</h4>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="text-warning"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $row2['c']; ?></h2>
                    <h4 class="text-warning">Appointments</h4>
                  </div>
                </div>
               
			   <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="text-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <?php echo $row3['c']; ?></h2>
                    <h4 class="text-success">Records</h4>
                  </div>
                </div>
				
				<div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="text-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo $row4['c']; ?></h2>
                    <h4 class="text-info">Treatment Records</h4>
                  </div>
                </div>
                
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Appointments Added</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                      
	<th>First Name</th>
	<th>Last Name</th>
	<th>Middle Name</th>
	<th>Age</th>
	<th>Type of Appointment</th>

<?php
$conn=mysqli_connect("localhost","root","","lmvillamor");
  $query = "SELECT id, fname,lname,mname,age,type FROM appointments ORDER BY id DESC LIMIT 0,10;";
  $result = mysqli_query($conn, $query);

while($rows=mysqli_fetch_array($result)){
	echo "<tr>";

echo '<td>' . $rows['fname'] . '</td>';

echo '<td>' . $rows['lname'] . '</td>';	

echo '<td>' . $rows['mname'] . '</td>';	

echo '<td>' . $rows['age'] . '</td>';

echo '<td>' . $rows['type'] . '</td>';

}

?>
</table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  
<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Appointment Information</h4>
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
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#address').val() == '')  
  {  
   alert("Address is required");  
  }  
  else if($('#designation').val() == '')
  {  
   alert("Designation is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert.php",  
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
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
});  
 </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
 
function addmsg(type, msg){
 
$('#notification_count').html(msg);
 
}
 
 function cutmsg(type, msg1){
 
$('#notification_count').html(msg1);
 
}
 function removeNotification(){
$.ajax({
type: "GET",
url: "remove.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
cutmsg("new", data);
setTimeout(
waitForMsg,
1000
);
}
});
 }
function waitForMsg(){
 
$.ajax({
type: "GET",
url: "selectnotif.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg("new", data);
setTimeout(
waitForMsg,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg,
15000);
}
});
};
 
$(document).ready(function(){
 
waitForMsg();
 
});
 
</script>
 </body>  
</html>  