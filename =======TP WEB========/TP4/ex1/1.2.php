<?php
$date = date('d/m/Y');
$heure = date('H');

if ($heure >= 5 && $heure < 12) {
    $a = "Bon matin !";
} elseif ($heure >= 12 && $heure < 18) {
    $a = "Bonne après-midi !";
} else {
    $a = "Bonsoir !";
}
echo "Hello PHP, nous sommes le $date, $a";

?>