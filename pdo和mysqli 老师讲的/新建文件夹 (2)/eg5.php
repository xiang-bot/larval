<?php
  //新建表 exec方法
  echo "<pre>";
  try{
      $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
      $user = 'root';
      $pwd = 'root';
      $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
      $sqlstr = "delete from tb_user1 where id=3";
      $rst = $pdo->exec($sqlstr); //返回的是?
      if ($rst === false){
          echo $pdo->errorCode()."<br />";
          var_dump($pdo->errorInfo());
          echo "<br />".$pdo->errorInfo()[2];
      }
  }catch (PDOException $e){
      echo "11111";
      var_dump($e);
  }

