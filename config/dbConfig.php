<?php
$hn = 'localhost';
$un = 'fastburger_admin';
$pw = 'Tapz1r0xTIXpLFyD';
$db = 'fast_burgers';

$conn = mysqli_connect($hn, $un, $pw, $db);
if (!$conn){
    die('Connection Failed: ' . mysqli_connect_error());
}
//else {
//    echo('connection is successful');
//}