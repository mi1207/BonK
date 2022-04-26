@extends('layout')
@section('title', 'BonK_TOP')
@section('content')

<section class="img_area md:mt-14">
        <div class="grid grid-cols-4 gap-24">
            <img class="w-full" src="{{ asset('images/image01.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image01.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image01.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image01.jpg')}}" alt="Sunset in the mountains">
        
            <img class="w-full" src="{{ asset('images/image02.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image02.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image02.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image02.jpg')}}" alt="Sunset in the mountains">
       
            <img class="w-full" src="{{ asset('images/image03.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image03.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image03.jpg')}}" alt="Sunset in the mountains">
            <img class="w-full" src="{{ asset('images/image03.jpg')}}" alt="Sunset in the mountains">
        </div>
</section>

@endsection