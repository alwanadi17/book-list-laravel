@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('Books') }}</h1>
    <form method="post" action="{{ url('/books/store') }}">
        @csrf
        <div class="row mb-3">
            <label for="title" class="col-3 col-form-label">Title</label>
            <div class="col-9">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="genre" class="col-3 col-form-label">Genre</label>
            <div class="col-9">
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="author_id" class="col-3 col-form-label">Author</label>
            <div class="col-9">
                <select class="form-control" id="author_id" name="author_id">
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="release" class="col-3 col-form-label">Release Date</label>
            <div class="col-9">
                <input type="date" class="form-control" id="release" name="release" value="{{ old('release') }}" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-3 col-form-label">Description</label>
            <div class="col-9">
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="isbn" class="col-3 col-form-label">ISBN</label>
            <div class="col-9">
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-large btn-primary">
                    Simpan
                </button>
            </div>
        </div>
    </form>
</div>
@endsection