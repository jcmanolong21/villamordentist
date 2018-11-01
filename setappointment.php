<?php
include('cekuser.php');
$connect=mysqli_connect("localhost", "root", "", "lmvillamor");

?>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=date]{
	width: 150px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color: #45a049;
}


</style>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Add Research</title>
    <!-- Bootstrap core CSS -->
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
          <li><a href="profile.php">Dashboard</a></li>
          <li class="active">Set Appointment</li>
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
                <h3 class="panel-title">Fill-up Form</h3>
				
              </div>
			  
              <div class="panel-body">
                
				<form method ="post">
                <table class="table table-striped table-hover">
					                    <tr>
										
										<input type="hidden" name="id" value="<?php echo $app_id; ?>">
				
						<div ondblclick="document.getElementById('username').disabled=false;">
						<input type="hidden" name ="username"id="username" value="<?php echo $_SESSION['username']; ?>" readonly="readonly"></div>
						<b>First Name</b></br><input type ="text" name ="fname" placeholder ="First Name"></br>
						<b>Last Name</b></br><input type ="text" name ="lname" placeholder ="Last Name"></br>
						<b>Middle Name</b></br><input type ="text" name ="mname" placeholder ="Middle Name"></br>
						<b>Age</b></br><input type ="text" name ="age" placeholder ="Age"></br>
						<b>Gender</b></br>
						<select name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select></br>
						</br><b>Type of Appointment</b></br>
						<select name="type" placeholder ="...">
						<option value="Dental Cleaning">Dental Cleaning</option>
						<option value="Tooth Extraction">Tooth Extraction</option>
						<option value="Pasta">Pasta</option>
						<option value="Dental Braces">Dental Braces</option>
						<option value="Dental Retainers">Dental Retainers</option>
						</select></br>
						</br><b>Date of appointment</b></br>
						<input type ="date" name ="date">
						<div ondblclick="document.getElementById('status').disabled=false;">
						<input type="hidden" name ="status"id="status" value="<?php echo $status; ?>" readonly="readonly"></div>
						</br><input type ="submit" name ="btnSubmit" value ="Submit">
				</form>
                    </table>
              </div>
              </div>
	
          </div>
        </div>
      </div>
    </section>
    <!-- Modals -->
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
url: "removepost.php",
 
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
url: "postnotif.php",
 
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
    <!-- Add Page -->

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
if(isset($_POST['btnSubmit'])){
 $conn = mysqli_connect("localhost", "root", "", "lmvillamor");
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
			
 {
	 $app_id=$_POST['id'];
	 $id=$_POST['username'];
	 $fname=$_POST['fname'];
	 $lname=$_POST['lname'];
	 $mname=$_POST['mname'];
	 $age=$_POST['age'];
	 $gender=$_POST['gender'];
	 $type=$_POST['type'];
	 $date =$_POST['date'];
     $status='unread';
	 


		   if ( empty($_POST['fname']) || empty($_POST['lname']) ||
				empty($_POST['mname']) || empty($_POST['age']) ||
			empty($_POST['gender']) || empty($_POST['type'])) {
		echo "<script type='text/javascript'>alert('Input remaining fields!')</script>";
		exit();
			}

			else{
	$sql="insert into appointments values('$app_id','$id','".mysqli_real_escape_string($conn, $fname)."','".mysqli_real_escape_string($conn, $lname)."','".mysqli_real_escape_string($conn, $mname)."',
	 '".mysqli_real_escape_string($conn, $age)."','".mysqli_real_escape_string($conn, $gender)."','".mysqli_real_escape_string($conn, $type)."','".mysqli_real_escape_string($conn, $date)."','$status')";
	 mysqli_query($conn,$sql) or trigger_error(mysqli_error($conn));
			echo "<script type='text/javascript'>success('Appointment successfuly submitted!')</script>";
			echo '<script>window.location= "myappointments2.php"</script>';
			exit();
			}
		mysqli_close($conn);

	 }
}
?>