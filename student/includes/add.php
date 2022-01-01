 <?php
	
	include('../config/config.php');
	$user = 'admin';
	$sql = "select * from passbook where uname = '$user'";		
 	$result = mysqli_query($con,$sql);
 	$row = mysqli_fetch_assoc($result);
 	$balance = $row['wallet'];
 	echo $balance;
 ?>
 
