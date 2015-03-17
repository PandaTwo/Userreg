<?php
/**
 * Created by PhpStorm.
 * User: Dev01
 * Date: 15-3-17
 * Time: 下午5:04
 */

$dbc = mysqli_connect('localhost','root','');
if(!$dbc){
    die(mysql_error());
}
mysqli_select_db($dbc,"pandamsg");



