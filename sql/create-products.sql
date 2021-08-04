create table IF NOT EXISTS products
(
    product_id     INTEGER not null
        primary key autoincrement,
    productName    TEXT,
    productCategory    TEXT,
    productReleaseDate        TEXT,
    productPricing  TEXT,
    productAmount TEXT

$query = file_get_contents("sql/create-products.sql");
createTable($query, "Products");

);