 <?php session_start() ?>
 <?php
	include('../config/config.php');
	$user = $_SESSION['uname'];
	$sql = "select * from passbook where uname = '$user'";		
 	$result = mysqli_query($con,$sql);
 	$row = mysqli_fetch_assoc($result);
 	if($row){
 		$val = $row['wallet'];
		if($val <= 0){
			$balance = 0;
		}
		else{
			$balance = $val;
		}
	} 
 ?>
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#">
         <span class="ml-2">Library Management System</span>
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item ">
                 <a class="nav-link" href="index.php"> Dashboard <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="bookList.php">All Books </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="myBooks.php">My Books</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="changePass.php">Change Password</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="../../logout.php">Logout (<?php echo $_SESSION['uname'] ?>)</a>
             </li>
             
             <li class="nav-item active">
                 <a class="nav-link" href="#">Wallet balance : <?php echo $balance . " 	INR"; ?> </a>
             </li>
             
         </ul>
     </div>
 </nav>
