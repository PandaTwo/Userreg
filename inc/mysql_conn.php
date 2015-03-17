<?php
/**
 * Created by PhpStorm.
 * User: Dev01
 * Date: 15-3-17
 * Time: 上午10:31
 */
define("HOST","localhost");
define("DB_NAME","test");
define("DATABASEPWD","");
define("DATABASENAME","root");

$dbc =mysqli_connect(HOST,DATABASENAME,DATABASEPWD,DB_NAME,'8081');
if ( $dbc -> connect_error ) {
    die( 'Connect Error ('.$mysqli -> connect_errno.')'.$dbc -> connect_error );
}