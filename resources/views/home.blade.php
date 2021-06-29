@extends('layouts.app-bootstrap5')

@section('content')
    <div class="slider">
        <div class="slide">
            <h2>НИЗКИЕ ЦЕНЫ, БОЛЬШОЙ ВЫБОР, БЫСТРАЯ ДОСТАВКА</h2>
            <img src="{{ asset('images/slide_1.jpg') }}" alt="">
        </div>
        <div class="slide">
            <h2>НИЗКИЕ ЦЕНЫ, БОЛЬШОЙ ВЫБОР, БЫСТРАЯ ДОСТАВКА</h2>
            <img src="{{ asset('images/slide_1.jpg') }}" alt="">
        </div>
    </div>

    <div class="container">
        <h2 class="text-center my-4 font-weight-bold">Наши партнеры</h2>
        <div class="partner_slider">
            <img src="///f.nodacdn.net/367057" alt="">
            <img src="///f.nodacdn.net/367054" alt="">
            <img src="///f.nodacdn.net/367055" alt="">
            <img src="///f.nodacdn.net/367056" alt="">
            <img src="///f.nodacdn.net/367058" alt="">
            <img src="///f.nodacdn.net/367059" alt="">
        </div>
        <h4 class="font-weight-bold mt-5">Новости</h4>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-12 d-flex mb-3 border-bottom pb-4">
                    <img src="https://f.nodacdn.net/424675" alt="" width="150">
                    <div class="ml-3 ">
                        <div class="d-md-flex align-items-start">
                            <div class="badge badge-danger mr-2">{{ $post->created_at->diffForHumans() }}</div>
                            <div class="border-bottom post-title">{{ $post->title }}</div>
                        </div>
                        {{ $post->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection

