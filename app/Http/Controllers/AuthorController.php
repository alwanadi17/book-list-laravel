<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->save();
        return redirect()->route('authors.index');
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->save();
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        Author::destroy($id);
        return redirect()->route('authors.index');
    }
}
