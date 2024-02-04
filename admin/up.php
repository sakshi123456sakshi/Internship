<?php
include("conn.php");

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $catname = $_POST['CategoryName'];
    $catcode = $_POST['CategoryCode'];

    // Use backticks for table and column names, and remove unnecessary single quotes
    $sql = "UPDATE `category` SET `CategoryName`='$catname', `CategoryCode`='$catcode' WHERE id=$id";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: category.php?msg=Data Updated Successfully");
        exit; // Add exit to stop the script after the header redirection
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
}
?>
