<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Devinette Nutrition</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <header>
        <h1>La Devinette Sportive</h1>
    </header>

    <main class="main-card">
        <h3>Question :</h3>
        <p>Combien de grammes de protéines par kilo de poids de corps conseille-t-on environ pour un sportif de force ?</p>

        <form method="POST" action="devinette.php">
            <input type="number" name="reponse_user" step="0.1" placeholder="Ex: 1.5" required>
            <button type="submit" class="btn">Vérifier</button>
        </form>

        <?php
        // On vérifie si le formulaire a été envoyé
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $reponse = $_POST['reponse_user'];
            $juste = 2; // La réponse exacte

            echo "<div style='margin-top: 20px; padding: 10px; border-radius: 5px; background: #f9f9f9;'>";
            
            if ($reponse < $juste) {
                echo "<p style='color: red;'>C'est <strong>trop petit</strong> ! Un sportif a besoin de plus pour reconstruire ses muscles.</p>";
            } elseif ($reponse > $juste) {
                echo "<p style='color: red;'>C'est <strong>trop grand</strong> ! Au-delà de 2g, l'utilité est limitée pour la plupart des sportifs.</p>";
            } else {
                echo "<p style='color: green;'>⭐ <strong>Exact !</strong> 2g/kg est une excellente moyenne pour la prise de masse.</p>";
            }
            
            echo "</div>";
        }
        ?>
        
        <br>
        <a href="index.html" style="text-decoration: none; color: orange;">← Retour à l'accueil</a>
    </main>
</body>
</html>