<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifié utilisateur</title>
</head>
<body>
    
    <form action="{{ route('users.update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nom d'utilisateur</label>
            <input type="text" value="{{ $users->name }}" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" value="{{ $users->email }}" name="email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" value="{{ $users->password }}" name="password">
        </div>

        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>

</body>
</html>