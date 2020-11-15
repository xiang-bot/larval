<?php
    $host = "localhost";
    $username = 'root';
    $password = 'root';
    $dbName = 'info';

//   面向过程的写法
//    $mysqli = @mysqli_connect($host,$username,$password,$dbName);
//
//    if($mysqli){
//        //如果是true则说明连接成功
//        mysqli_set_charset($mysqli,'UTF-8');
//        //先设置编码
//        $sql = 'select * from tb_info';
//        //这里的info是你的info里面的子表
//        $result = mysqli_query($mysqli,$sql);
//        //执行sql语句  用mysqli_query
//        $data = mysqli_fetch_all($result);
//    }
//
//    print_r($data);
//面向对象
    $mysqli = new mysqli($host,$username,$password,$dbName);

    //还是先要判断一下有没有获取成功
    if($mysqli -> connect_errno){
        die('数据库连接失败 ' .$mysqli->connect_errno);
    }else{
        $mysqli -> set_charset('UTF-8');
        $sql = 'select name,sex,hobby from tb_info';
        $result =  $mysqli -> query($sql);
        //这里你执行完了肯定要把这个结果给返回出来
        $data = $result -> fetch_array();
        $mysqli -> close();
        //关闭很长久的连接
    }
print_r($data);



//面向对象和面向过程最大的区别是  你要记住你的基本的sql语句
//然后 面向对象是m$ysqli->select_db() 中间有你的那个-》
//而面向过程则是把下面的-》用_来代替
