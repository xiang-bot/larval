<?php
      //防止sql注入
      echo "<pre>";
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象

      //$user1 = "liubei";
      $user1 = "' or 1=1 #'";
      $pwd1 = "ghdgh";
      $sqlstr = "select * from tb_user where user='{$user1}' and password='{$pwd1}'";
      echo $sqlstr;
      $stmt = $pdo->prepare($sqlstr);   //预处理
      $stmt->execute();
      while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo $row->id. ' '.$row->user.' '.$row->password."<br />";
      }

