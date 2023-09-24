<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
</head>
<body>

    <h1>Utilisateurs</h1>
    <a href="{{ route('users.create') }}">Créer un utilisateur</a>

    @if (Session::get('erreur'))
        <div class="erreur">
            {{ Session::get('erreur') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <td>Nom</td>
                <td>Email</td>
                <td>Mot de passe</td>
                <td>Créer le :</td>
                <td>Action : </td>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $users)
            <tr>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->password }}</td>
                <td>{{ $users->created_at }}</td>
                <td>
                    <form action="{{ route('users.delete', $users->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="delete">Delete</button>
                    </form>
                    <form action="{{ route('users.edit', $users->id) }}" method="get">
                        @csrf
                        @method('PUT')
                        <button>Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</body>
</html>