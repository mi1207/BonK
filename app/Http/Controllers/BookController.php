<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
  public function index()
  {
      // DBよりBookテーブルの値を全て取得
      $books = Book::all();
     
      // 取得した値をビュー「book/index」に渡す
      return view('book/index', compact('books'));
  }

  public function show($request)
  {
      // DBよりBookテーブルの値を全て取得
        $books = Book::all();

      return view('book/detail', compact('books'));
  }

  public function edit($id)
  {
      // DBよりURIパラメータと同じIDを持つBookの情報を取得
      $book = Book::findOrFail($id);

      // 取得した値をビュー「book/edit」に渡す
      return view('/book/edit', compact('book'));
  }

  public function update(BookRequest $request, $id)
 {
    $book_all = $request->all();
    $book = Book::findOrFail($id);
    $book->name = $request->name;
    $book->author = $request->author;
    $book->publisher = $request->publisher;
    $book->type = $request->type;
    $book->detail = $request->detail;
    $book->save();
    $book->image =$request ->image;
    // 画像のオリジナルネーム取得
    if (file_exists($request->image)){
    $file_name = $request->file('image')->getClientOriginalName();
    // 画像保存
    $request->file('image')->storeAs('public/uploads',$file_name);
    // 画像のパスを作る
    $image_path ='../storage/app/public/uploads/'.$file_name;
    $book->fill($book_all)->save();
    }else {
    $image_path ='../storage/app/public/uploads/'.$file_name;
    $book->fill($book_all)->save();
    };
    // bookのイメージを画像のパスにする
    $book->image=$image_path;
    $book->save();

    return redirect("/book");
 }

 public function destroy($id)
 {
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect("/book");
 }

 public function create()
{
    // 空の$bookを渡す
    $book = new Book();
    return view('book/create', compact('book'));
}


public function store(BookRequest $request)
{
    // 全てのデータにリクエストを送る
    $book_all = $request->all();
    $book = new Book();
    $book->name = $request->name;
    $book->author = $request->author;
    $book->publisher = $request->publisher;
    $book->type = $request->type;
    $book->detail = $request->detail;
    $book->image =$request ->image;
    // 画像のオリジナルネーム取得
    if (file_exists($request->image)){
    $file_name = $request->file('image')->getClientOriginalName();
    // 画像保存
    $request->file('image')->storeAs('public/uploads',$file_name);
    // 画像のパスを作る
    $image_path ='../storage/app/public/uploads/'.$file_name;
    $book->fill($book_all)->save();
    }else {
    $image_path ='../storage/app/public/uploads/defult.jpg';
    $book->fill($book_all)->save();
    };
    // bookのイメージを画像のパスにする
    $book->image=$image_path;
    $book->save();
    return redirect("/book");
}

}

