<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2 class="ops-title mb-5">書籍登録</h2>
        </div>
    </div>
    <div class="w-full mx-auto mt-3 ml-56">
        <div class="form-width bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4  w-4/6 text-center">

            @include('book/message')

            @if($target == 'store')
            <form action="/laravel/public/book" method="post" enctype="multipart/form-data">
            @elseif($target == 'update')
            <form action="/laravel/public/book/{{ $book->id }}" method="post" class="" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">

                </div>
                <div class="form-group mb-4">
                    <input type="file" name="image" accept="{{ $book->image }}" multiple>
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ $book->name }}" placeholder="書籍名">
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="author" value="{{ $book->author }}"placeholder="作者名">
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="publisher" value="{{ $book->publisher }}"placeholder="出版社">
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="type" value="{{ $book->type }}"placeholder="タイプ">
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control shadow appearance-none border rounded w-full py-32 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="detail" value="{{ $book->detail }}"placeholder="あらすじ">
                </div>
                <button type="submit" class="btn btn-default login_button font-bold py-4 px-8 rounded focus:outline-none focus:shadow-outline text-center text-white">内容を登録する</button>
                <!-- <a href="/laravel/public/book">戻る</a> -->
            </form>
        </div>
    </div>
</div>
