<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$len = strlen($str);
$temp = $str[0];

for ($i = 0; $i < $len-1; $i++) {
    $str[$i] = $str[$i+1];
}

$str[$len-1] = $temp;

echo $str;
