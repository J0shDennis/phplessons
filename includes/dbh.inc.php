<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn){
    die("connection failled: ".mysqli_connect_error());
}