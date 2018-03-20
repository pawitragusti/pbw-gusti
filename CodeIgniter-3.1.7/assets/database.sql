create database crud;

use crud;

CREATE TABLE `users`
(
`id` int(11) NOT NULL auto_increment,
`name` varchar(100),
`email` varchar(100),
`subject` varchar(15),
`message` varchar(500),

PRIMARY KEY (`id`)
);