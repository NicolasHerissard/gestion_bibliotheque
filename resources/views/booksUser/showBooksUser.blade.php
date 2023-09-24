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
    
    <table>
        <thead>
            <tr>
                <td>Nom Utilisateur</td>
                <td>Titre du livre</td>
                <td>Date limite</td>
            </tr>
        </thead>
        <tbody>
        @foreach($books_users as $books_users)
            <tr>
                <td>{{ $books_users->user_id }}</td>
                <td>{{ $books_users->books_id }}</td>
                <td>{{ $books_users->render_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>