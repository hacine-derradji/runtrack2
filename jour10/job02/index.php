<?php
// Connexion à la mysql avec PDO
$conn = new PDO(
    'mysql:host=localhost;dbname=jour09;',
    'root',
    'Scarface13'
);
// Configuration et requete
$sql = 'SELECT * FROM salles';
$requete = $conn->prepare($sql);
$requete->execute();
$requst = $requete ->fetchAll();

// Mise en place des noms des champs
echo "<table style='border-collapse: collapse'>";
echo "<thead>";
echo "<tr>";
echo "<th style='border: 1px solid; padding: 10px'>Nom</th>";
echo "<th style='border: 1px solid; padding: 10px'>Capacité";
echo "</thead>" . "</tr>";

// Boucle sur la liste pour l'afficher sur la table
foreach ($requst as $value) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td style='border: 1px solid; padding: 10px'>" . $value['nom'] . "</td>";
    echo "<td style='border: 1px solid;padding: 10px'>" . $value['capacite'] . "</td>";
    echo "</tbody>" . "</table>";
}