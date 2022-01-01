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
      <h1 class="text-center"> Register </h1>
    </div>

    <div class="col-md-3">

    </div>

    <div class="card  border-left-primary shadow h-1000 py-6 col-md-6 lel">

      <div class="card-body ">
        <div class="row">
          <div class="col-md-12">
            <form action="" method="POST">

              <div class="form-group">
                <label for="">Enter a username</label>
                <input type="text" name="username" required id="username" class="form-control lel ">
              </div>

              <div class="form-group">
                <label for="">Enter a password</label>
                <input type="text" name="password" required id="password" class="form-control lel ">
              </div>

              <div class="form-group">
                <label for="">Confirm your password</label>
                <input type="text" name="confirmation" required id="confirmation" class="form-control lel">
              </div>

              <div class="form-group">
                <input type="submit" name="submit" value="register" class="btn btn-primary">
              </div>
              
              <div class="text">Already have an account? <a href="./index.php"> Login here </a></div>
 				
 				
 				<?php

session_start();
include('./config/config.php');


$user = $_POST['username'];
$pass = $_POST['password'];
$confirm = $_POST['confirmation'];


function validatePassword($password){
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
         return false;
     }
   else {
      return true;
          }
      }


if (isset($_POST['submit'])) {

//  $con = new mysqli($host, $username, $password, $dbname);
  $sql = "SELECT * FROM Users where uname = '$user'";
  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result);


  if ($con->query($sql) === TRUE) {
    echo "<h4>New record created successfully</h4>";
  } 

  if ($count >= 1) {
    echo " <h4>user already exist </h4>";
  } elseif ($pass == $confirm) {
  		if(validatePassword($pass) === true) {
    $sql = "insert into Users(uname, password) values('$user', '$pass')";
    $s = mysqli_query($con, $sql);
    echo "<h4> Account registered </h4>";
    }
		else {
		echo "<h3>Password must be of length 8 or greater than that including at least 1 Uppercase , Lowercase and a Number </h3>";
		}  
  }
   else {
    echo "<h4>password doesn't match</h4>";
  }
}

?>
 				
 
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>

</html>
