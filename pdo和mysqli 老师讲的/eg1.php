<?php
  echo "<pre>";
  //$mysqli = new mysqli('localhost','root','root','db_chengji');
  $mysqli = new mysqli('localhost','root','root');
  $mysqli->select_db('db_chengji');
  $mysqli->set_charset('utf8');
  $sqlstr = "select * from tb_user";
  $mysqli_result = $mysqli->query($sqlstr);
  $row = $mysqli_result->fetch_array(MYSQLI_ASSOC);
  var_dump($row);
  $row = $mysqli_result->fetch_array(MYSQLI_NUM);
  var_dump($row);