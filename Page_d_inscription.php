<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'incription</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="/img/icon.png" />
</head>
<body>
    <header>
        <img src="img/logo.png" class="logo">
    </header>
    <div class="container">
        <h1>Inscription</h1>
        <form action="register.php" method="POST">
            <label for="username">Nom d'utilisateur :</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <button class="btn" type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>