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

// if($_SERVER['REQUEST_METHOD']=="POST"){
   
    $username=$_POST["username"];
    $password=$_POST["password"];
    

    $sql1="SELECT * FROM registration WHERE username='$username' AND password='$password'";
    $result1=$connection->query($sql1);

    if($result1->num_rows>0)
    {
        $row=$result1->fetch_assoc();

        $username=$row['username'];
        $password=$row['password'];
    

    $sql="INSERT INTO log(username,password) VALUES('$username','$password')";
    $result=$connection->query($sql);

    if($result==TRUE)
    {
        echo "Data transfered Successful...";

            header("Location:login.php");
    }
    else{
        echo "Data transfered Failed";
    }
 }
mysqli_close($connection);

?>