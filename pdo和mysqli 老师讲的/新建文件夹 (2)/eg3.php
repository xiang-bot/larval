<?php
  //新建表 exec方法
  $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
  $user = 'root';
  $pwd = 'root';
  $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
  $sqlstr = "create table if not exists `user`(
                `id` int unsigned not null primary key auto_increment,
                `user` varchar (30) not null ,
                `pwd` varchar (30) not null
);";
  $rst = $pdo->exec($sqlstr); //返回的是0
  var_dump($rst);
