<form method="post">
    <label for="name">Nom :</label>
        <input type="text" id='name'name='name'>
    
    <label for="prenom">prenom :</label>
        <input type="text" id='prenom'name='prénom'>

        <input type="submit" value="envoyer">

    <?php
    if(isset($_POST)){

        $arg = count($_POST);
        echo "<br> nombre d'arguments $arg";
    
    }
    ?>

</form>