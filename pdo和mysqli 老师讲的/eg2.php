<?php
//  echo "<pre>";
//  //$mysqli = new mysqli('localhost','root','root','db_chengji');
//  $mysqli = new mysqli('localhost','root','root');
//  $mysqli->select_db('db_chengji');
//  $mysqli->set_charset('utf8');
//  $sqlstr = "insert into tb_user(user,password) values ('eee','111'),('fff','222')";
//  $mysqli_result = $mysqli->query($sqlstr);
//  var_dump($mysqli_result);

  $mysqli = mysqli_connect('localhost','root','root');
  mysqli_select_db($mysqli,'db_chengji');
  $sqlstr = "insert into tb_user(user,password) values ('8888','111'),('9999','222')";
  $mysqli_result = mysqli_query($mysqli,$sqlstr);
  var_dump($mysqli_result);



