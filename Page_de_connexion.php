<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="/img/icon.png" />
</head>
<body>
    <header>
        <img src="img/logo.png" class="logo">
    </header>
    <div class="container">
        <h1>Connexion</h1>
        <form  action="login.php" method="POST">
            <label for="email"><strong>Nom d'utilisateur :</strong></label><br>
            <input type="username" id="username" name="username" required><br><br>

            <label for="password"><strong>Mot de passe:</strong></label><br>
            <input type="password" id="password" name="password" required><br><br>

            <button class="btn" type="submit" class="login-btn">Se connecter</button>
        </form>
    </div>
</body>
</html>