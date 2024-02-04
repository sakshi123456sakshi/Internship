<?php
include("conn.php");

function validate($input)
{
    global $connection;
    return mysqli_real_escape_string($connection, $input);
}

function getCount($tableName)
{
    global $connection;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    $totalCount = mysqli_num_rows($result);
    return $totalCount;
}
?>
