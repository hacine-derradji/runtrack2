<?php
if(isset($_COOKIE['nbvisites'])) {
    $nbVisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbVisites);
}

if(isset($_GET['reset'])) {
    $nbVisites = 0;
    setcookie('nbvisites', $nbVisites);
}

echo "Nombre de visites : " . $nbVisites;
?>

<form action="" method="get">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
