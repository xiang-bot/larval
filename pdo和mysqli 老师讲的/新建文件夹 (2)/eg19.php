<?php
      //预处理
      echo "<pre>";
      $user1 = 'liubei';
      $pwd1 = '123456';
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "select * from tb_user where user=? and password =?";
      $stmt = $pdo->prepare($sqlstr);   //预处理
      $stmt->bindParam(1,$user1);
      $stmt->bindParam(2,$pwd1);
      $stmt->execute();                 //执行
      while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
           echo $row->id. ' '.$row->user.' '.$row->password."<br />";
      }



