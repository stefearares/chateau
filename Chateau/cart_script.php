<?php
require 'cart_db.php';
require 'connection.php';
$product_name=$_POST['product_name'];
$product_author=$_POST['product_author'];
$product_price=$_POST['product_price'];
$product_image=$_POST['image_path'];


$sql="INSERT INTO login (username , pass) VALUES (?,?)";
$stmt=mysqli_stmt_init($connection);
mysqli_stmt_bind_param($stmt,"ss",$username,$hashedPwd);
mysqli_stmt_execute($stmt);
header("Location: signup_page.php?signup=success");
$_SESSION['errorMessage'] = true;
exit();