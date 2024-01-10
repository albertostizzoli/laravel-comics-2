@extends('layouts.app')

@section('title', 'Comic Edit:' . $comic->title)


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    {{-- token --}}
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" value="{{ old('title', $comic->title) }}"
                            placeholder="Insert a Title" name="title">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" value="{{ old('price', $comic->price) }}"
                            placeholder="Insert a Price" name="price">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control  @error('type') is-invalid @enderror" id="type" value="{{ old('type', $comic->type) }}"
                            placeholder="Insert a Type" name="type">
                            @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series"
                            value="{{ old('series', $comic->series) }}" placeholder="Insert a Series" name="series">
                            @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date"
                            value="{{ old('sale_date', $comic->sale_date) }}" placeholder="Insert a Sale Date"
                            name="sale_date">
                            @error('sale_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" value="{{ old('thumb', $comic->thumb) }}"
                            placeholder="Insert a Image" name="thumb">
                    </div>
                    <textarea name="description" id="description" cols="100" rows="10">
                    {{ old('description', $comic->description) }}"
                </textarea>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger p-3 mt-2">CHANGE THIS COMIC</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
