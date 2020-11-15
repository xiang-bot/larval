<?php
  //新建表 exec方法
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "update tb_user set user='lll',password='aaa' where id=2";
      $rst = $pdo->exec($sqlstr);
      var_dump($rst);
