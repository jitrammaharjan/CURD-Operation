<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sample";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(!$conn){

    die("connection error".mysqli_error());

}

?>