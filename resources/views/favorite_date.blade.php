@extends('layout')
@section('title', 'BonK_favorite')
@section('content')

    <section>
        <h2 class="text_heading mb-11 text-3xl font-semibold ops-title">お気に入り書籍一覧（仮）</h2>
        <ul class="flex border-b mb-14">
            <li class="-mb-px mr-1">
                <a class="text_brown_paper inline-block py-2 px-4 font-semibold text-gray-600" href="{{ url('/favorite_paper') }}">紙書籍</a>
            </li>
            <li class="mr-1">
                <a class="text_brown_date  text-gray-600 inline-block border-l border-t border-r rounded-t py-2 px-4  font-semibold underline" href="#">電子書籍</a>
            </li>
        </ul>
    </section>

    <section>
        <div class="grid grid-cols-4 gap-16">
            <div class="max-w-sm rounded overflow-hidden bg-white">
            <img class="w-full" src="{{ asset('images/image01.jpg')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">僕のヒーロアカデミア</div>
                <p class="text-gray-600 text-base">堀越耕平</p>
            </div>
            
            </div>

            <div class="max-w-sm rounded overflow-hidden bg-white">
            <img class="w-full" src="{{ asset('images/image02.jpg')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">僕のヒーロアカデミア2</div>
                <p class="text-gray-600 text-base">堀越耕平</p>
            </div>
            
            </div>

            <div class="max-w-sm rounded overflow-hidden bg-white">
            <img class="w-full" src="{{ asset('images/image03.jpg')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">僕のヒーロアカデミア3</div>
                <p class="text-gray-600 text-base">堀越耕平</p>
            </div>
            
            </div>

            <div class="max-w-sm rounded overflow-hidden bg-white">
            <img class="w-full" src="{{ asset('images/image04.jpg')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">僕のヒーロアカデミア4</div>
                <p class="text-gray-600 text-base">堀越耕平</p>
            </div>
            
            </div>


        </div>
    </section>
@endsection