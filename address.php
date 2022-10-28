<div>
    <div id="user_address">주소</div>
    <div id="user_address_code">주소 코드</div>
    <button onclick="submit_btn()">버튼</button>
    <script>
        function submit_btn() {
            opener.document.getElementById("user_address").value = document.getElementById("user_address").innerText;
            opener.document.getElementById("user_address_code").value = document.getElementById("user_address_code").innerText;
            window.close()
        }
    </script>
</div>