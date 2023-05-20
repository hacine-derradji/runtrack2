<?php
$conn = new PDO ('mysql:host=localhost;dbname=jour09','root','');

$req = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$conf = $conn ->prepare($req);
$conf ->execute();
$exec = $conf ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>Capacite" ."</th>";
echo "<tr>";

foreach ($exec as $item) {
    echo "<tr>";
    echo "<td style='border: 1px solid'>" . $item['capacite_totale'] . "</td>";
}
