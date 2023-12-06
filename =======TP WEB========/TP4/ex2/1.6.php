<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET['traitement'])) {
    // Affichage du formulaire
    echo '
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title>Formulaire 1.6</title>
    </head>
    <body>
      <form action="1.6.php" method="GET">
        <!-- Les champs du formulaire -->
        <label for="prenom">Prenom : </label>
        <input type="text" id="prenom" name="prenom"> <br><br>
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom"> <br><br>
        <label for="sexe">Sexe :</label>
        <select name="sexe" id="sexe">
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br><br>
        <label for="vins">Vins :</label><br>
        <select name="vins" id="vins" multiple>
            <option value="bordeaux">bordeaux</option>
            <option value="beaujolais">beaujolais</option>
            <option value="loire">loire</option>
        </select><br><br>
        <input type="hidden" name="traitement" value="true">
        <!-- Champ caché pour le traitement -->
        <input type="submit" value="Envoyer">
      </form>
    </body>
    </html>';
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['traitement'])) {
    if (!empty($_GET['nom']) && !empty($_GET['prenom']) && isset($_GET['sexe']) && isset($_GET['vins'])) {
        // Traitement des données
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $sexe = $_GET['sexe'];
        $vins = $_GET['vins'];

        // Affichage des résultats
        echo "Nom : $nom <br>";
        echo "Prénom : $prenom <br>";
        echo "Sexe : $sexe <br>";
        echo "Vins sélectionnés : $vins";
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>
