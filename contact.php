<form action="display_contact.php" method="GET">
    <input type="text" name="pseudo" placeholder="Pseudo" required>
    <input type="email" name="email" placeholder="Email" required>
    <select name="categorie">
        <option value="nutrition">Nutrition</option>
        <option value="entrainement">Entraînement</option>
    </select>
    <label>Recevoir la newsletter ? <input type="checkbox" name="newsletter"></label>
    <input type="number" name="frequence" placeholder="Fréquence par mois">
    <button type="submit">Envoyer</button>
</form>