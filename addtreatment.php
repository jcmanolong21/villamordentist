<?php
include('cekadmin.php');
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
	width: 160px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number]{
	width: 160px;
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
                <h3 class="panel-title">Treatment Record</h3>
				
              </div>
			  
              <div class="panel-body">
                
				<form method ="post">
                <table class="table table-striped table-hover">
					                    <tr>
										
						<input type="hidden" name="t_id" value="<?php echo $app_id; ?>">
						<b>Name</b></br><input type ="text" name ="name" placeholder ="Full Name"></br>
						<b>Age</b></br><input type ="text" name ="age" placeholder ="Age"></br>
						<b>Gender</b></br>
						<select name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select></br>
						<b>Date</b></br><input type ="date" name ="t_date"></br>
						<b>Tooth No.</b></br><input type ="number" name ="toothNo"></br>
						<b>Procedure</b></br><input type="text" name="t_procedure" placeholder="Procedure"></br>
						<b>Dentists</b></br><input type ="text" name ="dentists" placeholder ="Dentists"></br>
						<b>Amount Charged</b></br><input type ="text" name ="amountCharged"></br>
						<b>Amount Paid</b></br><input type ="text" name ="amountPaid"></br>
						<b>Balance</b></br><input type ="text" name ="balance"></br>
						
						<input type="hidden" name="t_date2" value="<?php echo $date2; ?>">
						<input type="hidden" name="toothNo2" value="<?php echo $toothNo2; ?>">
						<input type="hidden" name="t_procedure2" value="<?php echo $procedure2; ?>">
						<input type="hidden" name="dentists2" value="<?php echo $dentists; ?>">
						<input type="hidden" name="amountCharged2" value="<?php echo $amountCharged2; ?>">
						<input type="hidden" name="amountPaid2" value="<?php echo $amountPaid2; ?>">
						<input type="hidden" name="balance2" value="<?php echo $balance2; ?>">
						
						<input type="hidden" name="t_date3" value="<?php echo $date3; ?>">
						<input type="hidden" name="toothNo3" value="<?php echo $toothNo3; ?>">
						<input type="hidden" name="t_procedure3" value="<?php echo $procedure3; ?>">
						<input type="hidden" name="dentists3" value="<?php echo $dentists; ?>">
						<input type="hidden" name="amountCharged3" value="<?php echo $amountCharged3; ?>">
						<input type="hidden" name="amountPaid3" value="<?php echo $amountPaid3; ?>">
						<input type="hidden" name="balance3" value="<?php echo $balance3; ?>">
						
						<input type="hidden" name="t_date4" value="<?php echo $date4; ?>">
						<input type="hidden" name="toothNo4" value="<?php echo $toothNo4; ?>">
						<input type="hidden" name="t_procedure4" value="<?php echo $procedure4; ?>">
						<input type="hidden" name="dentists4" value="<?php echo $dentist4; ?>">
						<input type="hidden" name="amountCharged4" value="<?php echo $amountCharged4; ?>">
						<input type="hidden" name="amountPaid4" value="<?php echo $amountPaid4; ?>">
						<input type="hidden" name="balance4" value="<?php echo $balance4; ?>">
						
						<input type="hidden" name="t_date5" value="<?php echo $date5; ?>">
						<input type="hidden" name="toothNo5" value="<?php echo $toothNo5; ?>">
						<input type="hidden" name="t_procedure5" value="<?php echo $procedure5; ?>">
						<input type="hidden" name="dentists5" value="<?php echo $dentist5; ?>">
						<input type="hidden" name="amountCharged5" value="<?php echo $amountCharged5; ?>">
						<input type="hidden" name="amountPaid5" value="<?php echo $amountPaid5; ?>">
						<input type="hidden" name="balance5" value="<?php echo $balance5; ?>">
						
						<input type="hidden" name="t_date6" value="<?php echo $date6; ?>">
						<input type="hidden" name="toothNo6" value="<?php echo $toothNo6; ?>">
						<input type="hidden" name="t_procedure6" value="<?php echo $procedure6; ?>">
						<input type="hidden" name="dentists6" value="<?php echo $dentists; ?>">
						<input type="hidden" name="amountCharged6" value="<?php echo $amountCharged6; ?>">
						<input type="hidden" name="amountPaid6" value="<?php echo $amountPaid6; ?>">
						<input type="hidden" name="balance6" value="<?php echo $balance6; ?>">
						
						<input type="hidden" name="t_date7" value="<?php echo $date7; ?>">
						<input type="hidden" name="toothNo7" value="<?php echo $toothNo7; ?>">
						<input type="hidden" name="t_procedure7" value="<?php echo $procedure7; ?>">
						<input type="hidden" name="dentists7" value="<?php echo $dentist7; ?>">
						<input type="hidden" name="amountCharged7" value="<?php echo $amountCharged7; ?>">
						<input type="hidden" name="amountPaid7" value="<?php echo $amountPaid7; ?>">
						<input type="hidden" name="balance7" value="<?php echo $balance7; ?>">
						
						<input type="hidden" name="t_date8" value="<?php echo $date8; ?>">
						<input type="hidden" name="toothNo8" value="<?php echo $toothNo8; ?>">
						<input type="hidden" name="t_procedure8" value="<?php echo $procedure8; ?>">
						<input type="hidden" name="dentists8" value="<?php echo $dentist8; ?>">
						<input type="hidden" name="amountCharged8" value="<?php echo $amountCharged8; ?>">
						<input type="hidden" name="amountPaid8" value="<?php echo $amountPaid8; ?>">
						<input type="hidden" name="balance8" value="<?php echo $balance8; ?>">
						
						<input type="hidden" name="t_date9" value="<?php echo $date9; ?>">
						<input type="hidden" name="toothNo9" value="<?php echo $toothNo9; ?>">
						<input type="hidden" name="t_procedure9" value="<?php echo $procedure9; ?>">
						<input type="hidden" name="dentists9" value="<?php echo $dentist9; ?>">
						<input type="hidden" name="amountCharged9" value="<?php echo $amountCharged9; ?>">
						<input type="hidden" name="amountPaid9" value="<?php echo $amountPaid9; ?>">
						<input type="hidden" name="balance9" value="<?php echo $balance9; ?>">
						
						<input type="hidden" name="t_date10" value="<?php echo $date10; ?>">
						<input type="hidden" name="toothNo10" value="<?php echo $toothNo10; ?>">
						<input type="hidden" name="t_procedure10" value="<?php echo $procedure10; ?>">
						<input type="hidden" name="dentists10" value="<?php echo $dentist10; ?>">
						<input type="hidden" name="amountCharged10" value="<?php echo $amountCharged10; ?>">
						<input type="hidden" name="amountPaid10" value="<?php echo $amountPaid10; ?>">
						<input type="hidden" name="balance10" value="<?php echo $balance10; ?>">
						
						
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
<?php
if(isset($_POST['btnSubmit'])){
 $conn = mysqli_connect("localhost", "root", "", "lmvillamor");
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
			
 {
	 $app_id=$_POST['t_id'];
	 $name=$_POST['name'];
	 $age=$_POST['age'];
	 $gender=$_POST['gender'];
	 $date =$_POST['t_date'];
	 $toothNo=$_POST['toothNo'];
	 $procedure=$_POST['t_procedure'];
	 $dentist=$_POST['dentists'];
	 $amountCharged=$_POST['amountCharged'];
	 $amountPaid=$_POST['amountPaid'];
	 $balance=$_POST['balance'];
	 
	 $date2 =$_POST['t_date2'];
	 $toothNo2=$_POST['toothNo2'];
	 $procedure2=$_POST['t_procedure2'];
	 $dentist2=$_POST['dentists2'];
	 $amountCharged2=$_POST['amountCharged2'];
	 $amountPaid2=$_POST['amountPaid2'];
	 $balance2=$_POST['balance2'];
	 
	 $date3 =$_POST['t_date3'];
	 $toothNo3=$_POST['toothNo3'];
	 $procedure3=$_POST['t_procedure3'];
	 $dentist3=$_POST['dentists3'];
	 $amountCharged3=$_POST['amountCharged3'];
	 $amountPaid3=$_POST['amountPaid3'];
	 $balance3=$_POST['balance3'];
	 
	 $date4 =$_POST['t_date4'];
	 $toothNo4=$_POST['toothNo4'];
	 $procedure4=$_POST['t_procedure4'];
	 $dentist4=$_POST['dentists4'];
	 $amountCharged4=$_POST['amountCharged4'];
	 $amountPaid4=$_POST['amountPaid4'];
	 $balance4=$_POST['balance4'];
	 
	 $date5 =$_POST['t_date5'];
	 $toothNo5=$_POST['toothNo5'];
	 $procedure5=$_POST['t_procedure5'];
	 $dentist5=$_POST['dentists5'];
	 $amountCharged5=$_POST['amountCharged5'];
	 $amountPaid5=$_POST['amountPaid5'];
	 $balance5=$_POST['balance5'];
	 
	 $date6 =$_POST['t_date6'];
	 $toothNo6=$_POST['toothNo6'];
	 $procedure6=$_POST['t_procedure6'];
	 $dentist6=$_POST['dentists6'];
	 $amountCharged6=$_POST['amountCharged6'];
	 $amountPaid6=$_POST['amountPaid6'];
	 $balance6=$_POST['balance6'];
	 
	 $date7 =$_POST['t_date7'];
	 $toothNo7=$_POST['toothNo7'];
	 $procedure7=$_POST['t_procedure7'];
	 $dentist7=$_POST['dentists7'];
	 $amountCharged7=$_POST['amountCharged7'];
	 $amountPaid7=$_POST['amountPaid7'];
	 $balance7=$_POST['balance7'];
	 
	 $date8 =$_POST['t_date8'];
	 $toothNo8=$_POST['toothNo8'];
	 $procedure8=$_POST['t_procedure8'];
	 $dentist8=$_POST['dentists8'];
	 $amountCharged8=$_POST['amountCharged8'];
	 $amountPaid8=$_POST['amountPaid8'];
	 $balance8=$_POST['balance8'];
	 
	 $date9 =$_POST['t_date9'];
	 $toothNo9=$_POST['toothNo9'];
	 $procedure9=$_POST['t_procedure9'];
	 $dentist9=$_POST['dentists9'];
	 $amountCharged9=$_POST['amountCharged9'];
	 $amountPaid9=$_POST['amountPaid9'];
	 $balance9=$_POST['balance9'];
	 
	 $date10 =$_POST['t_date10'];
	 $toothNo10=$_POST['toothNo10'];
	 $procedure10=$_POST['t_procedure10'];
	 $dentist10=$_POST['dentists10'];
	 $amountCharged10=$_POST['amountCharged10'];
	 $amountPaid10=$_POST['amountPaid10'];
	 $balance10=$_POST['balance10'];
	 
	 
		   if (empty($_POST['name'])) {
		echo "<script type='text/javascript'>alert('Name is required!')</script>";
		exit();
			}

			else{
	$sql="insert into t_records values('$app_id','".mysqli_real_escape_string($conn, $name)."',
	 '".mysqli_real_escape_string($conn, $age)."','".mysqli_real_escape_string($conn, $gender)."','".mysqli_real_escape_string($conn, $date)."','".mysqli_real_escape_string($conn, $toothNo)."',
	 '".mysqli_real_escape_string($conn, $procedure)."','".mysqli_real_escape_string($conn, $dentist)."','".mysqli_real_escape_string($conn, $amountCharged)."',
	 '".mysqli_real_escape_string($conn, $amountPaid)."','".mysqli_real_escape_string($conn, $balance)."',
	 '$date2','$toothNo2','$procedure2','$dentist2','$amountCharged2','$amountPaid2','$balance2',
	 '$date3','$toothNo3','$procedure3','$dentist3','$amountCharged3','$amountPaid3','$balance3',
	 '$date4','$toothNo4','$procedure4','$dentist4','$amountCharged4','$amountPaid4','$balance4',
	 '$date5','$toothNo5','$procedure5','$dentist5','$amountCharged5','$amountPaid5','$balance5',
	 '$date6','$toothNo6','$procedure6','$dentist6','$amountCharged6','$amountPaid6','$balance6',
	 '$date7','$toothNo7','$procedure7','$dentist7','$amountCharged7','$amountPaid7','$balance7',
	 '$date8','$toothNo8','$procedure8','$dentist8','$amountCharged8','$amountPaid8','$balance8',
	 '$date9','$toothNo9','$procedure9','$dentist9','$amountCharged9','$amountPaid9','$balance9',
	 '$date10','$toothNo10','$procedure10','$dentist10','$amountCharged10','$amountPaid10','$balance10'
	 )";
	 mysqli_query($conn,$sql) or trigger_error(mysqli_error($conn));
			echo "<script type='text/javascript'>success('Record successfuly submitted!')</script>";
			echo '<script>window.location= "treatmentrecords.php"</script>';
			exit();
			}
		mysqli_close($conn);

	 }
}
?>