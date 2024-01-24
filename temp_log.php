<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatur-Log</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Temperatur-Log</h1>
</header>

<nav>
    <ul>
        <li><a href="startseite.php">Startseite</a></li>
        <li><a href="temp_anzeige.php">TempAnzeige</a></li>
        <li><a href="temp_eingabe.php">TempEingabe</a></li>
        <li><a href="temp_log.php">TempLog</a></li>
        <li><a href="impressum.php">Impressum</a></li>
    </ul>
</nav>

<section id="content">
    <?php
    // Beispiel-Array für das Temperatur-Log
    $temperatureLog = array(
        array("Küche", "2024-01-24 08:00:00", 22.5),
        array("Büro", "2024-01-24 08:30:00", 23.0),
        array("Küche", "2024-01-24 09:00:00", 23.5),
        // Fügen Sie weitere Einträge hinzu...
    );
    ?>

    <h2>Temperatur-Log</h2>

    <table>
        <thead>
            <tr>
                <th>Raum</th>
                <th>Zeitpunkt</th>
                <th>Temperatur (°C)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($temperatureLog as $entry) : ?>
                <tr>
                    <td><?php echo $entry[0]; ?></td>
                    <td><?php echo $entry[1]; ?></td>
                    <td><?php echo $entry[2]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

</body>
</html>
