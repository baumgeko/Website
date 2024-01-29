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

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatur-Anzeige</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Temperatur-Anzeige</h1>
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
    <h2>Aktuelle Raumtemperaturen</h2>

    <div class="temperature-container">
        <div class="room-temperature">
            <h3>Küche</h3>
            
            <p>Aktuell: <?php echo $_SESSION['aktuelleKuecheTempC']; ?> °C </p>
            <p>Soll: <?php echo $_SESSION['kuecheSollTempC']; ?> °C / <?php echo celsiusToFahrenheit($_SESSION['kuecheSollTempC']); ?> °F</p>
        </div>

        <div class="room-temperature">
            <h3>Büro</h3>
          
            <p>Aktuell: <?php echo $_SESSION['aktuelleBueroTempC']; ?> °C </p>
            <p>Soll: <?php echo $_SESSION['bueroSollTempC']; ?> °C / <?php echo celsiusToFahrenheit($_SESSION['bueroSollTempC']); ?> °F</p>
        </div>
    </div>
</section>

</body>
</html>
