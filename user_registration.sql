-- drop database first if exists --
DROP DATABASE IF EXISTS user_registration;

CREATE DATABASE user_registration;

USE user_registration;

-- create users table --
CREATE TABLE users (
	id int(5) not null AUTO_INCREMENT PRIMARY KEY,
	username varchar(256) not null,
	email_address varchar(256) not null,
	password varchar(256) not null
);

