<?php

include("./config/config.php");

$value = $_GET['id'];

$sql = "select * from studBooks where id = '$value'";
$result = $con -> query($sql);
$check = $result->fetch_assoc();
$user = $check['uname'];
$book = $check['bk_name'];



$sql4 = "select * from addBooks where bk_name = '$book'";
$result2 = $con -> query($sql4);
$check2 = $result2->fetch_assoc();
$addme = $check2['quantity'];

$sql2 = "insert into returnBooks(uname, bk_name) values('$user', '$book')";
if(mysqli_query($con,$sql2)){
    $sql3 = "delete from studBooks where id = '$value'";
    mysqli_query($con,$sql3);
    
    $okdoit = $addme + 1;
    $sql5 = "update addBooks set quantity = '$okdoit' where bk_name = '$book'";
    mysqli_query($con, $sql5);
    header('Location: /student/bookList.php');

}

?>


