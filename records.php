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
								echo '<td><input type="button" name="edit" value="Edit" id="' .$row["id"].'" class="btn btn-info btn-xs edit_data" /></td>';
								echo '<td><input type="button" name="view" value="View" id="' .$row["id"].'" class="btn btn-info btn-xs view_data" /></td>'; 
								echo '<td><input class="btn btn-danger" type=button onClick=deleteme('.$row['id'].') name=Delete value=Delete></td>';		

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
      <div class="modal-dialog" style="width:850px;">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PATIENT INFORMATION RECORD</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">
                          <label><b>&emsp;&emsp;&emsp;&emsp;First Name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Last Name
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Middle Name</label></br>						  
                          &emsp;&emsp;&emsp;&emsp;<input type="text" name="fname" id="fname" size="20" />&emsp;
						  <input type ="text" name="lname" id="lname" size ="20">&emsp;
						  <input type ="text" name="mname" id="mname" size="20"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Birthdate</label>
						  <input type="date" name="bday" id="bday" size="20">
						  <label>Age</label>
						  <input type="text" name="age" id="age" size="5"> 
						  <label>Sex</label>  
                          <select name="sex" id="sex" >  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>
                          </select></br></br> 
						  <label>&emsp;&emsp;&emsp;&emsp;Religion&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp; Nationality
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Nick Name</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="religion" id="religion" size="20">&emsp;
						  <input type="text" name="nationality" id="nationality" size="20">&emsp;
						  <input type="text" name="nickname" id="nickname" size="20"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Home Address&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp; 
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;Home No.</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="homeAddress" id="homeAddress" size="48">&ensp;&nbsp;
						  <input type="text" name="homeNo" id="homeNo" size="20"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Occupation&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; Office No.
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; Fax No.</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="occupation1" id="occupation1" size="20">&emsp;
						  <input type="text" name="officeNo" id="officeNo" size="20">&emsp;
						  <input type="text" name="faxNo" id="faxNo" size="20"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Dental Insurance&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp; 
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;&nbsp;&ensp;Mobile No</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="dentInsurance" id="dentInsurance" size="48">&ensp;&nbsp;
						  <input type="text" name="mobileNo" id="mobileNo" size="20"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Effective Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Email Address</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="date" name="effectiveDate" id="effectiveDate" size="20">&emsp;&emsp;&emsp;&ensp;&emsp;
						  <input type="text" name="email" id="email" size="20"></br></br>
						  <h4 class="modal-title"><center>FOR MINORS</center></h4></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Parent/Guardian</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="parents" id="parents" size="48"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Occupation</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="occupation2" id="occupation2" size="48"></br></br>
						  <h4 class="modal-title"><center>DENTAL HISTORY</center></h4></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Previous Dr.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&ensp;Last Visit</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="prevDr" id="prevDr" size="48">&emsp; 
						  <input type="date" name="lastVisit" id="lastVisit" size="15"> </br></br>
						  <h4 class="modal-title"><center>MEDICAL HISTORY</center></h4></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Physician&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
						  Specialty if possible,</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="physician" id="physician" size="35">&ensp;
						  <input type="text" name="specialty" id="specialty" size="33"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;Office Address&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&ensp;Office No.</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="officeAddress" id="officeAddress" size="35">&ensp;
						  <input type="text" name="officeNum" id="officeNum" size="33"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;1. Are you in a good health?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>  
                          <select name="goodHealth" id="goodHealth">
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;2. Are you under medical treatment now?&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;&emsp;&emsp;</label>  
                          <select name="medTreatment" id="medTreatment">  
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br>
						  <label>&emsp;&emsp;&emsp;&emsp;If so, what is the condition being treated?</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="medTreatment2" id="medTreatment2" size="40"></br> </br>
						  <label>&emsp;&emsp;&emsp;&emsp;3. Have you had serious illness or surgical operation?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  </label>  
                          <select name="illness" id="illness"> 
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br>
						  <label>&emsp;&emsp;&emsp;&emsp;If so, what illness or operation?</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="illness2" id="illness2" size ="40"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;4. Have you ever been hospitalized?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&nbsp;</label>  
                          <select name="hospitalized" id="hospitalized"> 
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br>
						  <label>&emsp;&emsp;&emsp;&emsp;If so, when and why?</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="hospitalized2" id="hospitalized2" size="40"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;5. Are you taking any prescription/non-prescription medication?&emsp;&ensp;&nbsp;</label>  
                          <select name="prescription" id="prescription">  
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br>
						  <label>&emsp;&emsp;&emsp;&emsp;If so, please specify,</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="prescription2" id="prescription2" size ="40"></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;6. Do you use tobacco products?&nbsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>  
                          <select name="tobacco" id="tobacco">  
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br></br>
						  <label>&emsp;&emsp;&emsp;&emsp;7. Do you use alcohol, cocaine or other dangerous drugs?&emsp;&emsp;&emsp;&emsp;</label>  
                          <select name="alcohol" id="alcohol">
                               <option value="Yes">Yes</option>  
                               <option value="No">No</option>
                          </select></br></br>
						  <b>&emsp;&emsp;&emsp;&emsp;8. Are you allergic to any of the following?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &ensp;&nbsp;
					<select name="allergic" id="allergic">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br>
						<input type="checkbox" name="opt1" id="opt1" value="Local Anesthetic"/>Local Anesthetic
						<label for="opt2"><input type="checkbox" name="opt2" id="opt2" value="Local Anesthetic">
						</br>
						<label>&emsp;&emsp;&emsp;&emsp;9. Bleeding Time:</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="bleedingTime2" id="bleedingTime2" size ="40"></br>	  
							<b>&emsp;&emsp;&emsp;&emsp;10. For women only:</br>
