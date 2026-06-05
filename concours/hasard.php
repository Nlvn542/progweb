<?php
include("outils.php");
$bdd = connexionBdd();


$requete = $bdd->query("SELECT *, RAND() AS hasard FROM question ORDER BY hasard ASC LIMIT 1");
$question_aleatoire = $requete->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Question au Hasard</title>
</head>
<body>
    <h1>Répondez à la question suivante :</h1>
    
    <p>
        <strong>Question :</strong> <?php echo htmlspecialchars($question_aleatoire['question']); ?> 
        (Valeur : <?php echo htmlspecialchars($question_aleatoire['points']); ?> points)
    </p>

    <form action="hasard-resultat.php" method="POST">
        <input type="hidden" name="nb_question" value="<?php echo $question_aleatoire['nb_question']; ?>">
        
        <button type="submit" name="choix_joueur" value="Oui">OUI</button>
        <button type="submit" name="choix_joueur" value="Non">NON</button>
    </form>

    <br>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>