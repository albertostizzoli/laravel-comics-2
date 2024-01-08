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
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Insert a Title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="Price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Insert a Price"
                            name="price">
                    </div>
                    <div class="mb-3">
                        <label for="Type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="Insert a Type"
                            name="type">
                    </div>
                    <div class="mb-3">
                        <label for="Series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" placeholder="Insert a Series"
                            name="series">
                    </div>
                    <div class="form-floating">
                        <label for="Description" class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Insert a Description" id="description" name="description"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary p-2 m-2">Create a New Comic</button>
                </form>
            </div>
        </div>
    </div>
@endsection
