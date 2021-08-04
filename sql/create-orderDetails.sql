create table IF NOT EXISTS transaction
(
    transaction_id     INTEGER not null
        primary key autoincrement,
    product_id    TEXT,
    user_id    TEXT,
    dateOfPurchase_id  TEXT,
    dateOfDelivery  TEXT

$query = file_get_contents("sql/create-orderDetails.sql");
createTable($query, "Order Details");

);