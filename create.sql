CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
publicName VARCHAR(30) NOT NULL,
privateName VARCHAR(30) NOT NULL,
email VARCHAR(50),
pass VARCHAR(50)
);

CREATE TABLE medicines (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
weight INT(6) NOT NULL,
name VARCHAR(30) NOT NULL,
);