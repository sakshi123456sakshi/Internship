<?php
include("conn.php");

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $catname = $_POST['CategoryName'];
    $prodname = $_POST['ProductName'];
    $price = $_POST['ProductPrice'];

    // Use backticks for table and column names, and remove unnecessary single quotes
    $sql = "UPDATE `menu` SET `CategoryName`='$catname', `ProductName`='$prodname', `ProductPrice`='$price' WHERE id=$id";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: registredmenu.php?msg=Data Updated Successfully");
        exit; // Add exit to stop the script after the header redirection
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
}
?>
