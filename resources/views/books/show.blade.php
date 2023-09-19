<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Livres</h1>
    
    <table>
        <thead>
            <tr>
                <td>Titre</td>
                <td>Auteur</td>
                <td>Publié le :</td>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_at }}</td>
                <td>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>