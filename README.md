# README FILE

### Aplication contains 
The directory contains a demo php project.
It simple user and article managment system.
The main functionalities:
* User registration as a admin or ordinary user
* User login/log-out
* Adding and deleting articles depending user's permission(only admins can add or delete article)
* Adding comments under the articles
* Interaction with mysql database
The database contains three table: user, article, commnet
The user table has the following columns:
* id 
* admin - whether the user is admin or not (admin - 1, not-admin - 0)
* pass - user's password (md5)
* email 
* reg_date - user's registration date
The article table chas the following columns:
* id 
* title
* content 
* reg_date - registration date
* owner_id - the user id from user table 
* category - article's category (not used currently)
The comment table has the following columns:
* id 
* art_ids - the ommented article id from articles table
* content
* reg_date
* owner - the user id from user table
