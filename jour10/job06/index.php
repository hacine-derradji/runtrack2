<?php
$conn = new PDO(
    "mysql:host=localhost;dbname=jour09",
"root",
"");

$sql = "SELECT COUNT(*) as nb_etudiants FROM etudiants;";
$req = $conn->prepare($sql);
$req ->execute();
$exec = $req->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr><th style='border: 1px solid'>Nombre d'etudiants" . "</th></tr>";

foreach ($exec as $nb_etudiants){
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $nb_etudiants['nb_etudiants'] . "</td>";
}


