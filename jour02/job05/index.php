<!DOCTYPE html>
<html>
  <head>
    <title>Les conditions</title>
  </head>
  <body>
    <?php
      function est_premier($n) {
        if ($n < 2) {
          return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
          if ($n % $i == 0) {
            return false;
          }
        }
        return true;
      }

      for ($i = 2; $i <= 1000; $i++) {
        if (est_premier($i)) {
          echo $i . "<br />";
        }
      }
    ?>
  </body>
</html>
