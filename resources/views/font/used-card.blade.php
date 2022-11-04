@extends('layouts.app')

@section('content')
    @php
        $findItems = Config::get('products.item-find-usedcar');
        $trending = Config::get('products.trending-usedcar');
        $filters = Config::get('product.usedcar-option');
    @endphp
<section class="m-auto w-10/12">
    <div class="container mt-20 m-auto">
        <div class="banner w-full flex rounded-xl">
            <div class="w-8/12 pt-40 m-auto ">
                <div class="banner-content">
                    <div class="title"><h1 class="text-white text-3xl font-semibold">Over 10,000 Used Cars in Singapore</h1></div>
                    <div class="filter-search flex">
                        <div class="filter-type">
                            <select name="" id="multipleSelect" multiple name="filter-type" placeholder="Body" data-search="false" data-silent-initial-value-set="true">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option selected disabled hidden>Any</option>
                            </select>
                        </div>
                        <div class="filter-option">
                            <label>Depreciation</label>
                            <select name="" for="" id="multipleSelect" multiple name="filter-type" placeholder="Depreciation:" data-search="false" data-silent-initial-value-set="true">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                        </div>
                        <div class="filter-price">
                            <select name="" id="multipleSelect" multiple name="filter-type" placeholder="Body" data-search="false" data-silent-initial-value-set="true">
                                Depreciation:
                                <div>
                                </div>
                                <div>
                                    <button>clear</button>
                                    <button>Apply</button>
                                </div>
                            </select>
                        </div>
                        <div class="search"></div>
                    </div>
                    <div class="text-trend text-white">
                        <p class="font-semibold float-left">Trending:&nbsp;</p>
                        @foreach($trending as $trend)
                            <a href="">{{$trend}},</a>
                        @endforeach
                    </div>
                </div>
            
            </div>
        </div>
        <div class="add">

        </div>
        <div class="like-find">
            <div class="title"><h1 class="">What would you like to find</h1></div>
            <div class="list-it grid gap-x-7 grid-cols-7 text-center">
            @foreach($findItems as $findItem)
                <div class="item bg-[#f0f1f1] rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 cursor-auto">
                    <div class="py-5">
                        <img class="w-[72px] m-auto mb-2" src="{{$findItem}}" alt="">
                        <span class="name text-[#57585a]">Car Accessories</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="popular-brand">
            <div class="title"><h1>Popular Brands</h1></div>
            <div class="list-item">
                <div class="img"></div>
                <span class="name"></span>
            </div>
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