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
                <h3 class="panel-title">Add Record</h3>
				
              </div>
			  
              <div class="panel-body">
                
				<form method ="post">
                <table class="table table-striped table-hover">
					                    <tr>
										
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div ondblclick="document.getElementById('username').disabled=false;">
						<input type="hidden" name ="username"id="username" value="<?php echo $_SESSION['username']; ?>" readonly="readonly"></div>
						<b>Last Name</b></br><input type ="text" name ="lname" placeholder ="Last Name"></br>
						<b>First Name</b></br><input type ="text" name ="fname" placeholder ="First Name"></br>
						<b>Middle Name</b></br><input type ="text" name ="mname" placeholder ="Middle Name"></br>
						<b>Birthdate</b></br><input type ="text" name ="bday" placeholder ="Middle Name"></br>
						<b>Age</b></br><input type ="text" name ="age" placeholder ="Age"></br>
						<b>Sex</b></br>
						<select name="sex"></br>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select></br></br>
						<b>Religion</b></br>
						</select>
						<select name="religion">
						<option value="Roman Catholic">Roman Catholic</option>
						<option value="Christian">Christian</option>
						<option value="Baptist">Baptist</option>
						<option value="Born Again">Born Again</option>
						<option value="Muslim">Muslim</option>
						<option value="Protestant">Protestant</option>
						</select></br>
						</br><b>Nationality</b><input type ="text" name ="nationality" placeholder ="Nationality"></br>
						<b>Nickname</b><input type ="text" name ="nickname" placeholder ="Nickname"></br>
						<b>Home Address</b><input type ="text" name ="homeaddress" placeholder ="Home Address"></br>
						<b>Home No.</b><input type ="text" name ="homeNo" placeholder ="Home No."></br>
						<b>Occupation</b><input type ="text" name ="occupation1" placeholder ="Occupation"></br>
						<b>Office No.</b><input type ="text" name ="officeNo" placeholder ="Office No."></br>
						<b>Fax No.</b><input type ="text" name ="faxNo" placeholder ="Fax No."></br>
						<b>Cel/Mobile No.</b><input type ="text" name ="mobileNo" placeholder ="Cel/Mobile No."></br>
						<b>Email Address</b><input type ="text" name ="email" placeholder ="Email Address"></br>
						<b>Dental Inssurance</b><input type ="text" name ="dentalInsurance" placeholder ="Dental Insurance"></br>
						<b>Effective Date</b><input type ="text" name ="effectiveDate" placeholder ="Effective Date"></br>
						<center><p>FOR MINORS</p></center></br>
						<b>Parent/Guardian Name</b><input type ="text" name ="parentName" placeholder ="Parent/Guardian"></br>
						<b>Occupation</b><input type ="text" name ="occupation2" placeholder ="Occupation"></br>
						<b>Whom may we thank for referring you?</b><input type ="text" name ="referyou" placeholder ="Who referred you?"></br>
						<b>What is your reason for dental consultation?</b><input type ="text" name ="dentalconsultation" placeholder ="What is your reason?"></br>
						<center><p></i>DENTAL HISTORY</p></i></center></br>
						<b>Previous Dentist: Dr.</b><input type ="text" name ="prevDr" placeholder ="Previous Dentist"></br>
						<b>Last Dental visit</b><input type ="text" name ="lastVisit" placeholder ="Last Visit"></br>
						<center><p></i>MEDICAL HISTORY</p></i></center></br>
						<b>Name of Physician: Dr.</b><input type ="text" name ="namePhys" placeholder ="Name of Phycisian"></br>
						<b>Specialty, if applicable:</b><input type ="text" name ="specialty" placeholder ="Speciality"></br>
						<b>Office Address</b><input type ="text" name ="officeAdd" placeholder ="Office Address"></br>
						<b>Office Number</b><input type ="text" name ="officeNum" placeholder ="Office Number"></br>
						<b>1. Are you in good health?</b></br>
						<select name="goodHealth"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
						<b>2. Are you under medical treatment right now?</b></br>
						<select name="medTreatment"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br>
						<b>If so, what is the condition being treated?</b><input type ="text" name ="medTreatment2" placeholder ="Specify"></br>
						<b>3. Have you ever had serious illness or surgical operation?</b></br>
						<select name="illnessSurgical"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br>
						<b>If so, what illness or operation?</b><input type ="text" name ="illnessSurgical2" placeholder ="Speciy"></br>
						<b>4. Have you ever been hospitalized?</b></br>
						<select name="hospitalized"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br>
						<b>If so, when and why?</b><input type ="text" name ="hospitalized2" placeholder ="Specify"></br>
						<b>5. Are you taking any prescription/non-prescription medication?</b></br>
						<select name="prescription"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br>
						<b>If so, please specify</b><input type ="text" name ="prescription2" placeholder ="Specify"></br>
						<b>6. Do you use tobacco products?</b></br></br>
						<select name="tobacco"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
						<b>7. Do you use alcohol, cocaine or other dangerous drugs?</b></br></br>
						<select name="alcohol"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
						<b>8. Are you allergic to any of the following?</b></br>
						
						<b>9. Bleeding Time</b><input type ="text" name ="bleedingTime" placeholder ="Bleeding Time"></br>	
						<b>10. For women only:</b></br>
						<b>Are you pregnant?</b>
						<select name="womenOnly1"></br>
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
						<b>Are you nursing?</b>
						<select name="womenOnly2"></br>
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
						<b>Are you taking birth controls?</b>
						<select name="womenOnly3"></br>
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
						<b>Blood Type</b><input type ="text" name ="bloodType" placeholder ="A,B,O+ etc.."></br>
						<b>Blood Pressure</b><input type ="text" name ="bloodPressure" placeholder ="Blood Pressure"></br>
						<input type ="hidden" name ="created" value ="<?php echo $created; ?>">
						
						</br><input type ="submit" name ="btnSubmit" value ="Submit">
				</form>
                    </table>
              </div>
              </div>
	
          </div>


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
<?php
if(isset($_POST['btnSubmit'])){
 $conn = mysqli_connect("localhost", "root", "", "lmvillamor");
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
			
 {
	 $id=$_POST['id'];
	 $username=$_POST['username'];
	 $lname=$_POST['lname'];
	 $fname=$_POST['fname'];
	 $mname=$_POST['mname'];
	 $bday =$_POST['bday'];
	 $age=$_POST['age'];
	 $sex=$_POST['sex'];
	 $religion=$_POST['religion'];
	 $nationality=$_POST['nationality'];
	 $nickname=$_POST['nickname'];
	 $homeaddress=$_POST['homeaddress'];
	 $homeNo=$_POST['homeNo'];
	 $occupation1=$_POST['occupation1'];
	 $officeNo=$_POST['officeNo'];
	 $faxNo=$_POST['faxNo'];
	 $mobileNo=$_POST['mobileNo'];
	 $email=$_POST['email'];
	 $dentalInsurance=$_POST['dentalInsurance'];
	 $effectiveDate=$_POST['effectiveDate'];
	 $parentName=$_POST['parentName'];
	 $occupation2=$_POST['occupation2'];
	 $referyou=$_POST['referyou'];
	 $dentalconsultation=$_POST['dentalconsultation'];
	 $prevDr=$_POST['prevDr'];
	 $lastVisit=$_POST['lastVisit'];
	 $namePhys=$_POST['namePhys'];
	 $specialty=$_POST['specialty'];
	 $officeAdd=$_POST['officeAdd'];
	 $officeNum=$_POST['officeNum'];
	 $goodHealth=$_POST['goodHealth'];
	 $medTreatment=$_POST['medTreatment'];
	 $medTreatment2=$_POST['medTreatment2'];
	 $illnessSurgical=$_POST['illnessSurgical'];
	 $illnessSurgical2=$_POST['illnessSurgical2'];
	 $hospitalized=$_POST['hospitalized'];
	 $hospitalized2=$_POST['hospitalized2'];
	 $prescription=$_POST['prescription'];
	 $prescription2=$_POST['prescription2'];
	 $tobacco=$_POST['tobacco'];
	 $alcohol=$_POST['alcohol'];
	 $bleedingTime=$_POST['bleedingTime'];
	 $womenOnly1=$_POST['womenOnly1'];
	 $womenOnly2=$_POST['womenOnly2'];
	 $womenOnly3=$_POST['womenOnly3'];
	 $bloodType=$_POST['bloodType'];
	 $bloodPressure=$_POST['bloodPressure'];
     date_default_timezone_set('Asia/Manila');
     $created=date("Y/m/d h:i:s");
     
	 


		   if ( empty($_POST['fname']) || empty($_POST['lname']) ||
				empty($_POST['mname'])){
		echo "<script type='text/javascript'>alert('Input remaining fields!')</script>";
		exit();
			}

			else{
	$sql="insert into records values('$id','$username','".mysqli_real_escape_string($conn, $lname)."','".mysqli_real_escape_string($conn, $fname)."','".mysqli_real_escape_string($conn, $mname)."',
	 '".mysqli_real_escape_string($conn, $bday)."','".mysqli_real_escape_string($conn, $age)."','".mysqli_real_escape_string($conn, $sex)."','".mysqli_real_escape_string($conn, $religion)."','".mysqli_real_escape_string($conn, $nationality)."',
	 '".mysqli_real_escape_string($conn, $nickname)."','".mysqli_real_escape_string($conn, $homeaddress)."','".mysqli_real_escape_string($conn, $homeNo)."','".mysqli_real_escape_string($conn, $occupation1)."',
	 '".mysqli_real_escape_string($conn, $officeNo)."','".mysqli_real_escape_string($conn, $faxNo)."','".mysqli_real_escape_string($conn, $mobileNo)."','".mysqli_real_escape_string($conn, $email)."',
	 '".mysqli_real_escape_string($conn, $dentalInsurance)."','".mysqli_real_escape_string($conn, $effectiveDate)."','".mysqli_real_escape_string($conn, $parentName)."',
	 '".mysqli_real_escape_string($conn, $occupation2)."','".mysqli_real_escape_string($conn, $referyou)."','".mysqli_real_escape_string($conn, $dentalconsultation)."','".mysqli_real_escape_string($conn, $prevDr)."',
	 '".mysqli_real_escape_string($conn, $lastVisit)."','".mysqli_real_escape_string($conn, $namePhys)."','".mysqli_real_escape_string($conn, $specialty)."','".mysqli_real_escape_string($conn, $officeAdd)."',
	 '".mysqli_real_escape_string($conn, $officeNum)."','".mysqli_real_escape_string($conn, $goodHealth)."','".mysqli_real_escape_string($conn, $medTreatment)."','".mysqli_real_escape_string($conn, $medTreatment2)."',
	 '".mysqli_real_escape_string($conn, $illnessSurgical)."','".mysqli_real_escape_string($conn, $illnessSurgical2)."','".mysqli_real_escape_string($conn, $prescription)."','".mysqli_real_escape_string($conn, $prescription2)."',
	 '".mysqli_real_escape_string($conn, $tobacco)."','".mysqli_real_escape_string($conn, $alcohol)."','".mysqli_real_escape_string($conn, $bleedingTime)."','".mysqli_real_escape_string($conn, $womenOnly1)."','".mysqli_real_escape_string($conn, $womenOnly2)."','".mysqli_real_escape_string($conn, $womenOnly3)."',
	 '".mysqli_real_escape_string($conn, $bloodType)."','".mysqli_real_escape_string($conn, $bloodPressure)."','$created')";
	 mysqli_query($conn,$sql) or trigger_error(mysqli_error($conn));
			echo "<script type='text/javascript'>success('Record successfuly added!')</script>";
			echo '<script>window.location= "records.php"</script>';
			exit();
			}
		mysqli_close($conn);

	 }
}
?>