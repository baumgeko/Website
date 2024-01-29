<?php
session_start();

// Definition der celsiusToFahrenheit-Funktion
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Initialisierung der Session-Variablen, falls sie noch nicht gesetzt sind
$_SESSION['kuecheSollTempC'] = isset($_SESSION['kuecheSollTempC']) ? $_SESSION['kuecheSollTempC'] : 23.0;
$_SESSION['aktuelleKuecheTempC'] = isset($_SESSION['aktuelleKuecheTempC']) ? $_SESSION['aktuelleKuecheTempC'] : 22.5;

$_SESSION['bueroSollTempC'] = isset($_SESSION['bueroSollTempC']) ? $_SESSION['bueroSollTempC'] : 22.5;
$_SESSION['aktuelleBueroTempC'] = isset($_SESSION['aktuelleBueroTempC']) ? $_SESSION['aktuelleBueroTempC'] : 22.5;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['kuecheSollTemp']) && isset($_POST['bueroSollTemp'])) {
        $_SESSION['kuecheSollTempC'] = min($_POST['kuecheSollTemp'], 45.0);
        // $_SESSION['aktuelleKuecheTempC'] = min($_POST['aktuelleKuecheTempC'], 45.0);
        $_SESSION['bueroSollTemp'] = min($_POST['bueroSollTemp'], 45.0);
        // $_SESSION['aktuelleBueroTempC'] = min($_POST['aktuelleBueroTempC'], 45.0);
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatur-Eingabe</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Temperatur-Eingabe</h1>
</header>

<nav>
    <ul>
        <li><a href="startseite.php">Startseite</a></li>
        <li><a href="temp_anzeige.php">TempAnzeige</a></li>
        <li><a href="temp_eingabe.php">SollTempEingabe</a></li>
        <li><a href="temp_log.php">TempLog</a></li>
        <li><a href="impressum.php">Impressum</a></li>
    </ul>
</nav>

<section id="content">
    <h2>Solltemperaturen ändern</h2>

    <form method="post" action="temp:anzeige.php">
    <label for="kuecheSollTemp">Küche (°C):</label>
    <div class="input-container">
        <input type="number" name="kuecheSollTemp" step="0.1" value="<?php echo $_SESSION['kuecheSollTempC']; ?>" max="45.0">
        <span>°C / <?php echo celsiusToFahrenheit($_SESSION['kuecheSollTempC']); ?> °F</span>
    </div>

    <br>

    <label for="bueroSollTemp">Büro (°C):</label>
    <div class="input-container">
        <input type="number" name="bueroSollTemp" step="0.1" value="<?php echo $_SESSION['bueroSollTempC']; ?>" max="45.0">
        <span>°C / <?php echo celsiusToFahrenheit($_SESSION['bueroSollTempC']); ?> °F</span>
    </div>

    <br>

    <input type="submit" value="Speichern">
</form>
</section>

</body>
</html>
