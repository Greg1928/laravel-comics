@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
<section class="thumbSection">
    <span>current series</span>
    <div class="container">
        <div class="card-list">
            @foreach ($comics as $id => $item)
                    <div class="card">
                        <a href="{{route('item',['id'=> $id])}}">
                            <img src="{{ $item['thumb'] }}" alt="">
                            <p>{{ $item['series'] }}</p>
                        </a>
                    </div>
            @endforeach
        </div>
        <div class="load-more">
            <a href="#">load more</a>
        </div>
    </div>
</section>
@endsection