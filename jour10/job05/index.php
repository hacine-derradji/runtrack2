<?php
$conn = new PDO ('mysql:host=localhost;dbname=jour09',
"root","");

$sql = "SELECT * FROM etudiants  WHERE DATEDIFF(CURRENT_DATE, naissance) < 6570";
$req = $conn ->prepare($sql);
$req ->execute();
$exec = $req ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>Prénom" . "</th>";
echo "<th style='border: 1px solid'>Nom" . "</th>";
echo "<th style='border: 1px solid'>Naissance" . "</th>";
echo "<th style='border: 1px solid'>sexe" . "</th>";
echo "<th style='border: 1px solid'>Email" . "</th>";
echo "</tr>";

foreach ($exec as $value){
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $value['prenom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['nom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['naissance'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['sexe'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['email'] . "</td>";
}