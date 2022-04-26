@extends('book/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title mb-5">書籍詳細</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <section>
        <div class="grid grid-cols-4 gap-16">
        @foreach($books as $book)
          <div class="max-w-sm rounded overflow-hidden bg-white">

            <img class="w-full" src="{{ asset(url($book->image))}}" alt="Sunset in the mountains">
            
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-3 pb-1 border-b-2 border-black">{{ $book->name }}</div>
                <p class="text-gray-600 text-base mb-2">{{ $book->author}}</p>
                <p class="text-gray-600 text-base mb-2">{{ $book->publisher }}</p>
                <p class="text-gray-600 text-base border-solid border border-gray-600 rounded w-24 text-center mt-3">{{ $book->type }}</p>
                <p class="text-gray-600 text-base mb-2 mt-5">{{ $book->detail}}</p>
                <div class="flex mt-5 justify-center">
                  <a href="/laravel/public/book/{{ $book->id }}/edit" class="btn py-2 px-6 text-white rounded">編集</a>
                  <form action="/laravel/public/book/{{ $book->id }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-xs btn-danger mx-2 text-white py-2 px-6 rounded" aria-label="Left Align">削除</button>
                  </form>
                </div>
              
            </div>
          </div>
          @endforeach
        </div>
      </section>
    </table>
  </div>
</div>
@endsection

