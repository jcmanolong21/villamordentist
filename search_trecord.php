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
     
		<div class ="form">
		<a class ="btn btn-success"href ="treatmentrecords.php">Back</a></br>
		<form action ="search_trecord.php" method ="post" />
		<input type = "search" placeholder = "Search Name" name ="search"/>
		<button class ="btn btn-success btn-xs">search</button></br>
		</form>
		<div align="right">
							<a href="addtreatment.php"><button class="btn btn-warning btn-xs ">Add Treatment Records</button></a>
							</div>
            <thead>
     	<div class='ex1'>
      <table class='table table-bordered' id ='employee_table'>  
	  
           <tr>  
                <th width ='40%'>Name</th>
					<th width ='10%'>Age</th>
					<th width ='10%'>Gender</th>
					<th width ='15%'>Open</th>
					<th width ='15%'>Delete</th>
           </tr>
            </thead>
            <tbody>
			
<?php
$conn=mysqli_connect("localhost","root","","lmvillamor");
if(isset($_POST['search'])){
$get = $_POST['search'];
if($get){
$show = "SELECT t_id, name,age,gender FROM t_records WHERE (name LIKE '%$get%') ORDER BY name ASC";
$result=mysqli_query($conn,$show);

$query1 = "SELECT COUNT(*) c FROM t_records WHERE (name LIKE '%$get%') ORDER BY name ASC";
$resulted = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($resulted);

echo "<center>";
echo "<b>Total number of search query: </b>" ,$row1['c'];
echo "</center>";

while($rows=mysqli_fetch_array($result)){
	echo "<tr>";


				echo "<tr>";
								echo '<td>'.$rows["name"].'</td>';
								echo '<td>'.$rows["age"].'</td>';
								echo '<td>'.$rows["gender"].'</td>';
								echo '<td><input type="button" name="edit" value="Open" id="' .$rows["t_id"].'" class="btn btn-info btn-xs edit_data" /></td>';
								echo '<td><input class="btn btn-danger" type=button onClick=deleteme('.$rows['t_id'].') name=Delete value=Delete></td>';		

		echo "</tr>";

}
}
}

