<?php
$host     = 'localhost';
$username = 'root';
$password = 'root';
$dbname   = 'info';
$mysql    = new Mysqli($host, $username, $password);
if($mysql -> connect_errno){
    die('数据库连接失败：'.$mysql->connect_errno);
}else{
    $mysql -> select_db($dbname);                  // 选择名为 test 的数据库
    $sql    = 'select name,sex,class from tb_info';     // SQL 语句
    $result = $mysql -> query($sql);               // 执行上面的 SQL 语句
    $data   = $result -> fetch_all();
    $mysql -> close();
}
echo '<pre>';
print_r($data);

//fetch_row 是返回一行数据 是以索引数组的形式返回的
//fetch_assoc 是返回一行数据 是以关联数组数组的形式返回的
//fetch_object 是返回一行数据 是以关联对象数组的形式返回的
//fetch_array 是返回一行数据并以关联数组、索引数组或二者兼有的形式返回 all 也是一样

