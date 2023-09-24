<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livre</title>
</head>
<body>

    <h1>Listes des livres empruntés :</h1>

    @if (Session::has('erreur'))
        <div class="erreur">
            {{ Session::get('erreur')}}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="success">
            {{Session::get('success')}}
        </div>
    @endif

    <a href="{{ route('booksUser.createBooksUser') }}">Choisir un livre</a>
    
    <table>
        <thead>
            <tr>
                <td>Nom Utilisateur</td>
                <td>Titre du livre</td>
                <td>Date limite</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        @foreach($books_users as $book_user)
            <tr>
                <td>{{ $books_users->users->name }}</td>
                <td>{{ $books_users->books->title }}</td>
                <td>{{ $books_users->render_at }}</td>
                <td>
                    <form action="{{ route('booksUser.deleteBooksUser', $books_users->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>