<b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Are you pregnant?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;
					<select name="woman1" id="woman1">
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Are you nursing?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
					<select name="woman2" id="woman2">
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
<b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Are you taking birth controll pills?&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&ensp;
					<select name="woman3" id="woman3">
						<option value=""></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select></br></br>
						<label>&emsp;&emsp;&emsp;&emsp;11. Blood Type</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="bloodType" id="bloodType"></br></br>
						<label>&emsp;&emsp;&emsp;&emsp;12. Blood Pressure</label></br>
						  &emsp;&emsp;&emsp;&emsp;<input type="text" name="bloodPressure" id="bloodPressure"></br></br>
						  
					<center>DENTAL RECORD CHART</center></br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;STATUS&ensp;<input type="text" name="A55" id ="A55" size="1"><input type="text" name="A54" id ="A54" size="1"><input type="text" name="A53" id ="A53" size="1"><input type="text" name="A52" id ="A52" size="1"><input type="text" name="A51" id ="A51" size="1">
					&emsp;<input type="text" name="A61" id ="A61" size="1"><input type="text" name="A62" id ="A62" size="1"><input type="text" name="A63" id ="A63" size="1"><input type="text" name="A64" id ="A64" size="1"><input type="text" name="A65" id ="A65" size="1">
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RIGHT &ensp;&ensp;<input type="text" name="B55" id ="B55" size="1"><input type="text" name="B54" id ="B54" size="1"><input type="text" name="B53" id ="B53" size="1"><input type="text" name="B52" id ="B52" size="1"><input type="text" name="B51" id ="B51" size="1">
					&emsp;<input type="text" name="B61" id ="B61" size="1"><input type="text" name="B62" id ="B62" size="1"><input type="text" name="B63" id ="B63" size="1"><input type="text" name="B64" id ="B64" size="1"><input type="text" name="B65" id ="B65" size="1">&emsp; LEFT
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;55&ensp;&emsp;54&nbsp;&emsp;&ensp;53&ensp;&emsp;52&ensp;&emsp;51
					&emsp;&ensp;&nbsp;61&ensp;&emsp;62&nbsp;&emsp;&nbsp;63 &ensp;&emsp;64&ensp;&emsp;65
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					</br>&emsp;&emsp;TEMPORARY TEETH</br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="A18" id ="A18" size="1"><input type="text" name="A17" id ="A17" size="1"><input type="text" name="A16" id ="A16" size="1"><input type="text" name="A15" id ="A15" size="1"><input type="text" name="A14" id ="A14" size="1"><input type="text" name="A13" id ="A13" size="1"><input type="text" name="A12" id ="A12" size="1"><input type="text" name="A11" id ="A11" size="1">&emsp;
					<input type="text" name="A21" id ="A21" size="1"><input type="text" name="A22" id ="A22" size="1"><input type="text" name="A23" id ="A23" size="1"><input type="text" name="A24" id ="A24" size="1"><input type="text" name="A25" id ="A25" size="1"><input type="text" name="A26" id ="A26" size="1"><input type="text" name="A27" id ="A27" size="1"><input type="text" name="A28" id ="A28" size="1"></br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="B18" id ="B18" size="1"><input type="text" name="B17" id ="B17" size="1"><input type="text" name="B16" id ="B16" size="1"><input type="text" name="B15" id ="B15" size="1"><input type="text" name="B14" id ="B14" size="1"><input type="text" name="B13" id ="B13" size="1"><input type="text" name="B12" id ="B12" size="1"><input type="text" name="B11" id ="B11" size="1">&emsp;
					<input type="text" name="B21" id ="B21" size="1"><input type="text" name="B22" id ="B22" size="1"><input type="text" name="B23" id ="B23" size="1"><input type="text" name="B24" id ="B24" size="1"><input type="text" name="B25" id ="B25" size="1"><input type="text" name="B26" id ="B26" size="1"><input type="text" name="B27" id ="B27" size="1"><input type="text" name="B28" id ="B28" size="1"></br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;18&emsp;&ensp;17&emsp;&ensp;16&emsp;&ensp;15&emsp;&ensp;14&emsp;&ensp;13&emsp;&ensp;12&emsp;&ensp;11
					&emsp;&emsp;&ensp;21&emsp;&ensp;22&emsp;&nbsp;23&emsp;&ensp;24&emsp;&ensp;25&emsp;&ensp;26&emsp;&ensp;27&emsp;&ensp;28</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp; <input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					</br>
					<center><label></br>&emsp;&emsp;PERMANENT TEETH</br></br></label></center>
					&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp; <input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&emsp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&nbsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;48&emsp;&ensp; 47&emsp;&ensp;46&emsp;&ensp;45&emsp;&ensp;44&emsp;&ensp;43&emsp;&ensp;42&emsp;&ensp;41
					&emsp;&emsp;&nbsp;31&emsp;&ensp;32&emsp;&nbsp;33&emsp;&ensp;34&emsp;&nbsp;35&emsp;&ensp;36&emsp;&ensp;&nbsp;37&emsp;&nbsp;38</br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="A48" id ="A48" size="1"><input type="text" name="A47" id ="A47" size="1"><input type="text" name="A46" id ="A46" size="1"><input type="text" name="A45" id ="A45" size="1"><input type="text" name="A44" id ="A44" size="1"><input type="text" name="A43" id ="A43" size="1"><input type="text" name="A42" id ="A42" size="1"><input type="text" name="A41" id ="A41" size="1">&emsp;
					<input type="text" name="A31" id ="A31" size="1"><input type="text" name="A32" id ="A32" size="1"><input type="text" name="A33" id ="A33" size="1"><input type="text" name="A34" id ="A34" size="1"><input type="text" name="A35" id ="A35" size="1"><input type="text" name="A36" id ="A36" size="1"><input type="text" name="A37" id ="A37" size="1"><input type="text" name="A38" id ="A38" size="1"></br>
					&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input type="text" name="B48" id ="B48" size="1"><input type="text" name="B47" id ="B47" size="1"><input type="text" name="B46" id ="B46" size="1"><input type="text" name="B45" id ="B45" size="1"><input type="text" name="B44" id ="B44" size="1"><input type="text" name="B43" id ="B43" size="1"><input type="text" name="B42" id ="B42" size="1"><input type="text" name="B41" id ="B41" size="1">&emsp;
					<input type="text" name="B31" id ="B31" size="1"><input type="text" name="B32" id ="B32" size="1"><input type="text" name="B33" id ="B33" size="1"><input type="text" name="B34" id ="B34" size="1"><input type="text" name="B35" id ="B35" size="1"><input type="text" name="B36" id ="B36" size="1"><input type="text" name="B37" id ="B37" size="1"><input type="text" name="B38" id ="B38" size="1">
					</br>&emsp;&emsp;TEMPORARY TEETH</br></br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="image" src="logoteeth.png" width="30" height="30">&ensp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&nbsp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30"> &ensp;<input type="image" src="logoteeth.png" width="30" height="30">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;85&ensp;&emsp;84&nbsp;&emsp;&nbsp;83&nbsp;&emsp;82&ensp;&emsp;81
					&emsp;&emsp;71&ensp;&emsp;72&nbsp;&emsp;&nbsp;73&ensp;&emsp;74&ensp;&emsp;75</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;STATUS&nbsp;<input type="text" name="A85" id ="A85" size="1"><input type="text" name="A84" id ="A84" size="1"><input type="text" name="A83" id ="A83" size="1"><input type="text" name="A82" id ="A82" size="1"><input type="text" name="A81" id ="A81" size="1">
					&emsp;<input type="text" name="A71" id ="A71" size="1"><input type="text" name="A72" id ="A72" size="1"><input type="text" name="A73" id ="A73" size="1"><input type="text" name="A74" id ="A74" size="1"><input type="text" name="A75" id ="A75" size="1">
					</br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RIGHT&ensp;&ensp;<input type="text" name="B85" id ="B85" size="1"><input type="text" name="B84" id ="B84" size="1"><input type="text" name="B83" id ="B83" size="1"><input type="text" name="B82" id ="B82" size="1"><input type="text" name="B81" id ="B81" size="1">
					&emsp;<input type="text" name="B71" id ="B71" size="1"><input type="text" name="B72" id ="B72" size="1"><input type="text" name="B73" id ="B73" size="1"><input type="text" name="B74" id ="B74" size="1"><input type="text" name="B75" id ="B75" size="1">&emsp; LEFT
					</br></br>Legend:&emsp;&emsp;Condition&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Resotoration & Prosthetics&emsp;Surgery</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;D- Decayed(Caries Indicated for Filling)&emsp;J- Jacket Crown&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;X- Extraction due to Caries</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;M- Missing due to Caries&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; A- Amalgam Filling&emsp;&emsp;&emsp;&emsp;&nbsp;XO- Extraction due to Other</br>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;F- Filled&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;AB- Abutment&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Causes</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;I- Caries Indicated for Extraction&emsp;&emsp;&emsp;&emsp;&nbsp;P- Pontic&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;PT- Present Teeth</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;RF- Root Fragment&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;In- Inlay&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Cm- Congenitally Missing</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;MO- Missing due to Other Causes&emsp;&emsp;&emsp;&ensp;Fx- Fixed Cure Composite&emsp;Sp- Supernumerary</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;Im- Impacted Tooth&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;S- Sealants</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&nbsp;Rm- Removable Denture</br></br>
					Periodontal Screening:&emsp;&emsp;&emsp;&ensp;Occlusion&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Appliances:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TMD:</br>
					<input type="text" name="gingivitis" size="8">&nbsp;Gingivitis&emsp;&emsp;&emsp;&ensp;<input type="text" name="classMolar" size="8">&nbsp;Class(Molar)&ensp;&ensp;<input type="text" name="orthodontic" size="8">&nbsp;Orthodontic&emsp;<input type="text" name="clenching" size="8">&nbsp;Clenching</br></br>
					<input type="text" name="early" size="8">&nbsp;Early&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text" name="overjet" size="8">&nbsp;Overjet&emsp;&emsp;&emsp;&ensp;<input type="text" name="stayplate" size="8">&nbsp;Stayplate&emsp;&emsp;<input type="text" name="clicking" size="8">&nbsp;Clicking
					</br>&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Periodintisis</br>
					</br>
					<input type="text" name="moderate" size="8">&nbsp;Moderate&emsp;&emsp;&emsp;&nbsp;<input type="text" name="overite" size="8">&nbsp;Overite&emsp;&emsp;&emsp;&ensp;<input type="text" name="others1" size="8">&nbsp;Others&emsp;&emsp;&ensp;&ensp;&nbsp;<input type="text" name="tismus" size="8">&nbsp;Tismus</br></br>
					&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Periodintisis&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<input type="text" name="others2" size="16">&emsp;&emsp;&emsp;<input type="text" name="muscleSpasm" size="8">&nbsp;Muscle</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Spasm</br>
					<input type="text" name="advance" size="8">&nbsp;Advance&emsp;&emsp;&emsp;&ensp;&nbsp;<input type="text" name="midline" size="8">&nbsp; Midline Deviation</br>
					&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Periodintisis</br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;<input type="text" name="crossbite" size="8">&nbsp;Crossbite</br>
					
						  
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
$('#checkboxes input:checked').each(function() {
    employee_id.push($(this).attr('id'));
});
           $.ajax({	
                url:"fetchrecords2.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){ 			
                     $('#fname').val(data.fname);  
                     $('#lname').val(data.lname);  
                     $('#mname').val(data.mname); 
					 $('#bday').val(data.bday);
					 $('#age').val(data.age);
					 $('#sex').val(data.sex);
					 $('#religion').val(data.religion);
					 $('#nationality').val(data.nationality);
					 $('#nickname').val(data.nickname);
					 $('#homeAddress').val(data.homeAddress);
					 $('#homeNo').val(data.homeNo);
					 $('#occupation1').val(data.occupation1);
					 $('#officeNo').val(data.officeNo);
					 $('#faxNo').val(data.faxNo);
					 $('#dentInsurance').val(data.dentInsurance);
					 $('#mobileNo').val(data.mobileNo);
					 $('#effectiveDate').val(data.effectiveDate);
					 $('#email').val(data.email);
					 $('#parents').val(data.parents);
					 $('#occupation2').val(data.occupation2);
					 $('#prevDr').val(data.prevDr);
					 $('#lastVisit').val(data.lastVisit);
					 $('#physician').val(data.physician);
					 $('#specialty').val(data.specialty);
					 $('#officeAddress').val(data.officeAddress);
					 $('#officeNum').val(data.officeNum);
					 $('#goodHealth').val(data.goodHealth);
					 $('#medTreatment').val(data.medTreatment);
					 $('#medTreatment2').val(data.medTreatment2);
					 $('#illness').val(data.illness);
					 $('#illness2').val(data.illness2);
					 $('#hospitalized').val(data.hospitalized);
					 $('#hospitalized2').val(data.hospitalized2);
					 $('#prescription').val(data.prescription);
					 $('#prescription2').val(data.prescription2);
					 $('#tobacco').val(data.tobacco);
					 $('#alcohol').val(data.alcohol);
					 $('#allergic').val(data.allergic);
					 $('#opt1').val(data.opt1);
					 
					 $('#bleedingTime2').val(data.bleedingTime2);
					 $('#woman1').val(data.woman1);
					 $('#woman2').val(data.woman2);
					 $('#woman3').val(data.woman3);
					 $('#bloodType').val(data.bloodType);
					 $('#bloodPressure').val(data.bloodPressure);
					 $('#A55').val(data.A55);
					 $('#A54').val(data.A54);
					 $('#A53').val(data.A53);
					 $('#A52').val(data.A52);
					 $('#A51').val(data.A51);
					 $('#A61').val(data.A61);
					 $('#A62').val(data.A62);
					 $('#A63').val(data.A63);
					 $('#A64').val(data.A64);
					 $('#A65').val(data.A65);
					 $('#B55').val(data.B55);
					 $('#B54').val(data.B54);
					 $('#B53').val(data.B53);
					 $('#B52').val(data.B52);
					 $('#B51').val(data.B51);
					 $('#B61').val(data.B61);
					 $('#B62').val(data.B62);
					 $('#B63').val(data.B63);
					 $('#B64').val(data.B64);
					 $('#B65').val(data.B65);
					 $('#A18').val(data.A18);
					 $('#A17').val(data.A17);
					 $('#A16').val(data.A16);
					 $('#A15').val(data.A15);
					 $('#A14').val(data.A14);
					 $('#A13').val(data.A13);
					 $('#A12').val(data.A12);
					 $('#A11').val(data.A11);
					 $('#A21').val(data.A21);
					 $('#A22').val(data.A22);
					 $('#A23').val(data.A23);
					 $('#A24').val(data.A24);
					 $('#A25').val(data.A25);
					 $('#A26').val(data.A26);
					 $('#A27').val(data.A27);
					 $('#A28').val(data.A28);
					 $('#B18').val(data.B18);
					 $('#B17').val(data.B17);
					 $('#B16').val(data.B16);
					 $('#B15').val(data.B15);
					 $('#B14').val(data.B14);
					 $('#B13').val(data.B13);
					 $('#B12').val(data.B12);
					 $('#B11').val(data.B11);
					 $('#B21').val(data.B21);
					 $('#B22').val(data.B22);
					 $('#B23').val(data.B23);
					 $('#B24').val(data.B24);
					 $('#B25').val(data.B25);
					 $('#B26').val(data.B26);
					 $('#B27').val(data.B27);
					 $('#B28').val(data.B28);
					 $('#A48').val(data.A48);
					 $('#A47').val(data.A47);
					 $('#A46').val(data.A46);
					 $('#A45').val(data.A45);
					 $('#A44').val(data.A44);
					 $('#A43').val(data.A43);
					 $('#A42').val(data.A42);
					 $('#A41').val(data.A41);
					 $('#A31').val(data.A31);
					 $('#A32').val(data.A32);
					 $('#A33').val(data.A33);
					 $('#A34').val(data.A34);
					 $('#A35').val(data.A35);
					 $('#A36').val(data.A36);
					 $('#A37').val(data.A37);
					 $('#A38').val(data.A38);
					 $('#B48').val(data.B48);
					 $('#B47').val(data.B47);
					 $('#B46').val(data.B46);
					 $('#B45').val(data.B45);
					 $('#B44').val(data.B44);
					 $('#B43').val(data.B43);
					 $('#B42').val(data.B42);
					 $('#B41').val(data.B41);				 
					 $('#B31').val(data.B31);
					 $('#B32').val(data.B32);
					 $('#B33').val(data.B33);
					 $('#B34').val(data.B34);
					 $('#B35').val(data.B35);
					 $('#B36').val(data.B36);
					 $('#B37').val(data.B37);
					 $('#B38').val(data.B38);
					 $('#A85').val(data.A85);
					 $('#A84').val(data.A84);
					 $('#A83').val(data.A83);
					 $('#A82').val(data.A82);
					 $('#A81').val(data.A81);
					 $('#A71').val(data.A71);
					 $('#A72').val(data.A72);
					 $('#A73').val(data.A73);
					 $('#A74').val(data.A74);
					 $('#A75').val(data.A75);
					 $('#B85').val(data.B85);
					 $('#B84').val(data.B84);
					 $('#B83').val(data.B83);
					 $('#B82').val(data.B82);
					 $('#B81').val(data.B81);
					 $('#B71').val(data.B71);
					 $('#B72').val(data.B72);
					 $('#B73').val(data.B73);
					 $('#B74').val(data.B74);
					 $('#B75').val(data.B75);
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

<script>
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