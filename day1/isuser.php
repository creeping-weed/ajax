<?php
    header("content-type:text/html;charset:utf-8");
    $array = array(
        "cc",
        "hgx",
        "pp"
    );
    $username = $_GET["username"];
    if(in_array($username,$array)){
        echo "no";
    }else{
        echo "yes";
    }
?>