
<?php
include 'stuconnect.php';

if(isset($_POST['submit']))
  {
	  $smf_name  = $_POST['name'];
	  $sma_add   = $_POST['add'];
	  $sm_type   = $_POST['b_tem'];
	  $sm_cont   = $_POST['contact'];
	  $sm_em	 = $_POST['email'];
	  $update_date = $_POST['update_date'];
	  {
		      $query = "INSERT INTO `staff`
		      (`name`,`add`, `b_tem`, `contact`, `email`,`update_date`)
		       VALUES
		      ('$smf_name','$sm_type','$sm_cont','$sm_em','$sma_add','$update_date')";

	  		   if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
	  		}
		}
	 }

  
?>
