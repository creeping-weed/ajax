<?php
    header("content-type:text/html;charset:utf-8");
    $name = $_POST["name"];
    $password = $_POST["password"];
    if($name=="admin"&&$password=="admin"){
        echo "yes";
    }else{
        echo 'no';
    }
?>