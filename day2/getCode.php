<?php

header('content-Type:text/html;charset=utf-8');

$mobile = $_GET['mobile'];

$arr = array(
  "15751776629",
  "15711111111",
  "15722222222",
  "15733333333",
  "15744444444",
  "15755555555"
);

if(in_array( $mobile, $arr )){
  $result = array(
    "code" => 101,
    "msg" => $mobile."手机号已经存在",
    "mobile" => $mobile
  );
}else {
  $result = array(
    "code"=>100,
    "msg"=>"验证码发送成功",
    "mobile" => $mobile
  );
}

sleep(1);

echo json_encode($result);