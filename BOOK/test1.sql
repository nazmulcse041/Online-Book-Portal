CREATE TABLE IF NOT EXISTS user (
 userid varchar(30) NOT NULL,
 password varchar(15) NOT NULL,
 name varchar(20) NOT NULL,
 gender varchar(10) NOT NULL,
 email varchar(25) NOT NULL,
 contact varchar(20) NOT NULL,
 address varchar(70) NOT NULL,
 usertype varchar(10) NOT NULL,
 PRIMARY KEY(userid),
 UNIQUE(email)
);


