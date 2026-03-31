<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réception Contact</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <main class="main-card">
        <h1>Merci pour votre message !</h1>
        <?php
            
            $pseudo = $_GET['pseudo'] ?? 'Utilisateur';
            $categorie = $_GET['categorie'] ?? '';

            echo "<p>Bonjour <strong>" . htmlspecialchars($pseudo) . "</strong>, nous avons bien reçu vos informations.</p>";

            // Logique demandée : proposer un lien selon la catégorie choisie
            if ($categorie == "proteine") {
                echo "<p>Puisque vous vous intéressez aux protéines, voici notre page dédiée : 
                      <a href='proteine.html' class='highlight'>Voir les protéines</a></p>";
            } elseif ($categorie == "glucide") {
                echo "<p>Découvrez nos conseils sur les glucides ici : 
                      <a href='glucide.html' class='highlight'>Voir les glucides</a></p>";
            }
        ?>
        <br>
        <a href="index.html" class="btn">Retour à l'accueil</a>
    </main>
</body>
</html>