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
<h1 class="text-center"> Books list </h1>

  <div class="container">
    <div class="row ">
    <?php
	  $sql = "SELECT * FROM addBooks";
      $result = mysqli_query($con, $sql);	
      
       while ($row = mysqli_fetch_assoc($result)) { ?>

      <div class="col-md-4 my-2">
        <div class="card lel">
          <div class="card-body">
            
            <h5 class="card-title"> <?php echo "Book Name : ". $row['bk_name'] ?> </h5>
            <p class="card-text"> <?php echo "Author : " . $row['author'] ?> </p>
            <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo $row['price'] . " INR" ?> </h6>
						<?php
            	if($row['quantity'] > 0){ ?>
            <a href="#" class="card-link" style="color: green;">In Stock  (<?php echo $row['quantity']?>)</a>
            <a href="takeBook.php/?id=<?php echo $row['id']; ?>" class="btn btn-primary" > Borrow </a>
        <?php } else { ?>
        		 <a href="#" class="card-link" style="color: red;"> Out of stock (<?php echo $row['quantity']?>)</a>
       <?php } ?>
          
          </div>    
        </div>
      </div>
     <?php } ?>
    </div>
    </div>
  
  
</body>

</html>
