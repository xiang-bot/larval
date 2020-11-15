<?php
  echo "<pre>";
//  //$mysqli = new mysqli('localhost','root','root','db_chengji');
//  $mysqli = new mysqli('localhost','root','root');
//  $mysqli->select_db('db_chengji');
//  $mysqli->set_charset('utf8');
//  $sqlstr = "select * from tb_user";
//  $mysqli_result = $mysqli->query($sqlstr);
//  $row = $mysqli_result->fetch_array(MYSQLI_ASSOC);
//  var_dump($row);
//  $row = $mysqli_result->fetch_array(MYSQLI_NUM);
//  var_dump($row);

  //$mysqli = mysqli_connect('localhost','root','root','db_chengji'); //创建连接对象，并且选择数据库
  $mysqli = mysqli_connect('localhost','root','root');//创建连接对象
  mysqli_select_db($mysqli,'db_chengji'); //选择数据库
  $sqlstr = "select * from tb_user";              //查询语句
  $mysqli_result = mysqli_query($mysqli,$sqlstr); //执行查询语句
  $row = mysqli_fetch_assoc($mysqli_result);
  echo $row['id'].' '.$row['user'].' '.$row['password'];

mysqli_fetch_all();
mysqli_fetch_assoc();
mysqli_fetch_array();
mysqli_fetech_num();
mysqli_fetch_object();
mysqli_fetch_array();
mysqli_fetch_field();
mysqli_fetch_fields();