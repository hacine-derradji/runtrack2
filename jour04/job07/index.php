<form action="" method="get">
        <label for="number">Largeur :</label>
            <input type="number" id='number' name='largeur'>

        <label for="number">hauteur :</label>
            <input type="number" id='number' name='hauteur'>
            
            <input type="submit" value="Afficher">

        <?php
        // J'ai essayé mais j'ai pas réussi 
        if(isset($_GET)){
        
            $hauteur = ($_GET['hauteur']);
            $largeur = ($_GET['largeur']);
        for ($hauteur;$largeur; ;)
            
            echo '/'*.$hauteur;
        }
        ?>
</form>