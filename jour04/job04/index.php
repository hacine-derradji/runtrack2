<!doctype html>
<html>
<head>
        <title>exo</title>
</head>
<body>
        <form method="post">
            <label for="name">Nom :</label>
                <input type="text" id='name'name='nom'>
            <label for="prenom">Prénom :</label>
                <input type="text" id='prenom' name='prenom'>
            <label for="submit"></label>
                <input type="submit">
        </form>
        <?php
        if(isset($_POST)){
            echo "<table>";
            echo "<tr><th>Argument</th><th>Valeur</th></tr>";
            foreach ($_POST as $k => $v){
            echo "<tr><td>$k </td><td>$v </td></tr>";
            echo"</table>";
                
            }
                
        }
        ?>

</body>

</html>