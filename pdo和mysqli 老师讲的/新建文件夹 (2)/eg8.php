<?php
  //query方法，用于查询  fetch
      echo "<pre>";
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "select * from tb_user";
      $stmt = $pdo->query($sqlstr);  //返回PDOStatement对象
      $one = $stmt->fetch();  //读出一条查询记录，并且将记录指针指向下一条记录
      var_dump($one);         //包含索引和关联数组

      $one = $stmt->fetch();  //读出一条查询记录，并且将记录指针指向下一条记录
      var_dump($one);


