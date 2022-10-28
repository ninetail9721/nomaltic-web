<?php
$mysql_host = "localhost";
//admin
$mysql_user = "root";
//student
$mysql_password = "1234";
$mysql_db = "nomaltic_web";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

ini_set('display_errors', 'Off');
session_start();
