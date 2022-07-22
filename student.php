<?php include 'studentdb.php';?>
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
<div class="col-md-12 col-xs-12">

<h1 class="text-center "><img width="9%" src="images/HDMSnew.png">PUP Mulanay<br /><small style="font-size:20px">Health Declaration Monitoring System</small></h1>

</div>
</div>
<br><br><br>

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="student.php"><strong>Add Student</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="studetail.php"><strong>Student Details</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="healthcheck.php"><strong>Health Check List</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="stusearch.php"><strong>Student Search</strong></a></li>
</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<br>
<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Student Registration Form</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">All fields are required</small>
<div>

<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <input type="hidden" name="dmun" value="<?php echo $_SESSION['sadmun']; ?>" />
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input name="idno" id="idno"   type="text" class="form-control" placeholder="ID No">
	</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input name="name" id="name"   type="text" class="form-control" placeholder="Full Name">
	</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input name="add" id="add"   type="text" class="form-control" placeholder="Address">
	</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input pattern="\d{11,11}" maxlength="11" title="Envalid Mobile Number Use only Number count must be 11" required  type="tel" name="contact" id="contact"class="form-control" placeholder="Contact No.">
	</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input name="email" id="email"   type="email" class="form-control" placeholder="Email Address">
	</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input name="course" id="course"   type="text" class="form-control" placeholder="Course">
	</div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input name="b_tem" id="b_tem"   type="text" class="form-control" placeholder="Body Temperature">
	</div>
    </td>
  </tr>
  <tr>
     <td colspan="2"  style="padding:5px;" ><div class="input-group col-md-12 col-xs-12"><input name="update_date" required  type="date" class="form-control" placeholder="Date Arrived"></div></td>
  </tr>

  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button   name="submit" type="submit" class="btn" value="SUBMIT">SUBMIT</button></div></td>
    </tr>
    
<tr><td colspan="2" style="padding:5px">
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>

   </form>
</table>
</div>
</div>
</center>
<div class="panel-footer text-center">Press Submit button after completing </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admte").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>

</html>
