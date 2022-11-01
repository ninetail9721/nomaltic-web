<?php
include("./dbconn.php");
$user_name = $_GET["userId"];

$sql = "SELECT user_name FROM user WHERE user_name='$user_name'";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);
?>

<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <div class="mt-5 ml-5">
        <?php if ($mb['user_name']) : ?>
            <span class="text-lg">이미 아이디가 존재합니다.</span>
            <button class="ml-3 rounded-md bg-red-500 text-white text-sm w-1/4 cursor-pointer py-2 px-1" onclick="close_popup()">닫기</button>
        <?php else : ?>
            <span class="text-lg">아이디를 사용할 수 있습니다.</span>
            <button class="ml-3 rounded-md bg-blue-500 text-white text-sm w-1/4 cursor-pointer py-2 px-1" onclick="finish_popup()">닫기</button>
        <?php endif; ?>
    </div>
</body>

<script>
    function close_popup() {
        window.close();
    }

    function finish_popup() {
        opener.document.getElementById("user_id").value = "<?= $user_name ?>";
        window.close();
    }
</script>

</html>