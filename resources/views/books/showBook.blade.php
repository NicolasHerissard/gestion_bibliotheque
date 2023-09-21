<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $book->title }}</title>
</head>
<body>

    <h1>Livre N°{{ $book->id }}</h1>

    <h3>Auteur du livre : {{ $book->author }}</h3>

    <p>Contenu du livre : <br/>
    
        {{ $book->content }}
        
    </p>
    
</body>
</html>