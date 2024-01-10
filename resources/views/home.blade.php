@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container text-center p-5">
<h1>WELCOME TO DC COMICS SHOP</h1>
<button class="btn btn-primary"><a href="{{route('comics.index')}}">GO TO THE COMICS</a></button>
</div>
@endsection
