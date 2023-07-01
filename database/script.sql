CREATE DATABASE php_mysql_crud_valeria;

USE php_mysql_crud_valeria;

CREATE TABLE task(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;

ALTER TABLE task ADD imagen LONGBLOB;
