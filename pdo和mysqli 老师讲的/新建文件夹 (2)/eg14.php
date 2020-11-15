<?php
      //query方法，用于查询  fetchAll
      //fetchAll返回二维数组
      echo "<pre>";
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "select * from tb_user where id=4";
      $stmt = $pdo->query($sqlstr);  //返回PDOStatement对象
      $all = $stmt->fetchAll();
      var_dump($all);