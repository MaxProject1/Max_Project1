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

$query= $conn->query("SELECT COUNT(*) as count FROM user");
$rowCount = $query->fetchArray();
$userCount = $rowCount["count"];

if ($userCount == 0) {
    addUser("admin", "admin", "Administrator", "admin.jpg", "Administrator");
    addUser("user", "user", "User", "user.jpg", "User");
    addUser("ryan", "ryan", "Ryan", "ryan.jpg", "User");

}

$query = file_get_contents("sql/create-user.sql");
createTable($query, "User");

$query = file_get_contents("sql/create-products.sql");
createTable($query, "Products");


$query = file_get_contents("sql/create-messaging.sql");
createTable($query, "Messaging");


$query = file_get_contents("sql/create-orderDetails.sql");
createTable($query, "Order Details");

?>
function addUser($firstname, $middleName, $lastname, $adress, $username, $unhashedPassword, $phoneNumber, $email, $dateOfBirth, $profilePic, $accessLevel) {
    global $conn;
    $hashedPassword = password_hash($unhashedPassword, PASSWORD_DEFAULT);
    $sqlstmt = $conn->prepare("INSERT INTO user (firstname, middleName, lastName, adress, username, password, phoneNumber, email, dateOfBirth, profilePic, accessLevel ) VALUES (:firstname, :middleName, :lastName, :adress, :userName, :hashedPassword, :phoneNUmber, :email, :DateofBirth, :profilePic, :accessLevel)");
    $sqlstmt->bindValue(':firstname', $firstname);
    $sqlstmt->bindValue(':middleName', $middleName);
    $sqlstmt->bindValue(':lastName', $lastname);
    $sqlstmt->bindValue(':adress', $adress);
    $sqlstmt->bindValue(':hashedPassword', $hashedPassword);
    $sqlstmt->bindValue(':userName', $username);
    $sqlstmt->bindValue(':userName', $username);
    $sqlstmt->bindValue(':userName', $username);
    $sqlstmt->bindValue(':userName', $username);
    $sqlstmt->bindValue(':profilePic', $profilePic);
    $sqlstmt->bindValue(':accessLevel', $accessLevel);
    if ($sqlstmt->execute()) {
        echo "<p style='color: green'>User: ".$username. ": Created Successfully</p>";
    } else {
        echo "<p style='color: red'>User: ".$username. ": Created Failure</p>";
    }
}

$query= $conn->query("SELECT COUNT(*) as count FROM user");
$rowCount = $query->fetchArray();
$userCount = $rowCount["count"];

if ($userCount == 0) {
    addUser("admin", "admin", "admin", "home", "admin", "admin", 40319850, 'email.com', '20', 'something.jpg', 'Administrator');
    addUser("user", "user", "User", "user.jpg", "User");
    addUser("ryan", "ryan", "Ryan", "ryan.jpg", "User");
?>