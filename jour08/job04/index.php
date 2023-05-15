<?php
if(isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo '<br>';
    echo '<form action="" method="post">';
    echo '<input type="submit" name="deco" value="Déconnexion">';
    echo '</form>';
    
    if(isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600, "/");
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
} else {
    if(isset($_POST['connexion'])) {
        $prenom = $_POST['prenom'];
        setcookie('prenom', $prenom, time() + (86400 * 30), "/");
            header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    
    echo '<form action="" method="post">';
    echo 'Prénom: <input type="text" name="prenom">';
    echo '<input type="submit" name="connexion" value="Connexion">';
    echo '</form>';
}
?>
