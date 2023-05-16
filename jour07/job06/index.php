<?php
function leetSpeak($str) {
$leetChars = array(
'a' => '4',
'b' => '8',
'e' => '3',
'g' => '6',
'l' => '1',
's' => '5',
't' => '7',
'A' => '4',
'B' => '8',
'E' => '3',
'G' => '6',
'L' => '1',
'S' => '5',
'T' => '7'
);

foreach ($leetChars as $letter => $leetChar) {
$str = str_replace($letter, $leetChar, $str);
}

return $str;
}


$text = "Hello World!";
$leetText = leetSpeak($text);
echo $leetText;