<html lang="en">

<head>
    <title>Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-full items-center justify-center py-12 px-4  lg:px-8">
        <div class="w-full max-w-lg space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">
                    회원가입
                </h2>
            </div>
            <div class="mt-10 ">
                <div class="">
                    <form action="#" method="POST">
                        <div class="overflow-hidden shadow ">
                            <div class="bg-white px-4 py-5  space-y-5">
                                <div>
                                    <label for="user_id" class="block text-sm font-medium text-gray-700">아이디</label>
                                    <div class="flex justify-center">
                                        <input type="text" name="user_id" id="user_id" autocomplete="given-name" class="mt-1 p-2 block w-full rounded-md border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <button class="ml-5 rounded-md bg-gray-100 text-sm w-1/4" onclick="check_id()">중복 확인</button>
                                    </div>
                                </div>

                                <div>
                                    <label for="user_password" class="block text-sm font-medium text-gray-700">비밀번호</label>
                                    <input type="text" name="user_password" id="user_password" autocomplete="given-name" class="mt-1 p-2 block w-full rounded-md border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                </div>

                                <div>
                                    <label for="user_password2" class="block text-sm font-medium text-gray-700">비밀번호 확인</label>
                                    <input type="text" name="user_password2" id="user_password2" autocomplete="given-name" class="mt-1 p-2 block w-full rounded-md border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                </div>

                                <div>
                                    <label for="user_nickname" class="block text-sm font-medium text-gray-700">닉네임</label>
                                    <input type="text" name="user_nickname" id="user_nickname" autocomplete="given-name" class="mt-1 p-2 block w-full rounded-md border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">주소</label>
                                    <div class="flex justify-center">
                                        <input type="text" placeholder="우편번호" readonly name="user_address_code" id="user_address_code" class="mt-1 p-2 block w-full rounded-md shadow-sm focus:outline-none bg-gray-100">
                                        <button class="ml-5 rounded-md bg-gray-100 text-sm w-1/4" onclick="check_address()">주소 검색</button>
                                    </div>
                                    <input type="text" placeholder="상세주소" readonly name="user_address" id="user_address" class="mt-2 p-2 block w-full rounded-md shadow-sm focus:outline-none bg-gray-100">
                                </div>

                            </div>
                            <div class="bg-gray-50 px-4 py-3 w-full ">
                                <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">회원가입</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function check_id() {
        const userId = document.getElementById("user_id").value;
        if (userId) {
            url = "id_check.php?userId=" + userId;
            window.open(url, "Id check", "width=400,height=200");
        } else {
            alert("아이디를 입력하세요.");
        }
    }

    function check_address() {
        window.open("address.php", "Address", "width=400,height=200");
    }
</script>

</html>