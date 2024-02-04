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
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $mobileno=$_POST["mobno"];
    $address=$_POST["address"];


    $sql="INSERT INTO registration(fname,lname,username,email,password,mobno,address) VALUES('$firstname','$lastname','$username','$email','$password','$mobileno','$address')";
    $result=$connection->query($sql);

    if($result==TRUE)
    {
        echo "Register Successful!";

            header("Location:login.php");
    }
    else{
        echo "Registred Failed";
    }
// }


mysqli_close($connection);

?>