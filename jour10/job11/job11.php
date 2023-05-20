<?php
$conn = new PDO
('mysql:host=localhost;dbname=jour09',
'root',
'');

$req = "SELECT AVG(capacite) AS moyennes FROM salles";
$sql = $conn ->prepare($req);
$sql ->execute();
$exec = $sql ->fetchAll();

echo "<table style='border-collapse: collapse'>";
echo "<tr>";
echo "<th style='border: 1px solid'>" . "Capacite moyenne" . "</tr>"."</th>";

foreach ($exec as $value){
    echo "<tr style='border: 1px solid'>". "<td>" . $value['moyennes'] . "</td>";
}
