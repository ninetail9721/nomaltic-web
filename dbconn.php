<?php
$mysql_host = "localhost";
$mysql_user = "admin";
$mysql_password = "student";
$mysql_db = "nomaltic_web";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

ini_set('display_errors', 'Off');
session_start();
