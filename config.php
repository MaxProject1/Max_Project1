<?php
session_start();

$conn = new SQLite3("db/db_user") or die ("unable to open database");

function createTable($sqlStmt, $tableName)
{
    global $conn;
    $stmt = $conn->prepare($sqlStmt);
    if ($stmt->execute()) {
        echo "<p style='color: green'>".$tableName. ": Table Created Successfully</p>";
    } else {
        echo "<p style='color: red'>".$tableName. ": Table Created Failure</p>";
    }
}

$query = file_get_contents("sql/create-user.sql");
createTable($query, "User");


$query = file_get_contents("sql/create-user.sql");


?>