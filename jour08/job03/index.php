<?php
session_start();

if(isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    $_SESSION['prenoms'][] = $prenom;
}

if(isset($_POST['reset'])) {
    unset($_SESSION['prenoms']); 
}

if(isset($_SESSION['prenoms'])) {
    $prenoms = $_SESSION['prenoms']; 
} else {
    $prenoms = [];
}

echo "Liste des prénom :<br>";
foreach($prenoms as $prenom) {
    echo $prenom . "<br>";
}
?>

<form action="" method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Ajouter">
</form>

<form action="" method="post">
    <input type="submit" name="reset" value="RESET">
</form>
