<?php
session_start();

if ($_SESSION['uname'] !== "admin") {
   header('Location: /index.php?msg=2&uname=' . $_SESSION['uname']);
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
<?php include("./includes/nav.php") ?>


  <br><br>
  

  <div class="container">
    <h1 class="text-center"> Add Book </h1>
    <div class="card  border-left-primary shadow h-1000 py-10" style="box-shadow: 1px 14px 46px -25px rgba(0,0,0,0.75);
-webkit-box-shadow: 1px 14px 46px -25px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 14px 46px -25px rgba(0,0,0,0.75);
border: 0px solid black!important;
      border-radius: 5px;">
      
      <div class="card-body ">
        <div class="row">

          <div class="col-md-6">
            <div style="display:inline-block;vertical-align:top;">
              <img src="/images/cwit.png" style="width:500px" alt="img" />
            </div>

          </div>
          <div class="col-md-6">
            <form action="" method="POST">
            
              <div class="form-group">
                <label for="">Book Name</label>
                <input type="text" name="book_name" class="form-control">
              </div>
             
              <div class="form-group">
                <label for="">Author Name</label>
                <input type="text" name="author_name" class="form-control ">
              </div>
             
              <div class="form-group">
                <label for="">Book Quantity</label>
                <input type="text" name="book_quantity" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="">Book Price</label>
                <input type="text" name="book_price" class="form-control ">
              </div>


              <div class="form-group">
                <input type="submit" name="submit" value="Add Book" class="btn btn-primary">
              </div>
            </form>
          
          
          <?php

			require ("../config/config.php");
			if(isset($_POST['submit'])) {

			$bkname = $_POST['book_name'];
			$author = $_POST['author_name'];
			$quantity =  $_POST['book_quantity'] ;
			$price = $_POST['book_price'] ;


			$sql_query = "insert into addBooks (bk_name, author, quantity, price) values('$bkname', '$author', '$quantity', '$price')";

			if (mysqli_query($con, $sql_query)) {
  				echo "<h2> New record created successfully </h2>";}
 
			else {
  				echo "Error: " . $sql_query . "<br>" . mysqli_error($con);	}
			}

		?>
          	
          
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
