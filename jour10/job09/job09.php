<?php
$conn = new PDO (
    'mysql:host=localhost;dbname=jour09',
    'root',''
);

$req = 'SELECT * FROM salles ORDER BY capacite DESC;';
$sql = $conn ->prepare($req);
$sql ->execute();
$exec = $sql ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>Nom" . "</th>";
echo "<th style='border: 1px solid'>Id_etage" . "</th>";
echo "<th style='border: 1px solid'>Capacite" ."</th>";
echo "<tr>";

foreach ($exec as $item) {
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $item['nom'] . "</td>";
    echo "<td style='border: 1px solid'>" . $item['id_etage'] . "</td>";
    echo "<td style='border: 1px solid'>" . $item['capacite'] . "</td>";

}