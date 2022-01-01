<?php include("./config/config.php") ?>

<?php

$value = $_GET['id'];
$sql = "delete from addBooks where id = '$value'";

if(mysqli_query($con,$sql)){

  header('Location: /admin/bookList.php');
}
?>
