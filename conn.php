<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'e-libary';

$dbb = mysqli_connect($host,$username,$password,$database);

if(!$dbb){
    die("Connection failed:" . mysqli_connect_error());
}

?>