CREATE DATABASE coding_club;

use coding_club;

CREATE TABLE login(

email VARCHAR(200),
password VARCHAR(100),
name varchar(100)
)

CREATE TABLE users(
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	mobilenumber VARCHAR(50) NOT NULL,
	age INT(3) NOT NULL,
	batch VARCHAR(50) NOT NULL,
	degree VARCHAR(50) NOT NULL,
	collegename VARCHAR(120) NOT NULL,
	registernumber INT(20) NOT NULL UNIQUE,
	comapanyname VARCHAR(120) NOT NULL,
	designation VARCHAR(120) NOT NULL,
	location VARCHAR(50) NOT NULL,
	email VARCHAR(200) PRIMARY KEY,
	password VARCHAR(50) NOT NULL
)

CREATE TABLE question(
ques_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
question VARCHAR(500),
dt date,
ti time,
email VARCHAR(200)
)

CREATE TABLE answer(
ques_id INT,
ans_id INT AUTO_INCREMENT,
answer VARCHAR(500),
dt date,
ti time,
email VARCHAR(200),
votecnt INT,
FOREIGN KEY answer(ques_id) REFERENCES question(ques_id)
)
