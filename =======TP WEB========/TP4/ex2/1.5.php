<?php

if( !empty($_GET['prenom']) && !empty($_GET['nom']) && !empty($_GET['sexe']) && !empty($_GET['vins'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $sexe = $_GET['sexe'];
    $vins = $_GET['vins'];
    echo "<hr>";

    echo "<table border='1'>
    <tr>
        <th>Nom</th>
        <td>$nom</td>
    </tr>
    <tr>
        <th>Prenom</th>
        <td>$prenom</td>
    </tr>
    <tr>
        <th>Sexe</th>
        <td>$sexe</td>
    </tr>
    <tr>
        <th>vins</th>";
        foreach($vins as $vin){
            echo"<td>$vin</td>";
        }
    echo"</tr>
</table>";
} else {
    echo"Données manquantes";
}

?>

