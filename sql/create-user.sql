create table IF NOT EXISTS user
(
    user_id     INTEGER not null
        primary key autoincrement,
    firstName    TEXT,
    middleName    TEXT,
    lastName    TEXT,
    dateOfBirth        TEXT,
    email  TEXT,
    phoneNumber TEXT,
    adress    TEXT

$query = file_get_contents("sql/create-user.sql");
createTable($query, "User");

);