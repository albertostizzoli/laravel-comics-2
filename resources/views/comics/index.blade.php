@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <div class="bg-black">
        <div class="container">
            <span class="label">CURRENT SERIES</span>
            <div class="d-flex flex-wrap pt-5">
                @foreach ($comics as $comic)
                    <div class="box d-flex flex-column bg-black">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="title">
                            <a href="{{ route('comics.show', $comic->id) }}"><span>{{ $comic->title }}</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bottom-btn d-flex justify-content-around align-items-center">
                <button class="btn-blue">LOAD MORE</button>
                <button class="btn-blue"><a href="{{ route('comics.create') }}">CREATE A NEW COMIC</a></button>
                <form action="{{ route('comics.index') }}" method="GET">
                    <div class="d-flex justify-content-around align-items-center">
                        <select class="form-select w-50" id="select-filter" name="genre"
                            aria-label="Default select example">
                            <option selected value="">All</option>
                            <option value="comic">Comic Book</option>
                            <option value="graphic">Graphic Novel</option>
                        </select>
                        <div>
                            <button type="submit" class="btn btn-primary"> Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
