<?php

$dbc = mysqli_connect('localhost','root','123456');
if ( !$dbc ) {
    die(mysqli_error($dbc));
}
mysqli_select_db($dbc,"pandamsg");