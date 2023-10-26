@extends('layouts.app')

@section('content')

<section class="products_bg">
    <div class="container">
        <div class="row row-cols-6">
            @foreach($comics as $comic)
            <div class="col mb-5">
                <div class="comic_img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h6 class="comic_text">{{$comic['series']}}</h6>
            </div>
            @endforeach
        </div>
    </div>
</section>




@endsection