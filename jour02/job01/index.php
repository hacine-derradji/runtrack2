<!DOCTYPE html>
<html>
<head>
    <title>Les nombres entre 0 et 1337</title>
</head>
<body>
    <?php
    
        for ($i = 0; $i<1338; $i++) {
            echo $i . "<br/>";
            if ($i == 47) 
            {
                echo "<b><u>" . $i . "</u></b><br />";
            }
        }
    ?>
</body>
</html>
