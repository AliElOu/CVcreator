<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['texte'])) {
        $texte = $_POST['texte'];
        $texte_avec_br = nl2br($texte); // Remplace les sauts de ligne par des <br>
        echo $texte_avec_br;
    } else {
        echo "Veuillez saisir du texte.";
    }
}
?>
