<?php
include("./dbconn.php");

$user_name = trim($_POST["user_id"]);
$user_password = trim($_POST["user_password"]);
$user_password2 = trim($_POST["user_password2"]);
$user_nickname = trim($_POST["user_nickname"]);
$user_address_code = trim($_POST["user_address_code"]);
$user_address = trim($_POST["user_address"]);

if ($user_password !== $user_password2) {
    echo "<script>alert('비밀번호가 두개가 일치하지 않습니다.');</script>";
    echo "<script>location.replace('./signup.php')</script>";
    exit;
}

if (!$user_password && !$user_name && !$user_nickname && !$user_address_code && !$user_address) {
    echo "<script>alert('모든 항목을 채워주세요!');</script>";
    echo "<script>location.replace('./signup.php')</script>";
    exit;
}

$address_sql = "SELECT address_id FROM address WHERE address_code=$user_address_code && address_detail='$user_address'";
$address_result = mysqli_query($conn, $address_sql);
$address_mb = mysqli_fetch_assoc($address_result);


$address_id = $address_mb["address_id"];

if (!$address_id) {
    echo "<script>alert('주소가 잘못됐습니다.');</script>";
    echo "<script>location.replace('./signup.php');</script>";
}

$user_sql = "INSERT INTO user (user_name, user_nickname, user_password, address_id) VALUES ('$user_name', '$user_nickname', md5('$user_password'), $address_id )";
$user_result = mysqli_query($conn, $user_sql);

if ($user_result) {
    echo "<script>alert('성공적으로 회원가입이 되었습니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
} else {
    echo "<script>alert('회원가입에 실패합니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
}
