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
      height: 100%;
    }
  </style>
</head>

<body>

<?php include("./includes/nav.php") ?>
<?php include("./config/config.php") ?>

  <br><br>
<h1 class="text-center"> My Books </h1>

  <div class="container">
    <div class="row ">
    <?php
      $user = $_SESSION['uname'];
	  
	  //studBooks for bk_name
	  $sql = "SELECT * FROM studBooks where uname = '$user'";
      $result = mysqli_query($con, $sql);	
      
       while ($row = mysqli_fetch_assoc($result)) { 
       	  //addBooks for price and author
       	  $thebook = $row['bk_name'];
	 	 $sql2 = "SELECT * FROM addBooks where bk_name = '$thebook'";
     	 $result2 = mysqli_query($con, $sql2);
	 	 $row2 = mysqli_fetch_assoc($result2);
       ?>

      <div class="col-md-4 my-2">
        <div class="card lel">
          <div class="card-body">
            
            <h5 class="card-title"> <?php echo "Book Name : ". $row['bk_name'] ?> </h5>
            <p class="card-text"> <?php echo "Author : " . $row2['author'] ?> </p>
            <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo $row2['price'] . " INR" ?> </h6>
            <a href="giveBook.php/?id=<?php echo $row['id']; ?>" class="btn btn-primary text-align: right" > Return </a>
         	<a href="readBook.php/?id=<?php echo $row['id']; ?>" class="btn btn-primary text-align: right" > Read </a>
          </div>    
        </div>
      </div>
     <?php } ?>
    </div>
    </div>
  
  
</body>

</html>
