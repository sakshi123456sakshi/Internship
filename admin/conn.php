<?php
$host="localhost";
$username="root";
$password="";
$database="dbhotel";
$connection= new mysqli($host,$username,$password,$database);
if($connection->connect_error)
{
    die('Connection Failed:'.$connection->connect_error);
}
?>