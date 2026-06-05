<?php
require_once 'outils.php' ;
try {

    $bdd = connexionBdd();
    $requete = $bdd->query('SELECT nb_question, question, points, reponse FROM question');
    $question= $requete->fetchALL();

    Var_dump($question);
} catch (exception $e) {
    die("Erreur : ".$e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration du Concours</title>
</head>
<body>
    <h1>Bienvenue sur l'administration des gestion des Questions</h1>

    <table border="1">
        <thead>
            <tr>
                <th>nb_question</th>
                <th>Question</th>
                <th>Réponse</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($question as $q): ?>
                <tr>
                    <td><?php echo $q['nb_question']; ?></td>
                    <td><?php echo $q['question']; ?></td>
                    <td><?php echo $q['reponse']; ?></td>
                    <td><?php echo $q['points']; ?> pts</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>


