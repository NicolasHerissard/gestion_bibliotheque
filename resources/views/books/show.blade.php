<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livres</title>
</head>
<body>
    
    <h1>Livres</h1>

    <div>
        <a href="{{ route('books.create') }}">Créer un livres</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <td>Titre</td>
                <td>Auteur</td>
                <td>Contenu</td>
                <td>Publié le :</td>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td><a href="{{ route('books.showBook', $book->id) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->content }}</td>
                <td>{{ $book->published_at }}</td>
                <td>
                    <form action="{{ route('books.delete', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                    <form action="{{ route('books.edit', $book->id) }}" method="get">
                        <button>Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>