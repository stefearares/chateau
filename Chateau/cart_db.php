<?php

$servername="localhost";
$dBusername="root";
$dBpassword="";
$dBname="cart";

$connection=mysqli_connect($servername,$dBusername,$dBpassword,'cart');

if(!$connection){
    die("Connection failed: ".mysqli_connect_error());
}