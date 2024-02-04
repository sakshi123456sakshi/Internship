<?php
include('conn.php');

// Fetch Data Function
$db = $connection;
$tableName = "registration";
$columns = ['cid', 'fname', 'mobno', 'address'];
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
        $query = "SELECT " . $columnName . " FROM $tableName ORDER BY cid ASC"; 
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

?>
