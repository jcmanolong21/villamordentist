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
    padding: 10px 3px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
}
input[type=date], select {
	width: 150px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
	width: 100px;
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
                <h3 class="panel-title">Add Record</h3>
				
              </div>
			  
              <div class="panel-body">
                
				<form method ="post">
                <table class="table table-striped table-hover">
					                    <tr>
										
										<input type="hidden" name="id" value="<?php echo $id; ?>">
				
						<div ondblclick="document.getElementById('username').disabled=false;">
						<input type="hidden" name ="username"id="username" value="<?php echo $_SESSION['username']; ?>" readonly="readonly"></div>
						<fieldset>
<label for="lname">Last Name &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&ensp;&nbsp;First Name
&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &ensp;Middle Name</label>&emsp;<input type="text" name="lname" size="30">
<label for="fname"> &emsp;</label><input type="text" name="fname" size="30">
<label for="mname"> &emsp; </label><input type="text" name="mname" size="30"></br>
<label for="bday">Birthdate(mm/dd/yy)&emsp;<input type="date" name="bday" size="26"> &emsp; &ensp;Age&emsp; <input type="number" name="age" size="1"> &emsp;
&ensp;&ensp;&ensp;&ensp;Sex:&emsp;<select name="sex" size="1"></br>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						</select></br>
<label for="religion">Religion:&ensp;<input type="text" name="religion" size="20"> Nationality:&nbsp;<input type="text" name="nationality" size="15"> Nickname:
<input type="text" name="nickname" size="18">
<label for="homeAddress">Home Address:&nbsp;<input type="text" name="homeAddress" size="46"> Home No.&ensp;<input type="text" name="homeNo" size="18"></br>
<label for="occupation1">Occupation:&nbsp;<input type="text" name="occupation1" size="20"> Office No.&ensp;<input type="text" name="officeNo" size="13"> Fax No.&emsp;
<input type="text" name="faxNo" size="18"></br>
<label for="dentInsurance">Dental Insurrance:&nbsp;<input type="text" name="dentInsurance" size="43"> Mobile No.&nbsp;<input type="text" name="mobileNo" size="18"></br>
<label for="effectiveDate">Effective Date:&nbsp;<input type="date" name="effectiveDate" size="18">&nbsp; Email&nbsp;<input type="text" name="email" size="18">
<p><i>FOR MINORS:</i></p>
<label for="parents">Parent/Guardian's Name:&ensp;<input type="text" name="parents" size="36"></br>
<label for="occupation2">Occupation:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="text" name="occupation2" size="36"></br>
<p><i>DENTAL HISTORY:</i></p>
<label for="prevDr">Previous Dentist: Dr.&emsp;&emsp;&ensp;<input type="text" name="prevDr" size="36">&emsp; Last Visit &emsp;<input type="date" name="lastVisit" size="26"></br>
<p><i>MEDICAL HISTORY:</i></p>
<label for="physician">Name of Physician: Dr.&emsp;&nbsp;<input type="text" name="physician" size="36">&nbsp; Specialty&nbsp;<input type="text" name="specialty" size="18"></br>
<label for="officeAddress">Office Address:&emsp;&emsp;&ensp;&emsp;&emsp;<input type="text" name="officeAddress" size="36">&nbsp;Office No. <input type="text" name="officeNum" size="18"></br>
<b>1. Are you in good health?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
					<select name="goodHealth" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<b>2. Are you under medical treatment now?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
					<select name="medTreatment" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br> If so, what is the condition being treated?</br>
						<input type="text" name="medTreatment2" size="72"></br>
						
<b>3. Have you ever had serious illness or surgical operation?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&nbsp;&nbsp;&ensp;&nbsp;
					<select name="illness" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br> If so, what illness or operation?</br>
						<input type="text" name="illness2" size="72"></br>
						
<b>4. Have you been hospitalized?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&nbsp;&nbsp;&ensp;&nbsp;
					<select name="hospitalized" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br> If so, when and why?</br>
						<input type="text" name="hospitalized2" size="72"></br>
<b>5. Are you taking prescription/non-prescription medication?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&nbsp;&nbsp;&ensp;&nbsp;
					<select name="prescription" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br> If so, please specify?</br>
						<input type="text" name="prescription2" size="72"></br>
<b>6. Do you use tobacco products?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
					<select name="tobacco" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<b>7. Do you use alcohol, cocaine or other dangerous drugs?&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&nbsp;
					<select name="alcohol" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>	
<b>8. Are you allergic to any of the following?&nbsp;&nbsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&nbsp;
					<select name="allergic" size="1"></br>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br>
						<input type="checkbox" name="opt1" value="Local Anesthetic">&nbsp;<label>Local Anesthetic(ex. Lidocaine)</label> &nbsp; 
						<input type="checkbox" name="opt2" value="Penicillin Antibiotics">&nbsp;<label>Penicillin Antibiotics</label>  &nbsp;<input type="checkbox" name="opt3" value="Sulfa Drugs">&nbsp;<label>Sulfa Drugs &nbsp;</label>
						<input type="checkbox" name="opt4" value="Aspirin">&nbsp;<label>Aspirin&nbsp;</label>&nbsp;<input type="checkbox" name="opt5" value="Latex">&nbsp;<label>Latex</label>
						<label>Others: &nbsp;<input type="text" name="other" size="36"></br>
<b>9. Bleeding Time <input type="text" name="bleedingTime2" size="27"></br>
<b>10. For women only:</br>
<b>&emsp;&emsp;&emsp; &emsp;Are you pregnant?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&ensp;
					<select name="woman1" size="1"></br>
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<b>&emsp;&emsp;&emsp;&emsp;Are you nursing?&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&ensp;
					<select name="woman2" size="1"></br>
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<b>&emsp;&emsp;&emsp;&emsp;Are you taking birth controll pills?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&ensp;
					<select name="woman3" size="1"></br>
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<label>11. Blood Type&ensp;&emsp;&emsp;<input type="text" name="bloodType" size="27">&ensp;<label>12. Blood Pressure&ensp;<input type="text" name="bloodPressure" size="27"></br>
 
						
						</fieldset>
					<br>
					</table>
					<fieldset>
					<center>DENTAL RECORD CHART</center></br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;STATUS&ensp;<input type="text" name="A55" size="1"><input type="text" name="A54" size="1"><input type="text" name="A53" size="1"><input type="text" name="A52" size="1"><input type="text" name="A51" size="1">
					&emsp;<input type="text" name="A61" size="1"><input type="text" name="A62" size="1"><input type="text" name="A63" size="1"><input type="text" name="A64" size="1"><input type="text" name="A65" size="1">
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RIGHT &ensp;&ensp;<input type="text" name="B55" size="1"><input type="text" name="B54" size="1"><input type="text" name="B53" size="1"><input type="text" name="B52" size="1"><input type="text" name="B51" size="1">
					&emsp;<input type="text" name="B61" size="1"><input type="text" name="B62" size="1"><input type="text" name="B63" size="1"><input type="text" name="B64" size="1"><input type="text" name="B65" size="1">&emsp; LEFT
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;55&ensp;&emsp;54&nbsp;&emsp;&ensp;53&ensp;&emsp;52&ensp;&emsp;51
					&emsp;&emsp;&nbsp;&nbsp;61&ensp;&emsp;62&nbsp;&emsp;&nbsp;63 &ensp;&emsp;64&ensp;&emsp;65
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&emsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					</br>&emsp;&emsp;TEMPORARY TEETH</br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="A18" size="1"><input type="text" name="A17" size="1"><input type="text" name="A16" size="1"><input type="text" name="A15" size="1"><input type="text" name="A14" size="1"><input type="text" name="A13" size="1"><input type="text" name="A12" size="1"><input type="text" name="A11" size="1">&emsp;
					<input type="text" name="A21" size="1"><input type="text" name="A22" size="1"><input type="text" name="A23" size="1"><input type="text" name="A24" size="1"><input type="text" name="A25" size="1"><input type="text" name="A26" size="1"><input type="text" name="A27" size="1"><input type="text" name="A28" size="1"></br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="B18" size="1"><input type="text" name="B17" size="1"><input type="text" name="B16" size="1"><input type="text" name="B15" size="1"><input type="text" name="B14" size="1"><input type="text" name="B13" size="1"><input type="text" name="B12" size="1"><input type="text" name="B11" size="1">&emsp;
					<input type="text" name="B21" size="1"><input type="text" name="B22" size="1"><input type="text" name="B23" size="1"><input type="text" name="B24" size="1"><input type="text" name="B25" size="1"><input type="text" name="B26" size="1"><input type="text" name="B27" size="1"><input type="text" name="B28" size="1"></br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;18&emsp;&ensp; 17&emsp;&ensp;16&emsp;&ensp;15&emsp;&ensp;14&emsp;&ensp;13&emsp;&ensp; 12&emsp;&ensp;11
					&emsp;&emsp;&ensp;&nbsp;21&emsp;&ensp;22&emsp;&ensp;23&emsp;&ensp;&nbsp;24&emsp;&ensp;25&emsp;&ensp;26&emsp;&ensp;&nbsp;27&emsp;&ensp;28</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp; <input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&ensp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					</br>
					<center><label></br>&emsp;&emsp;PERMANENT TEETH</br></br></label></center>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp; <input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&ensp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;48&emsp;&ensp; 47&emsp;&ensp;46&emsp;&ensp;45&emsp;&ensp;44&emsp;&ensp;43&emsp;&ensp; 42&emsp;&ensp;41
					&emsp;&emsp;&ensp;&nbsp;31&emsp;&ensp;32&emsp;&ensp;33&emsp;&ensp;&nbsp;34&emsp;&ensp;35&emsp;&ensp;36&emsp;&ensp;&nbsp;37&emsp;&ensp;38</br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="A48" size="1"><input type="text" name="A47" size="1"><input type="text" name="A46" size="1"><input type="text" name="A45" size="1"><input type="text" name="A44" size="1"><input type="text" name="A43" size="1"><input type="text" name="A42" size="1"><input type="text" name="A41" size="1">&emsp;
					<input type="text" name="A31" size="1"><input type="text" name="A32" size="1"><input type="text" name="A33" size="1"><input type="text" name="A34" size="1"><input type="text" name="A35" size="1"><input type="text" name="A36" size="1"><input type="text" name="A37" size="1"><input type="text" name="A38" size="1"></br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="B48" size="1"><input type="text" name="B47" size="1"><input type="text" name="B46" size="1"><input type="text" name="B45" size="1"><input type="text" name="B44" size="1"><input type="text" name="B43" size="1"><input type="text" name="B42" size="1"><input type="text" name="B41" size="1">&emsp;
					<input type="text" name="B31" size="1"><input type="text" name="B32" size="1"><input type="text" name="B33" size="1"><input type="text" name="B34" size="1"><input type="text" name="B35" size="1"><input type="text" name="B36" size="1"><input type="text" name="B37" size="1"><input type="text" name="B38" size="1">
					</br>&emsp;&emsp;TEMPORARY TEETH</br></br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&emsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;85&ensp;&emsp;84&nbsp;&emsp;&ensp;83&ensp;&emsp;82&ensp;&emsp;81
					&emsp;&emsp;&nbsp;&nbsp;71&ensp;&emsp;72&nbsp;&emsp;&nbsp;73 &ensp;&emsp;74&ensp;&emsp;75</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;STATUS&nbsp;<input type="text" name="A85" size="1"><input type="text" name="A84" size="1"><input type="text" name="A83" size="1"><input type="text" name="A82" size="1"><input type="text" name="A81" size="1">
					&emsp;<input type="text" name="A71" size="1"><input type="text" name="A72" size="1"><input type="text" name="A73" size="1"><input type="text" name="A74" size="1"><input type="text" name="A75" size="1">
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RIGHT&ensp;&ensp;<input type="text" name="B85" size="1"><input type="text" name="B84" size="1"><input type="text" name="B83" size="1"><input type="text" name="B82" size="1"><input type="text" name="B81" size="1">
					&emsp;<input type="text" name="B71" size="1"><input type="text" name="B72" size="1"><input type="text" name="B73" size="1"><input type="text" name="B74" size="1"><input type="text" name="B75" size="1">&emsp; LEFT
					</br></br>Legend:&emsp;&emsp;Condition&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Resotoration & Prosthetics&emsp;Surgery</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;D- Decayed(Caries Indicated for Filling)&emsp;J- Jacket Crown&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;X- Extraction due to Caries</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;M- Missing due to Caries&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; A- Amalgam Filling&emsp;&emsp;&emsp;&emsp;&nbsp;XO- Extraction due to Other</br>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;F- Filled&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;AB- Abutment&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Causes</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;I- Caries Indicated for Extraction&emsp;&emsp;&emsp;&emsp;&nbsp;P- Pontic&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;PT- Present Teeth</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;RF- Root Fragment&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;In- Inlay&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Cm- Congenitally Missing</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;MO- Missing due to Other Causes&emsp;&emsp;&emsp;&ensp;Fx- Fixed Cure Composite&emsp;Sp- Supernumerary</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;Im- Impacted Tooth&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;S- Sealants</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&nbsp;Rm- Removable Denture</br></br>
					Periodontal Screening:&emsp;&emsp;&emsp;&ensp;Occlusion&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Appliances:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TMD:</br>
					<input type="text" name="gingivitis" size="8">&nbsp;Gingivitis&emsp;&emsp;&emsp;&ensp;<input type="text" name="classMolar" size="8">&nbsp;Class(Molar)&ensp;&ensp;<input type="text" name="orthodontic" size="8">&nbsp;Orthodontic&emsp;<input type="text" name="clenching" size="8">&nbsp;Clenching</br>
					<input type="text" name="early" size="8">&nbsp;Early&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text" name="overjet" size="8">&nbsp;Overjet&emsp;&emsp;&emsp;&ensp;<input type="text" name="stayplate" size="8">&nbsp;Stayplate&emsp;&emsp;<input type="text" name="clicking" size="8">&nbsp;Clicking
					</br>&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Periodintisis</br>
					</br>
					<input type="text" name="moderate" size="8">&nbsp;Moderate&emsp;&emsp;&emsp;&nbsp;<input type="text" name="overite" size="8">&nbsp;Overite&emsp;&emsp;&emsp;&ensp;<input type="text" name="others1" size="8">&nbsp;Others&emsp;&emsp;&ensp;&ensp;&nbsp;<input type="text" name="tismus" size="8">&nbsp;Tismus</br>
					&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Periodintisis&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<input type="text" name="others2" size="16">&emsp;&emsp;&emsp;<input type="text" name="muscleSpasm" size="8">&nbsp;Muscle</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Spasm</br>
					<input type="text" name="advance" size="8">&nbsp;Advance&emsp;&emsp;&emsp;&ensp;&nbsp;<input type="text" name="midline" size="8">&nbsp; Midline Deviation</br>
					&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Periodintisis</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<input type="text" name="crossbite" size="8">&nbsp;Crossbite</br>
					
					
					
					<input type ="hidden" name ="created" value ="<?php echo $created; ?>">
						</br><input type ="submit" name ="btnSubmit" value ="Submit">
					</fieldset>
						
						
				</form>
                    
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
	 $bday=$_POST['bday'];
	 $age=$_POST['age'];
	 $sex=$_POST['sex'];
	 $religion=$_POST['age'];
	 $nationality=$_POST['age'];
	 $nickname=$_POST['nickname'];
	 $homeAddress=$_POST['homeAddress'];
	 $homeNo=$_POST['homeNo'];
	 $occupation1=$_POST['occupation1'];
	 $officeNo=$_POST['officeNo'];
	 $faxNo=$_POST['faxNo'];
	 $dentInsurance=$_POST['dentInsurance'];
	 $mobileNo=$_POST['mobileNo'];
	 $effectiveDate=$_POST['effectiveDate'];
	 $email=$_POST['email'];
	 $parents=$_POST['parents'];
	 $occupation2=$_POST['occupation2'];
	 $prevDr=$_POST['prevDr'];
	 $lastVisit=$_POST['lastVisit'];
	 $physician=$_POST['physician'];
	 $specialty=$_POST['specialty'];
	 $officeAddress=$_POST['officeAddress'];
	 $officeNum=$_POST['officeNum'];
	 $goodHealth=$_POST['goodHealth'];
	 $medTreatment=$_POST['medTreatment'];
	 $medTreatment2=$_POST['medTreatment2'];
	 $illness=$_POST['illness'];
	 $illness2=$_POST['illness2'];
	 $hospitalized=$_POST['hospitalized'];
	 $hospitalized2=$_POST['hospitalized2'];
	 $prescription=$_POST['prescription'];
	 $prescription2=$_POST['prescription2'];
	 $tobacco=$_POST['tobacco'];
	 $alcohol=$_POST['alcohol'];
	 $allergic=$_POST['allergic'];
	 $opt1=isset($_POST['opt1']) ? $_POST['opt1'] : '';
	 $opt2=isset($_POST['opt2']) ? $_POST['opt2'] : '';
	 $opt3=isset($_POST['opt3']) ? $_POST['opt3'] : '';
	 $opt4=isset($_POST['opt4']) ? $_POST['opt4'] : '';
	 $opt5=isset($_POST['opt5']) ? $_POST['opt5'] : '';
	 $other=$_POST['other'];
	 $bleedingTime2=$_POST['bleedingTime2'];
	 $woman1=$_POST['woman1'];
	 $woman2=$_POST['woman2'];
	 $woman3=$_POST['woman3'];
	 $bloodType=$_POST['bloodType'];
	 $bloodPressure=$_POST['bloodPressure'];
	 $disease=$_POST['disease'];
	 $highblood=isset($_POST['highblood']) ? $_POST['highblood'] : '';
	 $heartDisease=isset($_POST['heartDisease']) ? $_POST['heartDisease'] : '';
	 $cancerTumors=isset($_POST['cancerTumors']) ? $_POST['cancerTumors'] : '';
	 $lowblood=isset($_POST['lowblood']) ? $_POST['lowblood'] : '';
	 $heartMurmur=isset($_POST['heartMurmur']) ? $_POST['heartMurmur'] : '';
	 $anemia=isset($_POST['anemia']) ? $_POST['anemia'] : '';
	 $epilepsy=isset($_POST['epilepsy']) ? $_POST['epilepsy'] : '';
	 $hepatitis=isset($_POST['hepatitis']) ? $_POST['hepatitis'] : '';
	 $angina=isset($_POST['angina']) ? $_POST['angina'] : '';
	 $aidsHiv=isset($_POST['aidsHiv']) ? $_POST['aidsHiv'] : '';
	 $rheumatic=isset($_POST['rheumatic']) ? $_POST['rheumatic'] : '';
	 $asthma=isset($_POST['asthma']) ? $_POST['asthma'] : '';
	 $std=isset($_POST['std']) ? $_POST['std'] : '';
	 $hayfever=isset($_POST['hayfever']) ? $_POST['hayfever'] : '';
	 $emphysema=isset($_POST['emphysema']) ? $_POST['emphysema'] : '';
	 $stomach=isset($_POST['stomach']) ? $_POST['stomach'] : '';
	 $respiratory=isset($_POST['respiratory']) ? $_POST['respiratory'] : '';
	 $bleeding=isset($_POST['bleeding']) ? $_POST['bleeding'] : '';
	 $feinting=isset($_POST['feinting']) ? $_POST['feinting'] : '';
	 $hepatitis2=isset($_POST['hepatitis2']) ? $_POST['hepatitis2'] : '';
	 $bloodDisease=isset($_POST['bloodDisease']) ? $_POST['bloodDisease'] : '';
	 $rapid=isset($_POST['rapid']) ? $_POST['rapid'] : '';
	 $tuberculosis=isset($_POST['tuberculosis']) ? $_POST['tuberculosis'] : '';
	 $headInjuries=isset($_POST['headInjuries']) ? $_POST['headInjuries'] : '';
	 $radiation=isset($_POST['radiation']) ? $_POST['radiation'] : '';
	 $swollen=isset($_POST['swollen']) ? $_POST['swollen'] : '';
	 $arthritis=isset($_POST['arthritis']) ? $_POST['arthritis'] : '';
	 $joint=isset($_POST['joint']) ? $_POST['joint'] : '';
	 $kidney=isset($_POST['kidney']) ? $_POST['kidney'] : '';
	 $others=isset($_POST['others']) ? $_POST['others'] : '';
	 $heartSurguery=isset($_POST['heartSurguery']) ? $_POST['heartSurguery'] : '';
	 $diabetes=isset($_POST['diabetes']) ? $_POST['diabetes'] : '';
	 $heartAttack=isset($_POST['heartAttack']) ? $_POST['heartAttack'] : '';
	 $chest=isset($_POST['chest']) ? $_POST['chest'] : '';
	 $thyroid=isset($_POST['thyroid']) ? $_POST['thyroid'] : '';
	 $stroke=isset($_POST['stroke']) ? $_POST['stroke'] : '';
	 $A55=$_POST['A55'];
	 $A54=$_POST['A54'];
	 $A53=$_POST['A53'];
	 $A52=$_POST['A52'];
	 $A51=$_POST['A51'];
	 $A61=$_POST['A61'];
	 $A62=$_POST['A62'];
	 $A63=$_POST['A63'];
	 $A64=$_POST['A64'];
	 $A65=$_POST['A65'];
	 $B55=$_POST['B55'];
	 $B54=$_POST['B54'];
	 $B53=$_POST['B53'];
	 $B52=$_POST['B52'];
	 $B51=$_POST['B51'];
	 $B61=$_POST['B61'];
	 $B62=$_POST['B62'];
	 $B63=$_POST['B63'];
	 $B64=$_POST['B64'];
	 $B65=$_POST['B65'];
	 $A18=$_POST['A18'];
	 $A17=$_POST['A17'];
	 $A16=$_POST['A16'];
	 $A15=$_POST['A15'];
	 $A14=$_POST['A14'];
	 $A13=$_POST['A13'];
	 $A12=$_POST['A12'];
	 $A11=$_POST['A11'];
	 $A21=$_POST['A21'];
	 $A22=$_POST['A22'];
	 $A23=$_POST['A23'];
	 $A24=$_POST['A24'];
	 $A25=$_POST['A25'];
	 $A26=$_POST['A26'];
	 $A27=$_POST['A27'];
	 $A28=$_POST['A28'];
	 $B18=$_POST['B18'];
	 $B17=$_POST['B17'];
	 $B16=$_POST['B16'];
	 $B15=$_POST['B15'];
	 $B14=$_POST['B14'];
	 $B13=$_POST['B13'];
	 $B12=$_POST['B12'];
	 $B11=$_POST['B11'];
	 $B21=$_POST['B21'];
	 $B22=$_POST['B22'];
	 $B23=$_POST['B23'];
	 $B24=$_POST['B24'];
	 $B25=$_POST['B25'];
	 $B26=$_POST['B26'];
	 $B27=$_POST['B27'];
	 $B28=$_POST['B28'];
	 $A48=$_POST['A48'];
	 $A47=$_POST['A47'];
	 $A46=$_POST['A46'];
	 $A45=$_POST['A45'];
	 $A44=$_POST['A44'];
	 $A43=$_POST['A43'];
	 $A42=$_POST['A42'];
	 $A41=$_POST['A41'];
	 $A31=$_POST['A31'];
	 $A32=$_POST['A32'];
	 $A33=$_POST['A33'];
	 $A34=$_POST['A34'];
	 $A35=$_POST['A35'];
	 $A36=$_POST['A36'];
	 $A37=$_POST['A37'];
	 $A38=$_POST['A38'];
	 $B48=$_POST['B48'];
	 $B47=$_POST['B47'];
	 $B46=$_POST['B46'];
	 $B45=$_POST['B45'];
	 $B44=$_POST['B44'];
	 $B43=$_POST['B43'];
	 $B42=$_POST['B42'];
	 $B41=$_POST['B41'];
	 $B31=$_POST['B31'];
	 $B32=$_POST['B32'];
	 $B33=$_POST['B33'];
	 $B34=$_POST['B34'];
	 $B35=$_POST['B35'];
	 $B36=$_POST['B36'];
	 $B37=$_POST['B37'];
	 $B38=$_POST['B38'];
	 $A85=$_POST['A85'];
	 $A84=$_POST['A84'];
	 $A83=$_POST['A83'];
	 $A82=$_POST['A82'];
	 $A81=$_POST['A81'];
	 $A71=$_POST['A71'];
	 $A72=$_POST['A72'];
	 $A73=$_POST['A73'];
	 $A74=$_POST['A74'];
	 $A75=$_POST['A75'];
	 $B85=$_POST['B85'];
	 $B84=$_POST['B84'];
	 $B83=$_POST['B83'];
	 $B82=$_POST['B82'];
	 $B81=$_POST['B81'];
	 $B71=$_POST['B71'];
	 $B72=$_POST['B72'];
	 $B73=$_POST['B73'];
	 $B74=$_POST['B74'];
	 $B75=$_POST['B75'];
	 $gingivitis=$_POST['gingivitis'];
	 $classMolar=$_POST['classMolar'];
	 $orthodontic=$_POST['orthodontic'];
	 $clenching=$_POST['clenching'];
	 $early=$_POST['early'];
	 $overjet=$_POST['overjet'];
	 $stayplate=$_POST['stayplate'];
	 $clicking=$_POST['clicking'];
	 $moderate=$_POST['moderate'];
	 $overite=$_POST['overite'];
	 $others1=$_POST['others1'];
	 $tismus=$_POST['tismus'];
	 $others2=$_POST['others2'];
	 $muscleSpasm=$_POST['muscleSpasm'];
	 $advance=$_POST['advance'];
	 $midline=$_POST['midline'];
	 $crossbite=$_POST['crossbite'];
     date_default_timezone_set('Asia/Manila');
     $created=date("Y/m/d h:i:s");
    
	 


		   if ( empty($_POST['lname']) || empty($_POST['fname']) ||
				empty($_POST['mname'])) {
		echo "<script type='text/javascript'>alert('Input remaining fields!')</script>";
		exit();
			}

			else{
	$sql="insert into records values('$id','$username','".mysqli_real_escape_string($conn, $lname)."','".mysqli_real_escape_string($conn, $fname)."','".mysqli_real_escape_string($conn, $mname)."',
	'".mysqli_real_escape_string($conn, $bday)."','".mysqli_real_escape_string($conn, $age)."','".mysqli_real_escape_string($conn, $sex)."','".mysqli_real_escape_string($conn, $religion)."',
	'".mysqli_real_escape_string($conn, $nationality)."','".mysqli_real_escape_string($conn, $nickname)."','".mysqli_real_escape_string($conn, $homeAddress)."','".mysqli_real_escape_string($conn, $homeNo)."',
	'".mysqli_real_escape_string($conn, $occupation1)."','".mysqli_real_escape_string($conn, $officeNo)."','".mysqli_real_escape_string($conn, $faxNo)."','".mysqli_real_escape_string($conn, $dentInsurance)."',
	'".mysqli_real_escape_string($conn, $mobileNo)."','".mysqli_real_escape_string($conn, $effectiveDate)."','".mysqli_real_escape_string($conn, $email)."',
	'".mysqli_real_escape_string($conn, $parents)."','".mysqli_real_escape_string($conn, $occupation2)."','".mysqli_real_escape_string($conn, $prevDr)."','".mysqli_real_escape_string($conn, $lastVisit)."',
	'".mysqli_real_escape_string($conn, $physician)."','".mysqli_real_escape_string($conn, $specialty)."','".mysqli_real_escape_string($conn, $officeAddress)."','".mysqli_real_escape_string($conn, $officeNum)."',
	'".mysqli_real_escape_string($conn, $goodHealth)."','".mysqli_real_escape_string($conn, $medTreatment)."','".mysqli_real_escape_string($conn, $medTreatment2)."',
	'".mysqli_real_escape_string($conn, $illness)."','".mysqli_real_escape_string($conn, $illness2)."','".mysqli_real_escape_string($conn, $hospitalized)."','".mysqli_real_escape_string($conn, $hospitalized2)."',
	'".mysqli_real_escape_string($conn, $prescription)."','".mysqli_real_escape_string($conn, $prescription2)."','".mysqli_real_escape_string($conn, $tobacco)."','".mysqli_real_escape_string($conn, $alcohol)."',
	'".mysqli_real_escape_string($conn, $allergic)."','".mysqli_real_escape_string($conn, $opt1)."','".mysqli_real_escape_string($conn, $opt2)."','".mysqli_real_escape_string($conn, $opt3)."',
	'".mysqli_real_escape_string($conn, $opt4)."','".mysqli_real_escape_string($conn, $opt5)."','".mysqli_real_escape_string($conn, $other)."',
	'".mysqli_real_escape_string($conn, $bleedingTime2)."',
	'".mysqli_real_escape_string($conn, $woman1)."','".mysqli_real_escape_string($conn, $woman2)."','".mysqli_real_escape_string($conn, $woman3)."',
	'".mysqli_real_escape_string($conn, $bloodType)."','".mysqli_real_escape_string($conn, $bloodPressure)."','".mysqli_real_escape_string($conn, $disease)."',
	'".mysqli_real_escape_string($conn, $highblood)."','".mysqli_real_escape_string($conn, $heartDisease)."','".mysqli_real_escape_string($conn, $cancerTumors)."','".mysqli_real_escape_string($conn, $lowblood)."','".mysqli_real_escape_string($conn, $heartMurmur)."',
	'".mysqli_real_escape_string($conn, $anemia)."','".mysqli_real_escape_string($conn, $epilepsy)."','".mysqli_real_escape_string($conn, $hepatitis)."','".mysqli_real_escape_string($conn, $angina)."',
	'".mysqli_real_escape_string($conn, $aidsHiv)."','".mysqli_real_escape_string($conn, $rheumatic)."','".mysqli_real_escape_string($conn, $asthma)."','".mysqli_real_escape_string($conn, $std)."','".mysqli_real_escape_string($conn, $hayfever)."','".mysqli_real_escape_string($conn, $emphysema)."',
	'".mysqli_real_escape_string($conn, $stomach)."','".mysqli_real_escape_string($conn, $respiratory)."','".mysqli_real_escape_string($conn, $bleeding)."','".mysqli_real_escape_string($conn, $feinting)."','".mysqli_real_escape_string($conn, $hepatitis2)."','".mysqli_real_escape_string($conn, $bloodDisease)."',
	'".mysqli_real_escape_string($conn, $rapid)."','".mysqli_real_escape_string($conn, $tuberculosis)."','".mysqli_real_escape_string($conn, $headInjuries)."','".mysqli_real_escape_string($conn, $radiation)."','".mysqli_real_escape_string($conn, $swollen)."','".mysqli_real_escape_string($conn, $arthritis)."',
	'".mysqli_real_escape_string($conn, $joint)."','".mysqli_real_escape_string($conn, $kidney)."','".mysqli_real_escape_string($conn, $others)."','".mysqli_real_escape_string($conn, $heartSurguery)."','".mysqli_real_escape_string($conn, $diabetes)."',
	'".mysqli_real_escape_string($conn, $heartAttack)."','".mysqli_real_escape_string($conn, $chest)."','".mysqli_real_escape_string($conn, $thyroid)."','".mysqli_real_escape_string($conn, $stroke)."',
	'".mysqli_real_escape_string($conn, $A55)."','".mysqli_real_escape_string($conn, $A54)."','".mysqli_real_escape_string($conn, $A53)."','".mysqli_real_escape_string($conn, $A52)."','".mysqli_real_escape_string($conn, $A51)."',
	'".mysqli_real_escape_string($conn, $A61)."','".mysqli_real_escape_string($conn, $A62)."','".mysqli_real_escape_string($conn, $A63)."','".mysqli_real_escape_string($conn, $A64)."','".mysqli_real_escape_string($conn, $A65)."',
	'".mysqli_real_escape_string($conn, $B55)."','".mysqli_real_escape_string($conn, $B54)."','".mysqli_real_escape_string($conn, $B53)."','".mysqli_real_escape_string($conn, $B52)."','".mysqli_real_escape_string($conn, $B51)."',
	'".mysqli_real_escape_string($conn, $B61)."','".mysqli_real_escape_string($conn, $B62)."','".mysqli_real_escape_string($conn, $B63)."','".mysqli_real_escape_string($conn, $B64)."','".mysqli_real_escape_string($conn, $B65)."',
	'".mysqli_real_escape_string($conn, $A18)."','".mysqli_real_escape_string($conn, $A17)."','".mysqli_real_escape_string($conn, $A16)."','".mysqli_real_escape_string($conn, $A15)."','".mysqli_real_escape_string($conn, $A14)."','".mysqli_real_escape_string($conn, $A13)."','".mysqli_real_escape_string($conn, $A12)."','".mysqli_real_escape_string($conn, $A11)."',
	'".mysqli_real_escape_string($conn, $A21)."','".mysqli_real_escape_string($conn, $A22)."','".mysqli_real_escape_string($conn, $A23)."','".mysqli_real_escape_string($conn, $A24)."','".mysqli_real_escape_string($conn, $A25)."','".mysqli_real_escape_string($conn, $A26)."','".mysqli_real_escape_string($conn, $A27)."','".mysqli_real_escape_string($conn, $A28)."',
	'".mysqli_real_escape_string($conn, $B18)."','".mysqli_real_escape_string($conn, $B17)."','".mysqli_real_escape_string($conn, $B16)."','".mysqli_real_escape_string($conn, $B15)."','".mysqli_real_escape_string($conn, $B14)."','".mysqli_real_escape_string($conn, $B13)."','".mysqli_real_escape_string($conn, $B12)."','".mysqli_real_escape_string($conn, $B11)."',
	'".mysqli_real_escape_string($conn, $B21)."','".mysqli_real_escape_string($conn, $B22)."','".mysqli_real_escape_string($conn, $B23)."','".mysqli_real_escape_string($conn, $B24)."','".mysqli_real_escape_string($conn, $B25)."','".mysqli_real_escape_string($conn, $B26)."','".mysqli_real_escape_string($conn, $B27)."','".mysqli_real_escape_string($conn, $B28)."',
	'".mysqli_real_escape_string($conn, $A48)."','".mysqli_real_escape_string($conn, $A47)."','".mysqli_real_escape_string($conn, $A46)."','".mysqli_real_escape_string($conn, $A45)."','".mysqli_real_escape_string($conn, $A44)."','".mysqli_real_escape_string($conn, $A43)."','".mysqli_real_escape_string($conn, $A42)."','".mysqli_real_escape_string($conn, $A41)."',
	'".mysqli_real_escape_string($conn, $A31)."','".mysqli_real_escape_string($conn, $A32)."','".mysqli_real_escape_string($conn, $A33)."','".mysqli_real_escape_string($conn, $A34)."','".mysqli_real_escape_string($conn, $A35)."','".mysqli_real_escape_string($conn, $A36)."','".mysqli_real_escape_string($conn, $A37)."','".mysqli_real_escape_string($conn, $A38)."',
	'".mysqli_real_escape_string($conn, $B48)."','".mysqli_real_escape_string($conn, $B47)."','".mysqli_real_escape_string($conn, $B46)."','".mysqli_real_escape_string($conn, $B45)."','".mysqli_real_escape_string($conn, $B44)."','".mysqli_real_escape_string($conn, $B43)."','".mysqli_real_escape_string($conn, $B42)."','".mysqli_real_escape_string($conn, $B41)."',
	'".mysqli_real_escape_string($conn, $B31)."','".mysqli_real_escape_string($conn, $B32)."','".mysqli_real_escape_string($conn, $B33)."','".mysqli_real_escape_string($conn, $B34)."','".mysqli_real_escape_string($conn, $B35)."','".mysqli_real_escape_string($conn, $B36)."','".mysqli_real_escape_string($conn, $B37)."','".mysqli_real_escape_string($conn, $B38)."',
	'".mysqli_real_escape_string($conn, $A85)."','".mysqli_real_escape_string($conn, $A84)."','".mysqli_real_escape_string($conn, $A83)."','".mysqli_real_escape_string($conn, $A82)."','".mysqli_real_escape_string($conn, $A81)."',
	'".mysqli_real_escape_string($conn, $A71)."','".mysqli_real_escape_string($conn, $A72)."','".mysqli_real_escape_string($conn, $A73)."','".mysqli_real_escape_string($conn, $A74)."','".mysqli_real_escape_string($conn, $A75)."',
	'".mysqli_real_escape_string($conn, $B85)."','".mysqli_real_escape_string($conn, $B84)."','".mysqli_real_escape_string($conn, $B83)."','".mysqli_real_escape_string($conn, $B82)."','".mysqli_real_escape_string($conn, $B81)."',
	'".mysqli_real_escape_string($conn, $B71)."','".mysqli_real_escape_string($conn, $B72)."','".mysqli_real_escape_string($conn, $B73)."','".mysqli_real_escape_string($conn, $B74)."','".mysqli_real_escape_string($conn, $B75)."',
	'".mysqli_real_escape_string($conn, $gingivitis)."','".mysqli_real_escape_string($conn, $classMolar)."','".mysqli_real_escape_string($conn, $orthodontic)."','".mysqli_real_escape_string($conn, $clenching)."',
	'".mysqli_real_escape_string($conn, $early)."','".mysqli_real_escape_string($conn, $overjet)."','".mysqli_real_escape_string($conn, $stayplate)."','".mysqli_real_escape_string($conn, $clicking)."','".mysqli_real_escape_string($conn, $moderate)."','".mysqli_real_escape_string($conn, $overite)."','".mysqli_real_escape_string($conn, $others1)."','".mysqli_real_escape_string($conn, $tismus)."',
	'".mysqli_real_escape_string($conn, $others2)."','".mysqli_real_escape_string($conn, $muscleSpasm)."','".mysqli_real_escape_string($conn, $advance)."','".mysqli_real_escape_string($conn, $midline)."','".mysqli_real_escape_string($conn, $crossbite)."','$created')";
	 mysqli_query($conn,$sql) or trigger_error(mysqli_error($conn));
			echo "<script type='text/javascript'>success('Appointment successfuly submitted!')</script>";
			echo '<script>window.location= "records.php"</script>';
			exit();
			}
		mysqli_close($conn);

	 }
}
?>