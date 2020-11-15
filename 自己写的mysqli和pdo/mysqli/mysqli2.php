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
    $num    = $result -> num_rows;
    //这个是你的查询结果有几条 所有，你要在你执行完 你的sql语句才能查询
    //而面向过程就是你 直接$mysql_num_rows(这个里面可以放至你的查询结果)
    $mysql -> close();
}
echo '<pre>';
print_r($data);
echo $num;