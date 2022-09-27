@extends('layout.app')

@section('page_title', 'Homepage')

@section('comics')

    <div class="containerWidth">
        @foreach ($comics2 as $comic)
            <div class="card_comics">
                <div class="img_container">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <h6>{{$comic['title']}}</h6>
            </div>
        @endforeach
    </div>
    <div class="button">LOAD MORE</div>

@endsection