<header class="header mb-6 mt-6">
    <div class="flex">
        <h1 class="w-1/12 mr-auto"><img src="{{ asset('images/logo.png')}}" alt="BonKロゴ"></h1>
        <nav class="md:mb-10">
            <ul class="flex justify-end">
                <li class="ml-6">
                    <a class="nav_text" href="{{ url('/book/create') }}">書籍登録</a>
                </li>
                <li class="ml-6">
                    <a class="nav_text" href="{{ url('/book') }}">登録書籍一覧</a>
                </li>
                <li class="ml-6">
                    <a class="nav_text" href="{{ url('/book/detail') }}">登録書籍詳細</a>
                </li>
                <li class="ml-6">
                    <a class="nav_text" href="{{ url('/favorite_paper') }}">お気に入り</a>
                </li>
                <li class="ml-6">
                    <a class="nav_text" href="{{ url('/first') }}">はじめての方へ</a>
                </li>
                <li class="ml-6">
                    <a class="nav_text" href="{{ url('/help') }}">ヘルプ</a>
                </li>
            </ul>
        </nav>
    </div>
        

        <!-- <form class="searchForm">
            <input class="searchForm-input" type="text">
            <button class="searchForm-submit" type="submit"></button>
        </form> -->

</header>