<?php
  //新建表 exec方法
  $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
  $user = 'root';
  $pwd = 'root';
  $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
  $sqlstr = "delete from tb_user where id=3";
  $rst = $pdo->exec($sqlstr); //返回的是?
  var_dump($rst);
