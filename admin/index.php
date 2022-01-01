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
</head>

<body>

   <?php include('./includes/nav.php') ?>

   <br>
   <div class="container">

      <?php
         include('includes/heroCard.php');
         include('includes/cards.php');
      ?>

</body>

</html>
