<?php
$conn = new PDO(
    "mysql:host=localhost;dbname=jour09",
    "root",
    "");

$requete = "SELECT sum(superficie) AS nombre_superficie FROM etage";
$sql = $conn ->prepare($requete);
$sql ->execute();
$go = $sql ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr><th style='border: 1px solid'>Superficie totale" . "</th></tr>";

foreach ($go as $value){
    echo "<td style='border: 1px solid; text-align: center'>" . $value['nombre_superficie'] . "</td>";
    echo "</table>";
}

