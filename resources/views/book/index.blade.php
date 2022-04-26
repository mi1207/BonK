
@section('content')
@extends('book/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title mb-5">登録書籍一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">

      <section>
        <div class="grid grid-cols-4 gap-16">
        @foreach($books as $book)
          <div class="max-w-sm rounded overflow-hidden border-b-12">
            <img class="w-full" src="{{ $book->image }}" alt="画像">
          </div>
          @endforeach
        </div>
      </section>
    </table>
  </div>
</div>
@endsection


