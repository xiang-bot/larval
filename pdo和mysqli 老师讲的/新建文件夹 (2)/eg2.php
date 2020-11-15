<?php
  //添加记录 exec方法 （增删改） query方法（查）
  $dsn = "mysql:host=localhost;dbname=db_chengji";  //data source name
  $user = 'root';
  $pwd = 'root';
  $pdo =new PDO($dsn,$user,$pwd);//创建了一个PDO对象
  //$sqlstr = "insert into tb_user(user,password)values('aaa','1234')";
  $sqlstr = "insert into tb_user(user,password)values('bbb','1234'),('ccc','4321')";
  $rst = $pdo->exec($sqlstr); //返回的是添加成功的记录数
  var_dump($rst);
