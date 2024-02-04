<?php
$host='localhost';
$username='root';
$password='';
$database='dbhotel';
 $conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error)
{
    die("Could not connect: " .$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="SELECT *FROM login1 WHERE username='$username' AND password='$password'";
    $result=$conn->query($sql);
if($result->num_rows > 0)
{
echo "login successfully";
  header("Location:admin.php");

// echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>"; 

}
else{
    echo "<script>
                alert('Your account was disabled Approach Admin');document.location ='login1.php';
                </script>";
    echo "Invalid  username or password";
}
}
mysqli_close($conn);
?>