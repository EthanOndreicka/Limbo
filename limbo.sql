# The purpose of this is to create a database for lost objects.
# Authors: Ava McCann and Ethan Ondreika
# Version 1.0

create database if not exists limbo_db ;
use limbo_db ;

CREATE TABLE IF NOT EXISTS users 
(
user_id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
first_name VARCHAR(20) NOT NULL ,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
pass VARCHAR(256) NOT NULL,
reg_date DATETIME NOT NULL,
PRIMARY KEY ( user_id ) ,
UNIQUE ( email ) 
);

INSERT INTO users ( first_name, pass )
VALUES ("admin", "gaze11e") ;
SELECT * FROM users ;

#create and populate locations table
CREATE TABLE locations
(
id INT PRIMARY KEY AUTO_INCREMENT ,
create_date DATETIME NOT NULL ,
update_date DATETIME NOT NULL ,
name TEXT NOT NULL);

INSERT INTO locations ( create_date, update_date, name )
VALUES (NOW(), NOW(), "Lowell Thomas") ,
(NOW(), NOW(), "Hancock Center") ;
SELECT * FROM locations ;

#create and populate stuff table
CREATE TABLE stuff
(
id INT PRIMARY KEY AUTO_INCREMENT,
location_id INT NOT NULL,
description TEXT NOT NULL,
create_date DATETIME NOT NULL,
update_date DATETIME NOT NULL,
room TEXT,
owner TEXT,
finder TEXT,
status SET("found", "lost", "claimed") NOT NULL);


INSERT INTO stuff (location_id, description, create_date, update_date, 
room, owner, finder, status)
VALUES
(1, "Purple Android", NOW(), NOW(), "205", "DoggerBone", "BoneDogger", "found"),
(2, "Blue iPhone", NOW(), NOW(), "200", "DogBone", "BoneDog", "lost"),
(1, "Red Backpack", NOW(), NOW(), "202", "Yes", "No", "lost"),
(2, "Gray Sweater", NOW(), NOW(), "104", "The Owner", "The Finder", "found"),
(1, "Oakley Sunglasses", NOW(), NOW(), "203", "Owner", "Finder", "lost");

EXPLAIN users;
EXPLAIN locations;
EXPLAIN stuff;

SELECT * FROM stuff;

# SOURCE C:\Abyss Web Server\htdocs\limbo.sql













