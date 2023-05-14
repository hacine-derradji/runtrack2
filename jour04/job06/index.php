<form action="" method="get">
    <label for="number"></label>
        <input type="number" name="nombre" id="nombre">
        <input type="submit" value="envoyer">

        <?php
        if(isset($_GET['nombre'])){

            if($_GET['nombre']% 2 == 0){
                echo '<br> nombre pair';
            }
            else {
                echo '<br> nombre impair';
            }
        }
    ?>
    
</form>