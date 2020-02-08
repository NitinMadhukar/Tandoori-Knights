CREATE DATABASE farmProxy;

CREATE TABLE seller (
    id int(11) AUTO_INCREMENT PRIMARY KEY ,
    PhoneNO varchar(255),
    Pwd varchar(255),
    state1 varchar(255),
    district varchar(255),
    email varchar(255),
    adhar int(16),
    name varchar(255)
);