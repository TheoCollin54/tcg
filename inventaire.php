<?php
    $host = 'localhost';
    $db = 'bdd_ygo';
    $user = 'root';
    $pass = '';
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaire</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="/img/icon.png" />
</head>
<body>
    <header>
        <img src="img/logo.png" class="logo">
    </header>
    <?php
    // Requête pour récupérer les chemins d'images
    $sql = "SELECT image FROM cards";
    $stmt = $pdo->query($sql);

    // Affichage des cartes
    echo "<h1>Votre collection de cartes :</h1>";
    echo "<div style='display: flex; flex-wrap: wrap;'>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $path = htmlspecialchars($row['image']);
        echo "<div style='margin: 10px;'><img src='$path' style='width: 200px; height: auto;'></div>";
    }

    echo "</div>";
    ?>
    <button class="btn">Obtenir deux cartes</button>
</body>
</html>