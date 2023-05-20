<?php
$conn = new PDO
('mysql:host=localhost;dbname=jour09',
'root',
"");

$requete = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
$sql = $conn ->prepare($requete);
$sql ->execute();
$v = $sql ->fetchAll();

echo "<table style='border-collapse: collapse'>" . "<thead>";
echo "<tr>";
echo "<th style='border: 1px solid'>Prénom"."</th>";
echo "<th style='border: 1px solid'>Nom"."</th>";
echo "<th style='border: 1px solid'>Naissance"."</th>";
echo "<th style='border: 1px solid'>sexe"."</th>";
echo "<th style='border: 1px solid'>Email"."</th>";
echo "</tr>" . "</thead>";

foreach ($v as $value){
    echo "<tbody>";
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $value['prenom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['nom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['naissance'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['sexe'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['email'] . "</td>";
    echo "</tr>" . "</tbody>";

}


