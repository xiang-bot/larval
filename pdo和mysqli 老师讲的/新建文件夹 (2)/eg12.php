<?php
      //query方法，用于查询  fetch
      //PDO::FETCH_BOTH 默认值 索引数组和关联数组
      echo "<pre>";
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "select * from tb_user";
      $stmt = $pdo->query($sqlstr);  //返回PDOStatement对象
      while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
          echo $row[0]. ' '.$row['user'].' '.$row[2]."<br />";
      }

