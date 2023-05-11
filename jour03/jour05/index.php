<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    'voyelles' => 0,
    'consonnes' => 0
);

$str = strtolower($str); 

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (in_array($char, array('a', 'e', 'i', 'o', 'u', 'y'))) {
        $dic['voyelles']++;
    } elseif (ctype_alpha($char)) { 
        $dic['consonnes']++;
    }
}

echo '<table>';
echo '<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
echo '<tbody><tr><td>'.$dic['voyelles'].'</td><td>'.$dic['consonnes'].'</td></tr></tbody>';
echo '</table>';
?>
