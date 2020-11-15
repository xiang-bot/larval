<?php
      //预处理
      echo "<pre>";
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "select * from tb_user where user=? and password =?";
      $stmt = $pdo->prepare($sqlstr);   //预处理
      $stmt->bindValue(1,'liubei');  //从1开始
      $stmt->bindValue(2,'123456');
      $stmt->execute();                 //执行
      while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
           echo $row->id. ' '.$row->user.' '.$row->password."<br />";
      }



