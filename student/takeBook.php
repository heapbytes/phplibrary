<?php
include("./config/config.php");

$value = $_GET['id'];
$user = $_SESSION['uname'];



$sql = "select * from addBooks where id = '$value'";
$result = $con -> query($sql);
$check = $result->fetch_assoc();
$final = $check['quantity'] -1;
$book = $check['bk_name'];
$price = $check['price'];

$sql2 = "select * from studBooks where bk_name = '$book' and uname = '$user'";
$result2 = mysqli_query($con,$sql2);

$sql3 = "select * from passbook where uname = '$user'";
$result3 = $con -> query($sql3);
$check3 = $result3->fetch_assoc();
$updating = $check3['wallet'] - $price;
$rowc=mysqli_num_rows($result2);

if($rowc == 0){
	if($updating >= 0){
		$update = "update addBooks set quantity = '$final' where id = '$value'";
		if(mysqli_query($con, $update)) {
			$sql2 = "insert into studBooks (uname, bk_name) values('$user', '$book')";
			mysqli_query($con,$sql2);
			$passbook = "update passbook set wallet = '$updating' where uname = '$user'";
			mysqli_query($con, $passbook);
	  	header('Location: /student/bookList.php');
		}
	}
	else {
echo "<h4> Your wallet doesn't have enough money </h4>";	
}
}

else {
	echo "<h4> Your portfolio already has that book </h4> </script>";
}
?>


