
<?php include 'stuconnect.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center "><img width="9%" src="images/HDMSnew.png">PUP Mulanay<br /><small style="font-size:20px">Health Declaration Monitoring System</small></h1>
</div>
</div><br><br><br>
<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
  <ul class="nav  nav-justified" style="background-color:#FFF;">
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="student.php"><strong>Add Student</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="studetail.php"><strong>Student Details</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="healthcheck.php"><strong>Health Check List</strong></a></li>
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="stusearch.php"><strong>Student Search</strong></a></li>
  </ul>
</div></div>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3">
<br />
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Search for Student Info</h3></div>
</div>
<table style="background-color: rgba(255,255,255,0.0);" class="table table-responsive" width="500" border="0"><form action="" method="post">
  <tr>
    <td><input style="font-size:12px" type="text" name="searvalu" class="form-control" placeholder="Enter ID No / Name / Mobile Number/ Email / Course" /></td>
  </tr><tr align="center">
    <td align="center"><button name="filter"  type="submit" class="btn  btn-default btn-block">Search</button></td>
  </tr></form>
</table>
</div>
</div>
</div>
<div class="container">
<div class="row">
<?php
if (isset($_POST['filter'])){
	$search = ($_POST['searvalu']);
	$self_query = "SELECT * FROM `staff` WHERE concat(`idno`, `name`,`add`,`contact`,`course`) like '%$search%' ORDER BY `staffID` DESC";
	$result = mysqli_query($con,$self_query);

	while($row = mysqli_fetch_array($result)) { ?>

<div style="padding:20px;  margin:5px; border-radius:5px; background-color:rgba(255, 255, 255, 0.3);"class="col-md-5 col-md-push-1">

<h4 style=" color:">
Student Reg.No : <?php echo $row["staffID"]; ?><br />
Student Name : <?php echo $row["name"]; ?>
</h4>

<dl class="dl-horizontal">

<dt style="font-size:12px;"><strong>ID No       : </strong>
<dd style="font-size:12px;"><?php echo $row["idno"]; ?></dd>

<dt style="font-size:12px;"><strong>Name       : </strong>
<dd style="font-size:12px;"><?php echo $row["name"]; ?></dd>

<dt style="font-size:12px;"><strong>Address: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["add"]; ?></dd>

<dt style="font-size:12px;"><strong>Contact: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["contact"]; ?></dd>

<dt style="font-size:12px;"><strong>Email: </strong></dt></dt>
<dd style="font-size:12px;"><?php echo $row["email"]; ?></dd>

<dt style="font-size:12px;"><strong>Course: </strong></dt></dt>
<dd style="font-size:12px;"><?php echo $row["course"]; ?></dd>

<dt style="font-size:12px;"><strong>Time Arrived: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["update_date"]; ?></dd>

<dt style="font-size:12px;"><strong>Body Temperature: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["b_tem"]; ?></dd>

</dl>

<ul style="" class="nav nav-justified">
<li style="background-color:rgba(255, 255, 255, 0.3);"><a  href="supadmst.php" name="ad">Student Details Modifications</a></li>
</ul>

</div>

<?php }} ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>
</html>
