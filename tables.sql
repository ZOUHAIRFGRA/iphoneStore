CREATE TABLE order_table (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  reference VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  date DATE NOT NULL
);
-- put this in sql part in phpmyadmin