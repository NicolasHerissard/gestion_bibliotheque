<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Titre du livre</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="author">Auteur</label>
            <input type="author" name="author">
        </div>
        <div>
            <label for="content">Contenu du livre</label>
            <input type="text" name="content">
        </div>

        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>
    
</body>
</html>