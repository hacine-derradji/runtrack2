<!doctype html>
<html>
<head>
        <title>exo</title>
</head>
<body>
        <form method="get">
            <label for="nom">Nom</label>
            <input type="text" id='nom' name="nom">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom">
            <label for="submit"></label>
            <input type="submit" id=submit>
        </form>

        <?php
    if (isset($_GET)) {
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        foreach ($_GET as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    }
    ?>


</body>
</html>