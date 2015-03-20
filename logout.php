<?php
/**
 * Created by PhpStorm.
 * User: Pandait
 * Date: 15-3-21
 * Time: 上午12:26
 */
session_start();

unset($_SESSION["username"]);
unset($_SESSION["islogin"]);


header("location:/");