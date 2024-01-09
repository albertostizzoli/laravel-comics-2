@extends('layouts.app')

@section('title', 'Comic')

@section('content')
    <div id="comics">
        <div class="space-blue">
            <div class="small">
                <div class="cover">
                    <span class="comic">{{ $comic->type}}</span>
                    <img src="{{ $comic->thumb }}" alt="cover">
                    <span class="gallery">VIEW GALLERY</span>
                </div>
            </div>
        </div>
        <div class="small">
            <div class="container">
                <div class="row my-5">
                    <div class="col-8">
                        <h2><strong>{{ $comic->title }}</strong></h2>
                        <div class="d-flex green">
                            <div class="col-9 d-flex justify-content-between align-items center">
                                <div class="col-auto">
                                    <span><strong>U.S. Price: </strong>{{ $comic->price }}</span>
                                </div>
                                <div class="col-auto">
                                    <span>AVAILABLE</span>
                                </div>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center">
                                <span>CHECK</span>
                            </div>
                        </div>
                        <p>{{ $comic->description }}</p>
                    </div>
                    <div class="col-4 text-end">
                        <span>ADVERTISEMENT</span>
                        <div>
                            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-3 ">
                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <h2><strong>Specs</strong></h2>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-25"><strong>Series:</strong></td>
                                <td><a href="#">{{ $comic->series }}</a></td>
                            </tr>
                            <tr>
                                <td class="w-25"><strong>U.S. Price:</strong></td>
                                <td>{{ $comic->price }}</td>
                            </tr>
                            <tr>
                                <td class="w-25"><strong>On Sale Date:</strong></td>
                                <td>{{ $comic->sale_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">DELETE THIS COMIC</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
