
<?php
session_start();

if ($_SESSION['uname'] !== "admin") {
   header('Location: /index.php?msg=2&uname=' . $_SESSION['uname']);
}
?>


<?php
include("./includes/nav.php");
include("config/config.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Library </title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .lel {
      border: 1px solid black;
      border-radius: 5px;
    }
  </style>
</head>

<body>

<div class="row" style="align-items: center; margin-top:5%; ">
<div class="col-md-12">
<h1 class="text-center"> Change Password </h1>
</div>

    <div class="col-md-3">

    </div>
    
    <div class="card  border-left-primary shadow h-1000 py-6 col-md-6 lel" >
      
      <div class="card-body ">
        <div class="row">
          <div class="col-md-12">
            <form action="" method="POST">
            
              <div class="form-group">
                <label for="">Enter your old password</label>
                <input type="text" name="opass" class="form-control lel ">
              </div>
            
              <div class="form-group">
                <label for="">Confirm your new password</label>
                <input type="text" name="npass" class="form-control lel">
              </div>
             
              <div class="form-group">
                <input type="submit" name="submit" value="Chnage Password" class="btn btn-primary">
             	
             	
             <?php
				
				if(isset($_POST['submit'])) {
				
				$username = $_SESSION['uname'];
				//$username = "admin";
				$oldpass = $_POST['opass'];
				$newpass = $_POST['npass'];
				$sql = "SELECT * FROM Users where uname = '$username'";
				
				$result = $con->query($sql);
				$check = $result->fetch_assoc();


				if($check['password'] == $oldpass){
										
					$sql = "update Users set password = '$newpass' where password = '$oldpass'";
					mysqli_query($con,$sql);
					echo "<h5 class=\"card-subtitle mb-2 text-muted\"> <br> The password was changed </h5>"; }
					
				else{
					echo "<h5 class=\"card-subtitle mb-2 text-muted\"> <br> Your old password is incorrect</h5>"; }
			}
			?>

             	
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

	</body>
	</html>
