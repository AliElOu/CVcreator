<?php
include 'Personne.php'; 

$personne1 = new Personne("Doe", "John", "2003-06-15");
$personne2 = new Personne("Smith", "Alice", "1985-10-22");

echo $personne1->presenter() . " Age: " . $personne1->age() . " ans<br>";
echo $personne2->presenter() . " Age: " . $personne2->age() . " ans<br>";
?>
