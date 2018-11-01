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
                <h3 class="panel-title">Edit Password</h3>
              </div>
              <div class="panel-body">
                
        
                <style>
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td{
    border: 1px solid #ddd;
	text-align:center;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
	width:200px;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color:#4CAF50;
    color: white;
}


  #customers2 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers2 td{
    border: 1px solid #ddd;
	text-align:right;
    padding: 8px;
}

#customers th2 {
	width:200px;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color:#4CAF50;
    color: white;
}
input[type=text], select {
    width: 76%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect("localhost", "root", "", "lmvillamor");
} catch (Exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
	$posts[0] = $_GET['admin_id'];
    $posts[1] = $_POST['password'];
    return $posts;
}

// Edit

if(isset($_GET['admin_id']))
{
$id=$_GET['admin_id'];
$fname = "";
$query1=mysqli_query($connect, "SELECT * from adminform WHERE admin_id ='$id'");
if(isset($_POST['update']))
{
if ( empty($_POST['password'])) {
    	echo "<script type='text/javascript'>alert('Input remaining fields!')</script>";
			}
			else{
    $data = getPosts();
    if (strlen($data[1]) < 8 ) {
			    echo "<script type='text/javascript'>alert('New Password must be at least 8 characters long.')</script>";
            }
			else{
    $update_Query = "UPDATE `adminform` SET `password`='$data[1]' WHERE `admin_id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo "<script type='text/javascript'>alert('Password Successfuly Updated!')</script>";
			}else{
               echo "<script type='text/javascript'>alert('Password Not Updated!')</script>";
			}
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
			}
}
}
}
while($query2=mysqli_fetch_array($query1)){
echo "<a class ='btn btn-default' href='edit_account.php?admin_id=".$query2['admin_id']."'>Back</a>";
}

?>
<?php
if(isset($_GET['admin_id']))
{
$id=$_GET['admin_id'];
$conn=mysqli_connect("localhost", "root", "", "lmvillamor");
$query1=mysqli_query($conn, "SELECT * from adminform WHERE admin_id ='$id'");
$row = mysqli_num_rows($query1);	

while($query2=mysqli_fetch_array($query1)){
	echo "<table id = customers>";
	echo "<tr><th>Password</th>";
echo '<td>' . $query2['password'] . '</td>';
echo "</tr>";
echo "</table>";
}
}
?>
<form action="" method="post">
			<div>
			<table id = "customers2">
			<tr>
			<td><input type = "text" name = "password" value="<?php echo $fname; ?>"/></br>
			<center><input type="submit" name="update" value="Update"></center>
			
			</tr>
			</table>
            </div>
        </form>
    </section>

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
    <!-- Modals -->

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