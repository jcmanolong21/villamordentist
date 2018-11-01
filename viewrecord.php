<?php
include('cekadmin.php');
$connect=mysqli_connect("localhost", "root", "", "lmvillamor");

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
                <h3 class="panel-title"> Account</h3>
              </div>
              <div class="panel-body">
                
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
<table id = "employee_table">
<a class ="btn btn-default"href ="treatmentrecords.php">Back</a></br></br>
<?php
if(isset($_GET['t_id']))
{
$id=$_GET['t_id'];
$conn=mysqli_connect("localhost", "root", "", "lmvillamor");

$query1=mysqli_query($conn, "SELECT * from t_records WHERE t_id ='$id'");
$row = mysqli_num_rows($query1);	

while($query2=mysqli_fetch_array($query1)){
	
echo "<tr>";
echo '<td width ="40%">' . $query2['name'] . '</td>'; echo '<td width ="10%">' . $query2['age'] . '</td>'; echo '<td width ="10%">' . $query2['gender'] . '</td>'; 

echo "</tr>";
}
}

if(isset($_POST['btnSubmit'])){
 $conn = mysqli_connect("localhost", "root", "", "lmvillamor");
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
			
 {
	 $date =$_POST['t_date'];
	 $toothNo=$_POST['toothNo'];
	 $procedure=$_POST['t_procedure'];
	 $dentist=$_POST['dentists'];
	 $amountCharged=$_POST['amountCharged'];
	 $amountPaid=$_POST['amountPaid'];
	 $balance=$_POST['balance'];

		   if (empty($_POST['date'])) {
		echo "<script type='text/javascript'>alert('Name is required!')</script>";
		exit();
			}

			else{
	$sql="insert into t_records values('".mysqli_real_escape_string($conn, $date)."','".mysqli_real_escape_string($conn, $toothNo)."',
	 '".mysqli_real_escape_string($conn, $procedure)."','".mysqli_real_escape_string($conn, $dentist)."','".mysqli_real_escape_string($conn, $amountCharged)."',
	 '".mysqli_real_escape_string($conn, $amountPaid)."','".mysqli_real_escape_string($conn, $balance)."')";
	 mysqli_query($conn,$sql) or trigger_error(mysqli_error($conn));
			echo "<script type='text/javascript'>success('Record successfuly submitted!')</script>";
			echo '<script>window.location= "treatmentrecords.php"</script>';
			exit();
			}
		mysqli_close($conn);

	 }
}

?>
</table>

<form method ="post">
                <table class="table table-striped table-hover">
					                    <tr>
						<b>Date</b></br><input type ="date" name ="t_date"></br>
						<b>Tooth No.</b></br><input type ="number" name ="toothNo"></br>
						<b>Procedure</b></br><textarea name="t_procedure" placeholder="procedure"></textarea></br>
						<b>Dentists</b></br><input type ="text" name ="dentists" placeholder ="Dentists"></br>
						<b>Amount Charged</b></br><input type ="text" name ="amountCharged"></br>
						<b>Amount Paid</b></br><input type ="text" name ="amountPaid"></br>
						<b>Balance</b></br><input type ="text" name ="balance"></br>
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