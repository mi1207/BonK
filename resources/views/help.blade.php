@extends('layout')
@section('title', 'BonK_favorite')
@section('content')

    <div class="w-full mx-auto mt-14 ml-80">
        <form class="form-width bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4  w-1/2">
        <h1 class="ops-title text-center text-4xl font-medium mb-12">お問い合わせフォーム</h1>
            <div class="mb-4">
            <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
                お名前
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-lg font-bold mb-2" for="password">
                メールアドレス
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password">
            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
                件名
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
                お問い合わせ内容
            </label>
            <input class="shadow appearance-none border rounded w-full py-14 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
            </div>
            <button class="btn btn-default login_button font-bold py-4 px-14 rounded focus:outline-none focus:shadow-outline text-white ml-52" type="button">
                送信
            </button>
        
        </form>

        @endsection