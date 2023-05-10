<!DOCTYPE html>
<html>
  <head>
    <title>Les conditions</title>
  </head>
  <body>
    <?php
      for ($i=0; $i<=100; $i++) {
        if ($i >= 0 && $i <= 20) {
          echo "<i>" . ($i === 42 ? "La Plateforme_" : $i) . "</i><br />";
        } elseif ($i >= 25 && $i <= 50) {
          echo "<u>" . ($i === 42 ? "La Plateforme_" : $i) . "</u><br />";
        } else {
          echo ($i === 42 ? "La Plateforme_" : $i) . "<br />";
        }
      }
    ?>
  </body>
</html>
