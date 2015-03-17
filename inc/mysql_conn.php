<?php

$dbc = mysqli_connect('localhost','root','');
if ( !$dbc ) {
    die(mysqli_error($dbc));
}
mysqli_select_db($dbc,"pandamsg");