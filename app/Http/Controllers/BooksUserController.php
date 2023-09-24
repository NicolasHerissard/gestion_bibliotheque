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
        $books_users = BooksUser::all();

        return view('booksUser.showBooksUser', [
            'books_users' => $books_users
        ]);
    }

    public function storeBooksUser(Request $request)
    {
        $user_id = $request->input('user_id');
        $books_id = $request->input('books_id');
        $render_at = $request->input('render_at');

        if($user_id != "" && $books_id != "" && $render_at != "")
        {
            BooksUser::create([
                'user_id' => $request->input('user_id'),
                'books_id' => $request->input('books_id'),
                'render_at' => $request->input('render_at'),
            ]);

            return redirect()->route('booksUser.showBooksUser')->with("erreur", "Informations manquantes");
        }

        return redirect()->route('users.show');
    }

    public function createBooksUser()
    {
        $books = Books::all();
        $users = User::all();

        return view('booksUser.createBooksUser', [
            'books' => $books,
            'users' => $users
        ]);
    }
}
