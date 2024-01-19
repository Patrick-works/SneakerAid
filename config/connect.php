<?php
$username="root";
$host="localhost";
$password="";
$database_name="sneaker_db";

$con= mysqli_connect($host, $username,$password,$database_name);
if(mysqli_connect_errno()){
    die("Couldn't connect to the database".mysqli_error($conn));
}
?>