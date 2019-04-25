CREATE TABLE book
(
	bookid INT(5) PRIMARY KEY AUTO_INCREMENT,
	
	title VARCHAR(20)NOT NULL,
	
	price FLOAT(7,2) NOT NULL,
	
	author VARCHAR (20)
);