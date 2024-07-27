<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="/register" method="post">
        @csrf <!-- Ajoutez le jeton CSRF pour la sécurité -->
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
