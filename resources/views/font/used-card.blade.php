@extends('layouts.app')

@section('content')
<section>
    <div class="container h-screen mt-12 m-auto">
        <div class="banner">
            <div class="banner-content">
                <div class="title"></div>
                <div class="search">
                    <div class="filter-type"></div>
                    <div class="filter-option"></div>
                    <div class="filter-price"></div>
                    <div class="search"></div>
                </div>
                <div class="text-trend"></div>
            </div>
        </div>
        <div class="like-find">
            <div class="title"></div>
            <div class="list-item"></div>
        </div>
        <div class="recently-list">
            <div class="item-car">
                <div class="avatar"><img src="" alt=""></div>
                <div class="">
                    <div class="user-name"></div>
                    <div class="time"></div>
                </div>
                <div class="img-item"></div>
                <div class="product-name"></div>
                <div class="price"></div>
                <div class="like"></div>
            </div>
        </div>
        <div class="polular-cart">
            <div class="item-car">
                <div class="avatar"><img src="" alt=""></div>
                <div class="">
                    <div class="user-name"></div>
                    <div class="time"></div>
                </div>
                <div class="img-item"></div>
                <div class="product-name"></div>
                <div class="price"></div>
                <div class="like"></div>
            </div>
        </div>
    </div>
   
</section>

@endsection