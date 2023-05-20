<?php
$conn = new PDO(
    'mysql:host=localhost;dbname=jour09',
    'root',
    ''
);

$req = "SELECT `nom`,`id_etage` FROM salles ";
$sql = $conn->prepare($req);
$sql ->execute();
$exec = $sql->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>Nom</th>";
echo "<th style='border: 1px solid'>Etage</th>";
echo "</tr>";

foreach ($exec as $value){
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $value['nom'];
    echo "<td style='border: 1px solid'>" . $value['id_etage'];
}