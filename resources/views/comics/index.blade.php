@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <div class="bg-black">
        <div class="container">
            <span class="label">CURRENT SERIES</span>
            <div class="d-flex flex-wrap pt-5">
                @foreach ($comics as $comic)
                    <div class="box d-flex flex-column bg-black">
                        <img src="{{ $comic->thumb}}" alt="{{ $comic->title }}">
                        <div class="title">
                            <a href="{{route('comics.show', $comic->id)}}"><span>{{ $comic->title}}</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bottom-btn d-flex justify-content-around align-items-center">
                <button class="btn-blue">LOAD MORE</button>
                <button class="btn-blue"><a href="{{route('comics.create')}}">CREATE A NEW COMIC</a></button>
            </div>
        </div>
    </div>
@endsection
