<!DOCTYPE html>
<html>
  <head>
    <title>Formularauswertung</title>
  </head>
  <body>
    <?php
    echo "<p>Folgende Daten wurden übermittelt:</p>";
    echo "<p>Küche_Soll: " . $_POST["Küche_Soll"] . "<br>";
    echo "Buero_Soll: " . $_POST["Buero_Soll"] . "<br>";
    echo "<hr>Informationen über Variablen mit <strong>print_r()</strong>:<br><pre>";
    print_r($_POST);
    echo "</pre><hr>Informationen über Variablen mit <strong>var_dump()</strong>:<br><pre>";
    var_dump($_POST);
    echo "</pre>";
    ?>
  </body>
</html>
