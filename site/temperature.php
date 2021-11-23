<!DOCTYPE html>
<html>
    <head>
        <title>temperature.php</title>
    </head>
    <body>
        <p>
            <?php
                $raw = `../bme280`; 
                $deserialized = json_decode($raw);
                echo "Temperature: {$deserialized->temperature}, Pressure: {$deserialized->pressure},
                Altitude: {$deserialized->altitude}";
            ?>
        </p>
    </body>
</html>