<?php
$servername="localhost";
$username="root";
$password="";
$dBname="products";
$conn=mysqli_connect($servername,$username,$password,'products');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

