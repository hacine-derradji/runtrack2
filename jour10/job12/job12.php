<?php
$conn = new PDO
('mysql:host=localhost;dbname=jour09',
    'root',
    '');

$req = "SELECT `prenom`,`nom`,`naissance` FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'";
$sql = $conn ->prepare($req);
$sql ->execute();
$exec = $sql ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>" . "Prénom" . "</th>";
echo "<th style='border: 1px solid'>" . "Nom" . "</th>";
echo "<th style='border: 1px solid'>" . "Date_naissance" ."</th>";
echo "</tr>";

foreach ($exec as $value){   echo "<tr>";
    echo "<td style='border: 1px solid'>" . $value['prenom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['nom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['naissance'] . "</td>";
}

