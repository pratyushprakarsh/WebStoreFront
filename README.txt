			
                ###### Web Store Front ######
  
  This package needs the following software installed on the server
  + Apache 2.4.4
  + MySQL 5.5.32 (Community Server)
  + PHP 5.4.19 (VC9 X86 32bit thread safe) + PEAR 
--------------------------------------------------------------- 

* System Requirements:
 
  + 64 MB RAM (RECOMMENDED)
  + 750 MB free fixed disk 
  + Windows 2003, XP, VISTA, Windows 7

---------------------------------------------------------------
					Installation
---------------------------------------------------------------
Instruction for setting up Database:-
Option1)
1) create DB wsf in mysql
CREATE DATABASE wsf;
2) create table wsf_details in DB wsf
CREATE TABLE wsf_details
(
GroupId varchar(32),
ProductId varchar(32) NOT NULL,
MovieTitle varchar(100)  NOT NULL,
Store varchar(32)  NOT NULL,
Category varchar(100)  NOT NULL,
SubCategory(100),
Price(16)  NOT NULL,
ShippingDuration(8)  NOT NULL,
PRIMARY KEY (ProductId)
)
3) Import data from CSV file movies-catalog to the table wsf_details
     while importing please remove the header row from CSV file as MySql may give error.
Option2)
Use the given DB file wsf.sql to import the table and data in mysql.
---------------------------------------------------------------
Installing the web store front:-
1) Copy all the files present in install directory to the root folder of your webserver.
For localhost, if using XAMPP copy the entire folder in htdocs directory and if using WAMP copy the folder in WWW directory.
Use path "http://localhost/'your_directory_name'/" to access the web store front.

