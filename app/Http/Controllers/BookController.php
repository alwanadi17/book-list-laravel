<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\AuthorController;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = AuthorController::index();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->genre = $request->input('genre');
        $book->isbn = $request->input('isbn');
        $book->release_date = $request->input('release_date');
        $book->description = $request->input('description');
        $book->author_id = $request->input('author_id');
        $book->save();
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $authors = AuthorController::index();
        return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->genre = $request->input('genre');
        $book->isbn = $request->input('isbn');
        $book->release_date = $request->input('release_date');
        $book->description = $request->input('description');
        $book->author_id = $request->input('author_id');
        $book->save();
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }
}
