<?php
  //query方法，用于查询  并且对返回结果 PDOStatement对象 进行遍历 得到全部查询信息
      echo "<pre>";
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "select * from tb_user";
      $stmt = $pdo->query($sqlstr);  //返回PDOStatement对象
      foreach ($stmt as $row){
          //var_dump($row);
          //echo $row[0].' '.$row[1].' '.$row[2]."<br />";
          echo $row['id'].' '.$row['user'].' '.$row['password']."<br />";
      }
