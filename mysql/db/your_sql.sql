create database landth90;

CREATE TABLE `landth90`.`Members` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
);

INSERT INTO `landth90`.`Members` (firstname, lastname) VALUES ('Lan', 'Do');
INSERT INTO `landth90`.`Members` (firstname, lastname) VALUES ('Giang', 'Pham');
INSERT INTO `landth90`.`Members` (firstname, lastname) VALUES ('Phong', 'Le');