<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('books')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $books = [
                [
                'name' => '僕のヒーローアカデミア',
                'author' => '堀越耕平',
                'publisher' => '集英社',
                'detail' => null,
                ],

                [
                'name' => '僕のヒーローアカデミア2',
                'author' => '堀越耕平',
                'publisher' => '集英社',
                'detail' => null,
                ],

                [
                'name' => '僕のヒーローアカデミア3',
                'author' => '堀越耕平',
                'publisher' => '集英社',
                'detail' => null,
                ],
                ];

        // 登録
        foreach($books as $book) {
        \App\Models\Book::create($book);
        }
    }
}
