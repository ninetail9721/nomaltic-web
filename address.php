<?php
include("./dbconn.php");

if (isset($_POST["address"])) {
    $address = $_POST["address"];
    $sql = "SELECT address_detail,address_code FROM address WHERE address_detail LIKE '%$address%'";
    $result = mysqli_query($conn, $sql);
}

?>


<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-3 flex items-center mx-2">
        <input id="address" name="address" required class="w-full appearance-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500" placeholder="주소 검색" />
        <button class="ml-5 bg-gray-200 py-2 text w-1/4">검색</button>
    </form>
    <div class="mt-5 mx-5 divide-y space-y-3">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="flex justify-between">
                <button onclick="submit_btn(this)"><?= $row["address_detail"] ?></button>
                <span><?= $row["address_code"] ?></span>
            </div>
        <?php endwhile; ?>
    </div>
</body>

<script>
    function submit_btn(element) {
        opener.document.getElementById("user_address").value = element.innerText;
        opener.document.getElementById("user_address_code").value = element.nextElementSibling.innerText;
        window.close()
    }
</script>

</html>

<!--  <button onclick="submit_btn(this)">클릭</button>  -->