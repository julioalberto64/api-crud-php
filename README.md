# api-crud-php
example of crud via api with php, methods, get, post, puth, delete

## Create Data Base
### Script MYSQL
```
# create data base 
CREATE DATABASE crud;
# use data base crud
USE crud;

# create databe Employee 
CREATE TABLE IF NOT EXISTS `Employee` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(256) NOT NULL,
    `email` varchar(50),
    `age` int(11) NOT NULL,
    `designation` varchar(255) NOT NULL,
    `created` datetime NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

# insert data in table Employee 
INSERT INTO `Employee` (`id`, `name`, `email`, `age`, `designation`, `created`)
VALUES
(1, 'Julio Morlaes', 'me@juliomorales.dev', 37, 'Senier Developer', '2022-06-05 02:12:30');

# show data from table Employee
select * from `Employee`;
```

## Configuration
In file /config/config.php setup your credentials
```
private $database_name = "xxxx"; //your database name
private $username = "xxxx";//your database username
private $password = "xxxxx";//your database password
```

## Request TEST
More information of methods in folder postmanCollection
```
GET: /read.php

GET: /single_read.php/?id=1

POST: /create.php

PUT: /update.php

DELETE: /delete.php 
```

## Authors ✒️

* **Julio Morales** - *Code* - [julioalberto64](https://github.com/julioalberto64)
* **Julio Morales** - *Documentation* - [julioalberto64](https://github.com/julioalberto64)

Contributors  [contributors](https://github.com/julioalberto64/api-crud-php/graphs/contributors).

## LICENCES 📄

LICENCES  [LICENSE.md](LICENSE) for more details

## Expressions of Gratitudef 🎁
* Tell others about this project 📢
* Invite someone from the team a beer 🍺 or a coffee ☕.
* Give thanks publicly 🤓.
* Donate to my paypal: `info@nworldt.net`
