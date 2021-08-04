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

$query = file_get_contents("sql/create-products.sql");
createTable($query, "Products");


$query = file_get_contents("sql/create-messaging.sql");
createTable($query, "Messaging");


$query = file_get_contents("sql/create-orderDetails.sql");
createTable($query, "Order Details");

function addUser($username, $unhashedPassword, $name, $profilePic, $accessLevel) {
    global $conn;
    $hashedPassword = password_hash($unhashedPassword, PASSWORD_DEFAULT);
    $sqlstmt = $conn->prepare("INSERT INTO user (firstname, middleName, lastName, adress, username, password, phoneNumber, email, dateOfBirth ) VALUES (:userName, :hashedPassword, :name, :profilePic, :accessLevel)");
    $sqlstmt->bindValue(':userName', $username);
    $sqlstmt->bindValue(':hashedPassword', $hashedPassword);
    $sqlstmt->bindValue(':name', $name);
    $sqlstmt->bindValue(':profilePic', $profilePic);
    $sqlstmt->bindValue(':accessLevel', $accessLevel);
    if ($sqlstmt->execute()) {
        echo "<p style='color: green'>User: ".$username. ": Created Successfully</p>";
    } else {
        echo "<p style='color: red'>User: ".$username. ": Created Failure</p>";
    }
}

?>