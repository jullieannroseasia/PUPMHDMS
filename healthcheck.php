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
body
.card-header{
            background: #FFFF00;
            text-align: center;
        }
        .card-body{
            background: #fff1ef;
        }
 table th td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
            padding-right: 40px;
        }

      tbody, td{
          border: 1px solid black;
      }
      table{
        width: 100%;
        font-family:'Arial Narrow';
        font-size: 14px;
      }
 
      .a{
          display: inline;
          padding-right: 50%;
      }
      ul.demo {
          list-style-type: none;
          margin: 0;
          padding: 0;
      }
      .head, .head1, .title{
          text-align: center;
      }
      .head, .body, .sign, .demo{
        font-family:'Arial Narrow';
        font-size: 15px;
      }
      .head1{
        font-family: 'Times New Roman';
        font-size: 20px;
      }
      .title{
        font-family: 'britannic';
        font-size: 25px;
      }
      .sign{
        margin-left: 60%;
        text-align: left;
        padding-right: 20%;
      }
      .image{
        position: absolute;
        top: 3%;
        left: 20%;
      }
      img{
        width: 60%;
        height: 60%;
      }
      .card-body{
        box-sizing: border-box;
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

<h1 class="text-center ">PUP Mulanay<br /><small style="font-size:20px">Health Declaration Monitoring System</small></h1>

</div>
</div>
<br><br><br>

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid&emsp;&emsp;&emsp;">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:18px;"><a style="color:#000" href="student.php"><strong>Add Student</strong></a></li>
<li style="font-family:calibri; font-size:18px;"><a style="color:#000" href="studetail.php"><strong>Student Details</strong></a></li>
<li style="font-family:calibri; font-size:18px;"><a style="color:#000" href="healthcheck.php"><strong>Health Check List</strong></a></li>
<li style="font-family:calibri; font-size:18px;"><a style="color:#000" href="stusearch.php"><strong>Student Search&emsp;&emsp;&emsp;</strong></a></li>
</ul>
</div></div>
</head>
<br>
 <div class="container mt-5">
 <div class="card-body">
<br>
                       <div class="paper">
				<br>&emsp;&emsp;&emsp;
                            <div><style="float: left;>
                        <img src="PUP Logo.png"alt="PUP Logo" 

					style="float:left;width:130px;height:130px;">
                            
                                <p>Republic of the Philippines<br><b>POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</b><br>OFFICE OF THE VICE PRESIDENT FOR ADMINISTRATION<br><b>MEDICAL SERVICES DEPARTMENT</b><br>Mulanay, Quezon Branch</p>
                            </div> 
  <hr size="5"> <br>
                            <div class="head1">
                                <h4><p><b>HEALTH DECLARATION CHECKLIST</b></p></h4><br>
                            </div>
                            
                                <p><b>&emsp;&emsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&nbsp;For your own protection and safety of your family and the PUP community, please accomplish this form truthfully and completely. Thank you.</b></p>
                            </div>  <br><br>

                            <?php
                            if(isset($_GET['id']))
                             {
                            $applicant_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM location1 WHERE id='$applicant_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 
                               
                                    <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
  					  <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label><b>&emsp;&emsp;&emsp;ID No. </b></label><?=$applicant['id no.'];?>
							  &emsp;<input class="text" type="text" name="id_no"><br></td>
                                            
                                        </tr><br>
                                        <tr>
                                            <td><label><b>&emsp;&emsp;&emsp;Name </b></label><?=$applicant['name'];?>
							 &emsp;&nbsp;<input class="text" type="text" name="id_no"><br></td>
                                            
                                        </tr>
                                        <tr><br>
                                            <td><label><b>&emsp;&emsp;&emsp;Date </b></label><?=$applicant['date'];?>
							  &emsp;&emsp;<input class="text" type="text" name="id_no"><br></td>
                                           
                                        <tr><br>
                                            <td><label><b>&emsp;&emsp;&emsp;Body Temperature</b></label><?=$applicant['body temperature'];?></td>
                                            <input class="text" type="text" name="id_no"><br></td>
                                        </tr>
                                    </tbody>
                         
                                    <table class="table2">
                                <thead>
                                    <tr>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
	 <br>
				<br>
                                    <tr>
                                        <td colspan="2" style="text-align: center; font-size: 20px;"><b>Questions:</b></td>
                                    </tr>
                                   
                                    <tr>
                                        <td style="border-right: none;"><label><b>TRAVEL HISTORY </b><br>For the last 14 days, did you travel to a country or a place with high number of COVID-19 patients? COUNTRY, CITY, or PROVINCE:</label><br><?=$applicant['type_project'];?></td>
                                        <td style="border-left: none;">
                                        			<br>
                                                <div style="float: right; padding-right: 100px;">
                                                <input type="checkbox" name="checkbox"><b> YES</b>
                                            <br>
                                            <input type="checkbox" name="checkbox"><b> NO</b>
                                    </tr>
						
                                    <tr>
                                        <td style="border-right: none;"><label><b>FEVER</b> 38C <b>DATE OF ONSET: </b>
                                        <td style="border-left: none;">
                                        			<br>
                                                <div style="float: right; padding-right: 100px;">
                                                <input type="checkbox" name="checkbox"><b> YES</b>
                                            <br>
                                            <input type="checkbox" name="checkbox"><b> NO</b>
                                    </tr>

						 <tr>
                                        <td style="border-right: none;"><label><b>COUGH AND/OR COLDS DATE OF ONSET:</b>
                                        <td style="border-left: none;">
                                        			<br>
                                                <div style="float: right; padding-right: 100px;">
                                                <input type="checkbox" name="checkbox"><b> YES</b>
                                            <br>
                                            <input type="checkbox" name="checkbox"><b> NO</b>
                                    </tr>

						 <tr>
                                        <td style="border-right: none;"><label>Did you have any close contact or interaction with any of the following:<br>
<ul>
            <li>Individuals providing direct care, and/or working with individuals infected with COVID-19, and/or visiting or staying in the same enviroment with COVID-19 patient </li>
             
                      <td style="border-left: none;">
                                        			<br>
                                                <div style="float: right; padding-right: 100px;">
                                                <input type="checkbox" name="checkbox"><b> YES</b>
                                            <br>
                                            <input type="checkbox" name="checkbox"><b> NO</b>
						
                                    </tr>
 <tr>
                                        <td style="border-right: none;"> 
 	<ul>
            <li>In close proximity or shared the same room with a COVID-19 patient </li>
             
                      <td style="border-left: none;">
                                        			<br>
                                                <div style="float: right; padding-right: 100px;">
                                                <input type="checkbox" name="checkbox"><b> YES</b>
                                            <br>
                                            <input type="checkbox" name="checkbox"><b> NO</b>
						
                                    </tr>

				    <tr>
                                        <td style="border-right: none;"> 
 					<ul> <li>Travelled together with COVID-19 patient  </li>
				    <td style="border-left: none;"> <br>
                                    <div style="float: right; padding-right: 100px;">
                                    <input type="checkbox" name="checkbox"><b> YES</b> <br>
                                    <input type="checkbox" name="checkbox"><b> NO</b>
						
                                    </tr>

				    <tr>
                                        <td style="border-right: none;"> 
 					<ul> <li>Living with a COVID-19 patient within a 14 day period after the onset of his/her symptoms</li>
				    <td style="border-left: none;"> <br>
                                    <div style="float: right; padding-right: 100px;">
                                    <input type="checkbox" name="checkbox"><b> YES</b> <br>
                                    <input type="checkbox" name="checkbox"><b> NO</b> </tr><br><br><br>
					
					<td colspan="2" style="text-align: center; font-size: 30px;">
					<input type="submit" value="Submit"> </td>
                        
                    </div>
                                
                </div>
            </div>
        </div>
    </div>
    <script>
        function myPrint(myfrm) {
            var printdata = document.getElementById(myfrm);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
