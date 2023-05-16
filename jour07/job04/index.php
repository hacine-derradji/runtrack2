<?php
function calcule($nbr,$opperator, $nbr1)
{   if($opperator === "+") {
    return $nbr + $nbr1;
}

}
$resultat = calcule(10,"+",20);
echo $resultat;
