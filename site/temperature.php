<!DOCTYPE html>
<html>
    <head>
        <title>temperature.php</title>
    </head>
    <body>
        <p>
            <?php
                $raw = `../bme280`; 
                //echo $raw;
                $deserialized = json_decode($raw);
                var_dump($deserialized);
                echo "Temperature: {$deserialized->temperature}, Pressure: {$deserialized->pressure},
                Altitude: {$deserialized->altitude}";
            ?>
        </p>
    </body>
</html>