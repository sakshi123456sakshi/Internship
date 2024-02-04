<?php
include ("conn.php");
$id = $_GET["id"];
$sql = "DELETE FROM `menu` WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result) {
  header("Location: registredmenu.php?msg=Data deleted successfully");
  
} else {
  echo "Failed: " . mysqli_error($connection);
}