<?php
include("./dbconn.php");

$user_name = trim($_POST['user_name']);
$user_password = trim($_POST['user_password']);

if (!$user_name || !$user_password) {
    echo "<script>alert('회원아이디나 비밀번호가 공백이면 안됩니다.');</script>";
    echo "<script>location.replace('./login4.php')</script>";
    exit;
}

$sql = "SELECT user_name,user_password FROM user WHERE user_name='$user_name'";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

if (!$mb['user_name'] || !(md5($user_password) == $mb["user_password"])) {
    echo "<script>alert('가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.');</script>";
    echo "<script>location.replace('./login4.php');</script>";
    exit;
}

$_SESSION['session_id'] = $user_name;

mysqli_close($conn);

if (isset($_SESSION['session_id'])) {
    echo "<script>alert('로그인 되었습니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
}
