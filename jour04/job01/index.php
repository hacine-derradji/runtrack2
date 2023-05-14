<!doctype html>
<html>
<head>
        <title>exo</title>
</head>
<body>
    
<form method="get">
    <label for="name">nom :</label>
    <input type="text" id="name" name="name">
    <label for="age">age :</label>
    <input type="text" id='age' name="age">
    <label for="submit"></label>
    <input type="submit" id='submit'>
</form>

    <?php
    
    if (isset($_GET["name"]) && isset($_GET["age"])) {
        $len = count($_GET);    
        echo "Nombre d'arguments : $len";
    }
    ?>
    
</body>
</html>