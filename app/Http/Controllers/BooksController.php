<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show()
    {
        $books = Books::all();

        return view('books.show', [
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Books::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'content' => $request->input('content'),
            'published_at' => now()
        ]);

        return redirect()->route('books.show');
    }

    public function showOne($id)
    {
        $book = Books::find($id);

        return view('books.showBook', compact('book'));
    }

    public function edit($id)
    {
        $books = Books::find($id);

        return view('books.edit', compact('books'));
    }

    public function update($id, Request $request)
    {
        $books = Books::find($id);
        $books->title = $request->input('title');
        $books->author = $request->input('author');

        $books->save();

        return redirect()->route('books.show');
    }

    public function delete($id)
    {
        $books = Books::find($id);
        $books->delete();

        return redirect()->route('books.show');
    }
}
