<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Student - SLIET Results</title>
  <link rel="stylesheet" type="text/css" href="css/main_style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="icon" type="image" href="img/icon.png">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/student.css">
<body onload="student_home()" >
<?php session_start();

if(empty($_SESSION['user_id']) || $_SESSION['login_type']!=1)
{
   header('LOCATION : index.php');
}
?>
<div class="wrapper">
	<div class="header navbar navbar-default navbar-fixed-top">
    <div class="name">
      Sant Longowal Institute of Engineering and<br> Technology
      <hr>
      <div>Deemed University <span> (Established By Govt. Of India)</span></div>
      
      <div class="pull-right" style="margin-right: 9%; font-size: 13px; padding:-2%;">Logged in  as <a  style=" cursor: pointer;"> <div style="display: inline-block; color: #999;border-radius: 5px; font-size: 15px; background: #fff; color: #000; padding:3px 7px;" id="loginUsername">  <?php echo $_SESSION["user_id"] ?> <i style="" class="fa fa-gear"></i></div></a></div>
    </div>
  </div>
  <div class="aside navbab navbar-default navbar-fixed-top"> 
		<div class="logo">
    <img src="img/logo.jpg"></div>
    <center class="h1">
		<div  class="nav_tab"><i onclick="student_home()" id="home_ic" class="fa fa-home" aria-hidden="true"><span class="h2">Home</span></i></div>
    <div class="nav_tab" ><i onclick="student_personal()" id="faculty_ic" class="fa fa-user" aria-hidden="true"><span class="h2">Personal</span></i></div>
    <div class="nav_tab" ><i onclick="student_notice()" id="student_ic" class="fa fa-bell" aria-hidden="true"><span class="h2">Notice</span></i></div>
    <div class="nav_tab" ><i onclick="student_message()" id="sunject_ic" class="fa fa-commenting" aria-hidden="true"><span class="h2">Message</span></i></div>
    <div class="nav_tab"><i onclick="logout()" id="logout_ic" class="fa fa-power-off" aria-hidden="true"><span class="h2">Logout</span></i></div></center>
    </div></div>
  <div class="student_section" style="margin:125px 0px 0px 125px;height:3000px;">
  </div>



</body>
