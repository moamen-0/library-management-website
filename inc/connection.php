<?php

$host="localhost";
$username="root";
$password="";
$dbname="library";
$conn =mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
    die('error'.mysqli_connect_error());
}

