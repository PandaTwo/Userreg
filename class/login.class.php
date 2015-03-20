<?php
/**
 * Created by PhpStorm.
 * User: Pandait
 * Date: 15-3-19
 * Time: 下午10:17
 */

header("context-type:text/html;charset:utf-8");
include("../inc/mysql_conn.php");
include("common.php");

session_start();

$username = isset($_POST["username"]) ? $_POST["username"] : "";
$pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
$vcode = isset($_POST["vcode"]) ? $_POST["vcode"] : "";

if (empty($username)) {
    echo '请输入用户名';
    return;
}
if (empty($pwd)) {
    echo '请输入密码';
    return;
}
if (empty($vcode)) {
    echo '请输入验证码';return;
}

if (!isset($_SESSION["VerifyCode"]) || strtolower($_SESSION["VerifyCode"])  != strtolower($vcode)) {

    echo "输入的验证码不正确。";
    return;
}
//判断用户是否存在
$sql = "select Count(0) as total from customer where username ='$username' and pwd ='$pwd'";
//echo $sql;
$result = mysqli_query($dbc,$sql);
$count = mysqli_fetch_assoc($result);
mysqli_close($dbc);
echo $count["total"];
if($count["total"] > 0){
    //设置Cookie的值

    $_SESSION["islogin"]='1';
    $_SESSION["username"] = $username;

    $common = new Common();
    $common->alertMsg("登录成功。","/index.php");

}else{
    echo '用户名或密码不正确。';
}