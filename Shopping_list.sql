 - create and select the database
DROP DATABASE IF EXISTS Shopping_list;
CREATE DATABASE Shopping_list;
USE Shopping_list;  -- MySQL command


CREATE TABLE products (
  productName      VARCHAR(255)   NOT NULL,
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  PRIMARY KEY (productID)
);


-- insert data into the database


INSERT INTO products VALUES
('Milk', 1,),
('Bread', 2,),
('Fruits', 3,),
('Chips', 4,),
('Ice-cream', 5,),
('Cookies', 6,),
('Eggs;, 7,),

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON Shopping_list.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON products
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

