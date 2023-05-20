<?php

$conn = new PDO(
    'mysql:host=localhost;dbname=jour09;',
    'root',
    'Scarface13'
);

$sql = "SELECT `nom`, `prenom`, `naissance` FROM etudiant WHERE sexe = 'Femme'";
$req = $conn ->prepare($sql);
$req ->execute();
$requete = $req ->fetchAll();

echo '<table style="border-collapse: collapse">' . "<thead>";
echo '<tr>';
echo '<th style="border: 1px solid; padding: 10px">Prénom</th>';
echo '<th style="border: 1px solid; padding: 10px">nom</th>';
echo '<th style="border: 1px solid; padding: 10px">Naissance</th>';
echo '</tr>' . '</thead>';

foreach ($requete as $v){
    echo '<tbody>';
    echo '<tr>';
    echo '<td style="border: 1px solid; padding: 10px">' . $v['prenom'] . '</td>';
    echo '<td style="border: 1px solid; padding: 10px">' . $v['nom'] . '</td>';
    echo '<td style="border: 1px solid; padding: 10px">' . $v['naissance'] . '</td>';
