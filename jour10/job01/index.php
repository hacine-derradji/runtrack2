<?php
$connexion = new PDO(
    'mysql:host=localhost;dbname=jour09;',
    'root',
    'Scarface13'
);if ($connexion) {
    echo "Connexion réussie !";
    echo "<br>";
} else {
    echo "Erreur de connexion : " . mysqli_connect_error();
}
$sql = 'SELECT * FROM  etudiant';
$requete = $connexion->prepare($sql);
$requete->execute();
$r =  $requete->fetchAll();


if ($r) {
    echo '<table style="border-collapse:collapse;margin-top: 20px">';
    echo '<thead style="padding: 20px">';
    echo '<tr>';
    echo '<th style="border: 1px solid black;padding: 10px">Nom</th>';
    echo '<th style="border: 1px solid black;padding: 10px">Prénom</th>';
    echo '<th style="border: 1px solid black; padding: 10px">Naissance</th>';
    echo '<th style="border: 1px solid black;padding: 10px">Sexe</th>';
    echo '<th style="border: 1px solid black;padding: 10px">Email</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($r as $row) {
        echo "<tr>";
        echo "<td style='border: 1px solid'>" . $row['nom'] . "</td>";
        echo "<td style='border: 1px solid'>" . $row['prenom'] . "</td>";
        echo "<td style='border: 1px solid'>" . $row['naissance'] . "</td>";
        echo "<td style='border: 1px solid'>" . $row['sexe'] . "</td>";
        echo "<td style='border: 1px solid'>" . $row['email'] . "</td>";
        echo "</tr>";
    }
}

?>