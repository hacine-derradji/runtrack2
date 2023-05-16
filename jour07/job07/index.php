<form method="get">
    <label for="str">Nom :</label>
    <input type="text" id="str" name="str">

    <select name="fonction">
        <option name="gras">Gras</option>
        <option id="cesar">cesar</option>
        <option id="plateforme">plateforme</option>
    </select>
    <input type="submit" value="envoyer">
</form>
<?php   // j'y arrive pas
        if(isset($_GET["str"]) && isset($_GET['fonction'])){
          $str = $_GET['str'];
          $fonction = $_GET['fonction'];
          while()  {
            echo "$str <br>";
            }
        }