?>
              
            </tbody>
        </table>
        
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PATIENT INFORMATION RECORD</h4>  
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
      <div class="modal-dialog" style="width:1200px;">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PATIENT INFORMATION RECORD</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                           <label><b>Name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Age
						  &emsp;&emsp;Gender</label></br>						  
                          <input type="text" name="name" id="name" size="60" />&emsp;
						  <input type ="text" name="age" id="age" size ="2"/>&emsp;
						  <input type ="text" name="gender" id="gender" size="5"/></br></br>
						  <div class="table-responsive">  
						  <table class="table table-bordered">
						  <tr>  
							<td width="2%"><center>Date</td></center>  
							<td width="1%"><center>Tooth No./s</td></center> 
							<td width="3%"><center>Procedure</center></td>  
							<td width="2%"><center>Dentists</td>
							<td width="1%"><center>Amount Charged</td></center>  
							<td width="1%"><center>Amount Paid</td></center>
							<td width="1%"><center>Balance</td>  </center>
							</tr>  
							<tr>  
							<td><center><input type ="date" name="t_date" id="t_date" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo" id="toothNo" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure" id="t_procedure" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists" id="dentists" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged" id="amountCharged" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid" id="amountPaid" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance" id="balance" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date2" id="t_date2" size ="8"/></center></td>
							 <td><center><input type ="text" name="toothNo2" id="toothNo2" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure2" id="t_procedure2" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists2" id="dentists2" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged2" id="amountCharged2" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid2" id="amountPaid2" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance2" id="balance2" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date3" id="t_date3" size ="8"/></center></td>
							 <td><center><input type ="text" name="toothNo3" id="toothNo3" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure3" id="t_procedure3" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists3" id="dentists3" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged3" id="amountCharged3" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid3" id="amountPaid3" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance3" id="balance3" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date4" id="t_date4" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo4" id="toothNo4" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure4" id="t_procedure4" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists4" id="dentists4" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged4" id="amountCharged4" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid4" id="amountPaid4" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance4" id="balance4" size ="8"/></center></td>
							</tr>
							<td><center><input type ="date" name="t_date5" id="t_date5" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo5" id="toothNo5" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure5" id="t_procedure5" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists5" id="dentists5" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged5" id="amountCharged5" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid5" id="amountPaid5" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance5" id="balance5" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date6" id="t_date6" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo6" id="toothNo6" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure6" id="t_procedure6" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists6" id="dentists6" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged6" id="amountCharged6" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid6" id="amountPaid6" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance6" id="balance6" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date7" id="t_date7" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo7" id="toothNo7" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure7" id="t_procedure7" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists7" id="dentists7" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged7" id="amountCharged7" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid7" id="amountPaid7" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance7" id="balance7" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date8" id="t_date8" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo8" id="toothNo8" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure8" id="t_procedure8" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists8" id="dentists8" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged8" id="amountCharged8" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid8" id="amountPaid8" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance8" id="balance8" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date9" id="t_date9" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo9" id="toothNo9" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure9" id="t_procedure9" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists9" id="dentists9" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged9" id="amountCharged9" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid9" id="amountPaid9" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance9" id="balance9" size ="8"/></center></td>
							 </tr>
							 <td><center><input type ="date" name="t_date10" id="t_date10" size ="8"/></center></td>
						    <td><center><input type ="text" name="toothNo10" id="toothNo10" size ="8"/></center></td>
						     <td><center><input type ="text" name="t_procedure10" id="t_procedure10" size="38"/></center></td>
							 <td><center><input type ="text" name="dentists10" id="dentists10" size ="23"/></center></td>
							 <td><center><input type ="text" name="amountCharged10" id="amountCharged10" size ="8"/></center></td>
							 <td><center><input type ="text" name="amountPaid10" id="amountPaid10" size ="8"/></center></td>
							 <td><center><input type ="text" name="balance10" id="balance10" size ="8"/></center></td>
							 </table>  
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
 window.location.href='deletetrecord.php?del_id=' +delid+'';
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
                url:"fetchrecordst.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);
					 $('#age').val(data.age);
					 $('#gender').val(data.gender);
					 $('#t_date').val(data.t_date);
					 $('#toothNo').val(data.toothNo);
					 $('#t_procedure').val(data.t_procedure);
					 $('#dentists').val(data.dentists);
					 $('#amountCharged').val(data.amountCharged);
					 $('#amountPaid').val(data.amountPaid);
					 $('#balance').val(data.balance);
					 $('#t_date2').val(data.t_date2);
					 $('#toothNo2').val(data.toothNo2);
					 $('#t_procedure2').val(data.t_procedure2);
					 $('#dentists2').val(data.dentists2);
					 $('#amountCharged2').val(data.amountCharged2);
					 $('#amountPaid2').val(data.amountPaid2);
					 $('#balance2').val(data.balance2);
					 $('#t_date3').val(data.t_date3);
					 $('#toothNo3').val(data.toothNo3);
					 $('#t_procedure3').val(data.t_procedure3);
					 $('#dentists3').val(data.dentists3);
					 $('#amountCharged3').val(data.amountCharged3);
					 $('#amountPaid3').val(data.amountPaid3);
					 $('#balance3').val(data.balance3);
					 $('#t_date4').val(data.t_date4);
					 $('#toothNo4').val(data.toothNo4);
					 $('#t_procedure4').val(data.t_procedure4);
					 $('#dentists4').val(data.dentists4);
					 $('#amountCharged4').val(data.amountCharged4);
					 $('#amountPaid4').val(data.amountPaid4);
					 $('#balance4').val(data.balance4);
					 $('#t_date5').val(data.t_date5);
					 $('#toothNo5').val(data.toothNo5);
					 $('#t_procedure5').val(data.t_procedure5);
					 $('#dentists5').val(data.dentists5);
					 $('#amountCharged5').val(data.amountCharged5);
					 $('#amountPaid5').val(data.amountPaid5);
					 $('#balance5').val(data.balance5);
					 $('#t_date6').val(data.t_date6);
					 $('#toothNo6').val(data.toothNo6);
					 $('#t_procedure6').val(data.t_procedure6);
					 $('#dentists6').val(data.dentists6);
					 $('#amountCharged6').val(data.amountCharged6);
					 $('#amountPaid6').val(data.amountPaid6);
					 $('#balance6').val(data.balance6);
					 $('#t_date7').val(data.t_date7);
					 $('#toothNo7').val(data.toothNo7);
					 $('#t_procedure7').val(data.t_procedure7);
					 $('#dentists7').val(data.dentists7);
					 $('#amountCharged7').val(data.amountCharged7);
					 $('#amountPaid7').val(data.amountPaid7);
					 $('#balance7').val(data.balance7);
					 $('#t_date8').val(data.t_date8);
					 $('#toothNo8').val(data.toothNo8);
					 $('#t_procedure8').val(data.t_procedure8);
					 $('#dentists8').val(data.dentists8);
					 $('#amountCharged8').val(data.amountCharged8);
					 $('#amountPaid8').val(data.amountPaid8);
					 $('#balance8').val(data.balance8);
					 $('#t_date9').val(data.t_date9);
					 $('#toothNo9').val(data.toothNo9);
					 $('#t_procedure9').val(data.t_procedure9);
					 $('#dentists9').val(data.dentists9);
					 $('#amountCharged9').val(data.amountCharged9);
					 $('#amountPaid9').val(data.amountPaid9);
					 $('#balance9').val(data.balance9);
					 $('#t_date10').val(data.t_date10);
					 $('#toothNo10').val(data.toothNo10);
					 $('#t_procedure10').val(data.t_procedure10);
					 $('#dentists10').val(data.dentists10);
					 $('#amountCharged10').val(data.amountCharged10);
					 $('#amountPaid10').val(data.amountPaid10);
					 $('#balance10').val(data.balance10);
                     $('#employee_id').val(data.t_id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Full Name is required");  
           }  
 
           else  
           {  
                $.ajax({  
                     url:"insertrecordst.php",  
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
                     url:"selectrecordst.php",  
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