@extends('layouts.app')

@section('content')
    <h1>Book List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>ISBN</th>
                <th>Release Date</th>
                <th>Description</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->release_date }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->author->name }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
