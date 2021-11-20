-- create and select the database
DROP DATABASE IF EXISTS my_guitar_shop1;
CREATE DATABASE my_guitar_shop1;
USE my_guitar_shop1;  -- MySQL command

-- create the tables
/*CREATE TABLE categories (
  categoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
); */

CREATE TABLE products (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
--  categoryID       INT(11)        NOT NULL,
  productName      VARCHAR(255)   NOT NULL,
  PRIMARY KEY (productID)
);

/*CREATE TABLE orders (
  orderID        INT(11)        NOT NULL   AUTO_INCREMENT,
  customerID     INT            NOT NULL,
  orderDate      DATETIME       NOT NULL,
  PRIMARY KEY (orderID)
); 

-- insert data into the database
INSERT INTO categories VALUES
(1, 'G'),
(2, 'B'),
(3, 'D'); */

INSERT INTO products VALUES
(1, 'Milk'),
(2, 'Cheese'),
(3, 'Butter'),
(4, 'Oranges'),
(5, 'Fish');

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON my_guitar_shop1.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON products
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';

