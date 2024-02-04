<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $catname = isset($_POST["CategoryName"]) ? $_POST["CategoryName"] : "";
    $catcode = isset($_POST["CategoryCode"]) ? $_POST["CategoryCode"] : "";

    // Validate input
    if (empty($catname) || empty($catcode)) {
        echo "Please provide both CategoryName and CategoryCode.";
    } else {
        // Use prepared statement to prevent SQL injection
        $stmt = $connection->prepare("INSERT INTO category (CategoryName, CategoryCode) VALUES (?, ?)");
        $stmt->bind_param("ss", $catname, $catcode);

        if ($stmt->execute()) {
            echo "Registration Successful!";
            header("Location:category.php");
        } else {
            echo "Registration Failed: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Fetch Data Function
$db = $connection;
$tableName = "category";
$columns = ['id', 'CategoryName', 'CategoryCode', 'PostingDate'];
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
        $query = "SELECT " . $columnName . " FROM $tableName ORDER BY id DESC";
        $result = $db->query($query);

        if ($result !== false) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_all(MYSQLI_ASSOC);
                return $row;
                
            } else {
                return "No Data Found";
            }
        } else {
            return "Query Error: " . $db->error;
        }
    }
}

// Note: No need to close the connection here, PHP will handle it when the script ends.
?>
