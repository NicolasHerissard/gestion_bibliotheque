<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emprunt</title>
</head>
<body>

    <h1>Emprunt de livre</h1>

    <form action="{{ route('booksUser.storeBooksUser') }}" method="post">
        @csrf
        
        <div class="list_users">
            <label for="name">Utilisateur :</label>
            <select name="user_id" id="">
                <option value="">Aucun sélectionné</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="list_books">
            <label for="books">Livre :</label>
            <select name="books_id" id="">
                <option value="">Aucun sélectionné</option>
                @foreach($books as $book)
                <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="render_at">Date limite :</label>
            <input type="date" name="render_at">

        <button type="submit">Enregistrer</button>
        </div>
    </form>
    
</body>
</html>