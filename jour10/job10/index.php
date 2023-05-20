<?php
$conn = new PDO
('mysql:host=localhost;dbname=jour09',
'root',
'');

$req = "SELECT * FROM salles  ORDER BY capacite ASC ";
$sql = $conn ->prepare($req);
$sql ->execute();
$exec = $sql ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>Nom" . "</th>";
echo "<th style='border: 1px solid'>Id_etage" . "</th>";
echo "<th style='border: 1px solid'>Capacite" ."</th>";
echo "<tr>";

foreach ($exec as $value){
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $value['nom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['id_etage'] . "</td>";
    echo "<td style='border: 1px solid'>" . $value['capacite'] . "</td>";
}