
CREATE DATABASE 0-test-sales;
-- DROP DATABASE 0-test-sales;

USE 0-test-sales;

CREATE TABLE products(
     id_product INT(50) AUTO_INCREMENT PRIMARY KE,
     product_name VARCHAR(250) NOT NULL,
     product_description VARCHAR(500) NOT NULL,
     product_quantity INT(50) NO NULL,
     product_price FLOAT NOT NULL,
     date_created DATE, 
);

SHOW TABLE;
DESCRIBE products;

INSERT INTO products (product_name,  product_description, product_quantity, product_price, created_date) VALUES ("Nike sneaker", " Very good product", 45, 50.43, NOW());
