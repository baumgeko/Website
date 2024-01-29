<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatur-Anzeige2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Temperatur-Anzeige2</h1>
</header>
<nav>
    <ul>
        <li><a href="startseite.php">Startseite</a></li>
        <li><a href="temp_anzeige.php">TempAnzeige</a></li>
        <li><a href="temp_eingabe.php">SollTempEingabe</a></li>
        <li><a href="temp_log.php">TempLog</a></li>
        <li><a href="impressum.php">Impressum</a></li>
        <li><a href="1Seite.php">1Seite</a></li>
        <li><a href="1Eingabe.php">1Eingabe</a></li>
    </ul>
</nav>
    <?php
    echo "<p>Folgende Daten wurden übermittelt:</p>";
    echo "<p>Küche_Soll: " . $_POST["Küche_Soll"] . "<br>";
    echo "Buero_Soll: " . $_POST["Buero_Soll"] . "<br>";
    ?>
  </body>
</html>
