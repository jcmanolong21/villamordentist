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
<!DOCTYPE html>
<html>
 <head>
  <title>Admin Area | Dashboard</title>
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
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
                <h3 class="panel-title	">Calendar</h3>
              </div>
              <div class="panel-body">
			
				<div id="calendar"></div>

			  </div>
			  </div>
			  </div>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'loaddate.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"insertdate.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"updatedate.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"updatedate.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"deletedate.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });
   
  </script>
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
 </head>
</html>