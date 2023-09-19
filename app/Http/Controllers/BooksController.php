<?php

namespace App\Http\Controllers;

use App\Models\Books;
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
}
