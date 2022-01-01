
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
<h1 class="text-center"> Update Balance </h1>
</div>

    <div class="col-md-3">

    </div>
    
    <div class="card  border-left-primary shadow h-1000 py-6 col-md-6 lel" >
      
      <div class="card-body ">
        <div class="row">
          <div class="col-md-12">
            <form action="" method="POST">
            
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" class="form-control lel ">
              </div>
            
              <div class="form-group">
                <label for="">Add amount</label>
                <input type="text" name="amount" class="form-control lel">
              </div>
             
              <div class="form-group">
                <input type="submit" name="submit" value="Update the balance" class="btn btn-primary">
             	
             	
             <?php
				if(isset($_POST['submit'])) {

				$user = $_POST['user'];
				$amount = $_POST['amount'];
				$sql = "SELECT * FROM Users where uname = '$user' ";

				$result=mysqli_query($con,$sql);
				$count=mysqli_num_rows($result);


				if($count == 1){
					$sql = "select * from passbook where uname = '$user'";
					$result=mysqli_query($con,$sql);
					$count1=mysqli_num_rows($result);
					
					if ($count1 == 0){
						$sql2 = "insert into passbook (uname,wallet) values('$user', '$amount')";
						mysqli_query($con, $sql2);	
						echo "<h5 class=\"card-subtitle mb-2 text-muted\"> <br> Added the username $user with the wallet amount of $amount </h5>";
					}
					elseif ($count1 == 1){
						$sql3 = "select * from passbook where uname = '$user'";
						$result = $con->query($sql3);
						$check = $result->fetch_assoc();
						
						$final = $check['wallet'] + $amount;

						$sql = "update passbook set wallet = '$final' where uname = '$user'";
						mysqli_query($con, $sql);
						echo "<h5 class=\"card-subtitle mb-2 text-muted\"> <br> $user's wallet was added with $amount </h5>";
					}
				}
				else{

					echo "<h5 class=\"card-subtitle mb-2 text-muted\"> <br> User $user was not found in the database </h5>";}
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
