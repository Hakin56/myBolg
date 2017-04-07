<?php
require('../server/function.php');

$new = 'create table article(
id int unsigned not null auto_increment primary key,
title varchar(255),
content text,
type int(1),
date timestamp,
keyword varchar(255)
) charset = utf8';
$article = xq($new);
$new2 = 'create table tags(
tagid int unsigned not null auto_increment primary key,
tagname varchar(16)
) charset = utf8';
$tags = xq($new2);
$new3 = 'create table type(
typeid int unsigned not null auto_increment primary key,
typename varchar(20)
) charset = utf8';
$type = xq($new3);
?>
