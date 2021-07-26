<?php
session_start();

$conn = new SQLite3("Max_Project1") or die ("unable to open database");

function createtable($sqlStmt, $tableName){
    $stmt = conn->prepare($sqlStmt);
if ($stmt->execute()) {
    echo "<p>Table Created Succesfully</p>";


}

$query = file_get_contents("sql/create-user.sql");

}


?>