@extends('layout')
@section('title', 'BonK_Instructions')
@section('content')

<section>
    <h2 class="text_heading mb-11 text-3xl font-semibold ops-title">初めての方へ</h2>

    <div class="bg-white p-14">
        <h2 class="text-4xl mb-12">1.本サイトについて</h2>
        <p class="text-2xl ml-9 mb-16 leading-loose">当サイトは、お持ちの書籍（紙書籍、電子書籍）を登録していただくことで、所持している書籍を一覧で見ることのできるツールです。</p>

        <h2 class="text-4xl mb-10">2.書籍の登録について</h2>
        <p class="text-2xl ml-9 leading-loose">
         ヘッダーにある書籍登録を押下していただきますと、書籍登録ページへ遷移できます。<br>
         ボックス内にそれぞれ、タイトル、作者名、出版社、書籍タイプ、あらすじなどの情報を入れていただいた後、登録ボタンを押下していただくと登録できます。<br>
         登録いただいた内容は書籍一覧ページで閲覧可能です。
        </p>
    </div>
</section>

@endsection