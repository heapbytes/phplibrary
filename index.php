<?php
include "config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $uname = $_POST['username'];
  $password = $_POST['password'];

  if ($uname != "" && $password != "") {

    $sql_query = "select count(*) as cntUser from Users where uname='" . $uname . "' and password='" . $password . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if ($count > 0) {
      $_SESSION['uname'] = $uname;

      if ($_SESSION['uname'] == "admin") {
        header('Location: /admin/index.php');
      } else {
        header('Location: /student/index.php');
      }
    } else {
      header('Location: index.php?msg=1');
    }
  }
}
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
      <h1 class="text-center"> Login </h1>
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

				<?php
              
              if ($_GET['msg'] == '1') {
                echo ("<b>bad password </b>");
              } else if ($_GET['msg'] == '2') {
                echo ("<b> not enough privilages </b>");
              } else if ($_GET['msg'] == '3') {
                echo ("<b> logout success </b>");
              }
              ?>

              <div class="form-group">
                <input type="submit" name="submit" value="Login" class="btn btn-primary">

              </div>
              <div class="text"> Don't have an account? <a href="./register.php"> Register here </a></div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>

</html>
