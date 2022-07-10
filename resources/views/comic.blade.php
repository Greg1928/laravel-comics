@extends('layouts.base')


@section('page-title')
    
@endsection

@section('page-content')
    <div class="thumb">
        <div class="container-small">
            <img src="{{$item['thumb']}}" alt="">
        </div>
    </div>
    <div class="info-up">
        <div class="container-small">
            <div class="left-up-part">
                <h2>{{$item['title']}}</h2>
                <div class="price">
                    <span>U.S. Price: {{ $item['price'] }}</span>
                    <span>Available</span>
                    <div class="inline">
                        <span>check availability</span>
                    </div>
                </div>
                <div class="description">
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
            <div class="right-up-part">
                <p>advertisement</p>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="info-bottom">
        <div class="container-small">
            <div class="content">
                <div class="talent-part">
                    <h3>Talent</h3>
                    <hr>
                    <div class="row">
                        <span>Art by:</span>
                        <div class="list">
                            @foreach ($item['artists'] as $artist)
                            <a href="#">{{$artist}}</a>,                            
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <span>Written by:</span>
                        <div class="list">
                            @foreach ($item['writers'] as $writers)
                            <a href="#">{{$writers}}</a>,                            
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="specs-part">
                    <h3>Specs</h3>
                    <hr>
                    <p>Series: <a href="#">{{$item['series']}}</a></p>
                    <hr>
                    <p>U.S. Price: {{$item['price']}} </p>
                    <hr>
                    <p>On Sale Date: {{$item['sale_date']}}</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
