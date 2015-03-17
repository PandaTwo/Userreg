<?php
include("../inc/mysql_conn.php");
header("context-type:text/html;charset:utf-8");
$username= $_POST["username"];
$pwd = $_POST["pwd"];
$pwd1 = $_POST["pwd1"];

if($pwd!=$pwd1){
    echo("两次输入的密码不一致。");
}
$sql = "INSERT INTO customer(UserName,Pwd) VALUES ('$username','$pwd')";
if(!mysqli_query($dbc,$sql))
{
    die("error".mysqli_error($dbc));
}else{
    echo "添加成功。";
}