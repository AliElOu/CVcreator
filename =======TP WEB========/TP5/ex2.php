<?php
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "votre_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recherche_nom = $_POST['recherche_nom'];
    $recherche_prenom = $_POST['recherche_prenom'];

    $sql = "SELECT * FROM ANNUAIRE WHERE nom LIKE '$recherche_nom%' AND prenom LIKE '$recherche_prenom%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Nom: " . $row["nom"]. ", Prénom: " . $row["prenom"]. ", Numéro de poste: " . $row["numero_poste"]. "<br>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }
}

$conn->close();
?>
