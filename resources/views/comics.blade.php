@extends('layouts.app')

@section('content')

<section class="products_bg">
    <h5 class="section_title">CURRENT SERIES</h5>
    <div class="container pb-5">
        <div class="row row-cols-6">
            @foreach($comics as $comic)
            <div class="col mb-5">
                <div class="comic_img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h6 class="comic_text">{{$comic['series']}}</h6>
            </div>
            @endforeach
            <button class="btn btn-primary rounded-0 mx-auto">LOAD MORE</button>
        </div>
    </div>
</section>
<section id="services" class="position-relative z-2">
    <div class="container ">

        <ul class="service d-flex justify-content-between mb-0 list-unstyled">
            <li>
                <a href="#" class="text-decoration-none"><img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" class="service_pic">
                    <span class="service">DIGITAL COMICS</span></a>
            </li>
            <li>
                <a href="#" class="text-decoration-none"><img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" class="service_pic">
                    <span class="service">DC MERCHANDISE</span></a>
            </li>
            <li>
                <a href="#" class="text-decoration-none"><img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" class="service_pic">
                    <span class="service">SUBSCRIPTION</span></a>
            </li>
            <li>
                <a href="#" class="text-decoration-none"><img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" class="service_pic">
                    <span class="service">COMIC SHOP LOCATOR</span></a>
            </li>
            <li>
                <a href="#" class="text-decoration-none"><img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="" class="service_pic">
                    <span class="service">DC POWER VISA</span></a>
            </li>
        </ul>


    </div>
</section>




@endsection