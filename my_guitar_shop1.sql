-- create and select the database
DROP DATABASE IF EXISTS my_guitar_shop1;
CREATE DATABASE my_guitar_shop1;
USE my_guitar_shop1;  -- MySQL command

-- create the tables
CREATE TABLE products (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  productName      VARCHAR(255)   NOT NULL,
  PRIMARY KEY (productID)
);

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

