<!doctype html>
<html>
<head>
        <title>exo</title>
</head>
<body>
        <form method="post">
            <label for="username">Nom d'utlisateur :</label>
                <input type="text" id='username'name='pseudo'>

            <label for="password">Votre mot de passe :</label>
                <input type="password" name="mdp" id="password">

                <input type="submit" value="envoyer">
        </form>
        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       if (isset($_POST['pseudo']) && $_POST['pseudo'] === 'john' && isset($_POST['mdp']) && $_POST['mdp'] === 'rambo') {
        echo "<p>C’est pas ma guerre</p>";
       } else  {
        echo "votre pire cauchemar";
      }
    }
    
        
        ?>
</body>
</html>