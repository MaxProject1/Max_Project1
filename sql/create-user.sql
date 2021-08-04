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
    adress    TEXT,
    username    TEXT,
    password    TEXT

);

