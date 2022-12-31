CREATE TABLE categories
(
    id    int unsigned auto_increment PRIMARY KEY,
    title varchar(255) not null,
    slug  varchar(255) not null
);
CREATE TABLE products
(
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title       VARCHAR(255) NOT NULL,
    thumbnail   LONGTEXT     NOT NULL,
    description VARCHAR(255) NOT NULL,
    price       DOUBLE       NOT NULL,
    category_id INT UNSIGNED not null,
    FOREIGN KEY (category_id) REFERENCES categories (id),
    create_time DATETIME     NOT NULL,
    update_time DATETIME     NOT NULL
);