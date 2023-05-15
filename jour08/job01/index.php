<?php
session_start();

if(isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = -1; 
}

if(isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
}

echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<form method="POST">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
            