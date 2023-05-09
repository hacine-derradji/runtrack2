<?php
$estVrai = true;
$age = 23;
$prenom = "Hacine";
$salaire = 1000.50;



echo "<table border='1'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>Boolean</td><td>estVrai</td><td>" . var_export($estVrai, true) . "</td></tr>";
echo "<tr><td>Entier</td><td>age</td><td>" . $age . "</td></tr>";
echo "<tr><td>Chaîne de caractères</td><td>Prénom</td><td>" . $prenom . "</td></tr>";
echo "<tr><td>Nombre à virgule flottante</td><td>salaire</td><td>" . $salaire . "</td></tr>";
echo "</tbody>";
echo "</table>";
?>
