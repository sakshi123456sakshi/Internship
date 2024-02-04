<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $catname = isset($_POST["CategoryName"]) ? $_POST["CategoryName"] : "";
    $prodname = isset($_POST["ProductName"]) ? $_POST["ProductName"] : "";
    $price = isset($_POST["ProductPrice"]) ? $_POST["ProductPrice"] : "";

    // Validate input
    if (empty($catname) || empty($prodname) || empty($price)) {
        echo "Please provide both CategoryName, ProductName, and ProductPrice.";
    } else {
        // Use prepared statement to prevent SQL injection
        $stmt = $connection->prepare("INSERT INTO menu (CategoryName, ProductName, ProductPrice) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $catname, $prodname, $price);

        if ($stmt->execute()) {
            echo "Registration Successful!";
            header("Location:registredmenu.php");
        } else {
            error_log("Registration Failed: " . $stmt->error);
            echo "Registration Failed. Please try again later.";
        }

        $stmt->close();
    }
}

// Fetch Data Function
$db = $connection;
$tableName = "menu";
$columns = ['id', 'CategoryName', 'ProductName', 'ProductPrice','PostingDate'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
    if (empty($db)) {
        return "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        return "Columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        return "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName ORDER BY id ASC";
        $result = $db->query($query);

        if ($result !== false) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_all(MYSQLI_ASSOC);
                return $row;
            } else {
                return "No Data Found";
            }
        } else {
            error_log("Query Error: " . $db->error);
            return "Query Error";
        }
    }
}

mysqli_close($connection);
?>
