<?php
phpinfo();
$redis = new Redis();
$redis->connect('redis', 6379); //连接Redis
$redis->auth('310c8cabcdefghf2d8abcdefd44496ac80'); //密码验证
$redis->select(1);//选择数据库1
$redis->set( "testKey" , "Hello Redis"); //设置测试key
echo $redis->get("testKey");//输出value
