<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

    <title>BonK_login</title>
</head>
<body>
    <div class="w-full max-w-xs mx-auto mt-3">
     <img class="w-3/5 text-center mb-10 mx-auto" src="{{ asset('images/logo.png')}}" alt="BonKロゴ">
     <h1 class="login_h1 text-center text-4xl font-medium mb-12">ログイン</h1>
        <form class="form-width bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mr-auto w-full">
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                E-mail
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            </div>
            <div class="flex items-center justify-between">
            <button class="login_button font-bold py-4 px-4 rounded focus:outline-none focus:shadow-outline text-center" type="button">
                ログイン
            </button>
            </div>
        </form>
    <footer class="text-center my-16">
        <small>&copy 2021 BonK</small>
    </footer>
    </div>

</body>
</html>