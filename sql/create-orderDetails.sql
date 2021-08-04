create table IF NOT EXISTS transcation
(
    transaction_id     INTEGER not null
        primary key autoincrement,
    product_id    TEXT,
    user_id    TEXT,
    dateOfPurchase_id  TEXT,
    dateOfDelivery  TEXT
);
