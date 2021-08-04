create table IF NOT EXISTS messaging
(
    messaging_id     INTEGER not null
    primary key autoincrement,
    username    TEXT

$query = file_get_contents("sql/create-messaging.sql");
createTable($query, "Messaging");

);