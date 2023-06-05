<?php

$servername="localhost";
$dBusername="root";
$dBpassword="";
$dBname="shop";

$conn=mysqli_connect($servername,$dBusername,$dBpassword,'shop');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}