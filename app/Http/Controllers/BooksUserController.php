<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\BooksUser;
use App\Models\User;
use Illuminate\Http\Request;

class BooksUserController extends Controller
{
    public function showBooksUser()
    {
        $books = Books::all();
        $users = User::all();

        return view('booksUser.showBooksUser', [
            'books' => $books,
            'users' => $users
        ]);
    }

    public function storeBooksUser(Request $request)
    {
        BooksUser::create([
            'user_id' => $request->input('user_id'),
            'books_id' => $request->input('books_id'),
            'render_at' => $request->input('render_at'),
        ]);

        return redirect()->route('booksUser.showBooksUser');
    }
}
