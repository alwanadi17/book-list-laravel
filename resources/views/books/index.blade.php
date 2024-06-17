@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ __('Books') }}</h1>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-large btn-primary" href="{{ url('/books/create') }}">Add Book</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Book</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr>
                <td class="d-flex">
                    <a href="{{ url('/books/edit/'.$book->id) }}" class="btn btn-primary">
                        Edit
                    </a>
                    &nbsp;
                    <form action="{{ url('/books/destroy/'.$book->id) }}" method="POST">

                        @csrf

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->genre }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2">
                    <div class="alert alert-warning">
                        No data
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @if($books)
    {{ $books->links() }}
    @endif
</div>
@endsection