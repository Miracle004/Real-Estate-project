CREATE DATABASE comcraft_property;

USE comcraft_property;

CREATE TABLE users(
    id int UNSIGNED PRIMARY KEY UNIQUE,
    fullName varchar(40),
    username varchar(20) UNIQUE,
    email varchar(30) UNIQUE,
    User_type varchar(10),
    telephoneNumber int(11) UNIQUE
)