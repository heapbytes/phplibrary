<?php include("./config/config.php") ?>

<?php

$value = $_GET['id'];

$sql = "select * from studBooks where id = '$value'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$book = $row['bk_name'];

echo "<h4> This is $book book  </h4>";
?>
