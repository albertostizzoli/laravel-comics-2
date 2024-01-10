@extends('layouts.app')

@section('title', 'Comic Form')

@section('content')
    <h3 class="text-center p-2">CREATE A NEW COMIC</h3>
    <div class="container p-2">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="{{old('title')}}" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Insert a Title"
                            name="title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Insert a Price"
                            name="price">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="Insert a Type"
                            name="type">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" placeholder="Insert a Series"
                            name="series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" placeholder="Insert a Sale Date"
                            name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" placeholder="Insert a Image"
                            name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <button type="submit" class="btn btn-primary p-2 mt-4">Create a New Comic</button>
                </form>
            </div>
        </div>
    </div>
@endsection
