--
-- TABLES AND ADMIN CREDENTIALS CODE 
-- Basic databases required 

-- Users Table
CREATE TABLE Users(
   id  MEDIUMINT NOT NULL AUTO_INCREMENT,
   uname varchar(130) NOT NULL,
   password varchar(130) NOT NULL,
   PRIMARY KEY (id)
);


-- Addbook Table 
CREATE TABLE addBooks( id  MEDIUMINT NOT NULL AUTO_INCREMENT, 
   bk_name varchar(130) NOT NULL,
   author varchar(130) NOT NULL,  
   PRIMARY KEY (id), 
   quantity int(25),
   price int(25) 
  );


-- Passbook Table
CREATE TABLE passbook( id  MEDIUMINT NOT NULL AUTO_INCREMENT,
   uname varchar(256), 
   PRIMARY KEY (id), 
   wallet int(25) 
 );


-- returnBooks Table ( Returned books )
CREATE TABLE returnBooks( id  MEDIUMINT NOT NULL AUTO_INCREMENT,
  uname varchar(256),
  bk_name varchar(256), 
  PRIMARY KEY (id)

);

-- StudBooks Table ( Sudent books )
CREATE TABLE studBooks( id  MEDIUMINT NOT NULL AUTO_INCREMENT,
  uname varchar(256),
  bk_name varchar(256), 
  PRIMARY KEY (id)

);




-- Admin login and Password ( admin : admin )
insert into Users (uname, password) values ("admin","admin");




